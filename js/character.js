/* ==========================================================
 * Character 360° (frame sequence)
 * - 스크롤 진행률에 맞춰 캐릭터 프레임 이미지를 <canvas>에 그림
 * - 마무리 문구가 올라오는 만큼 캐릭터를 아래로 이동 (--closing-progress)
 * - main.js와 독립적으로 동작 (자체 scroll / resize 이벤트)
 * ========================================================== */
(() => {
    /*
     * 설정
     * - 프레임 이미지: images/character/frame_001.webp ~ frame_036.webp
     * - 이미지가 없으면 임시 캐릭터가 그려짐
     */
    const FRAME_COUNT = 36; // 이미지 장수 (360 ÷ 장수 = 한 장당 각도)
    const FRAME_PATH = (n) => `./images/character/frame_${String(n).padStart(3, '0')}.webp`;

    const canvas = document.querySelector('.character-canvas');
    if (!canvas) return;

    const showcase = canvas.closest('.showcase');
    const closing = showcase.querySelector('.closing');
    const reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)');
    const ctx = canvas.getContext('2d');
    const total = FRAME_COUNT;

    const frames = [];
    let usePlaceholder = false;
    let currentIndex = -1;

    // CSS 변수에서 색상 가져오기 (팔레트 변경 시 자동 반영)
    const css = getComputedStyle(document.documentElement);
    const color = (name) => css.getPropertyValue(name).trim();
    const colors = {
        surface: color('--color-surface'),
        border: color('--color-border'),
        accent: color('--color-accent'),
        textLight: color('--color-text-light'),
        muted: color('--color-text-muted'),
        dark: color('--color-bg-dark'),
    };

    // 프레임 이미지 불러오기: 첫 장이 없으면 임시 캐릭터 모드
    function loadFrames() {
        for (let i = 0; i < total; i++) {
            const img = new Image();
            img.decoding = 'async';
            img.src = FRAME_PATH(i + 1);
            img.onload = () => {
                if (i === currentIndex) draw(i, true);
            };
            if (i === 0) {
                img.onerror = () => {
                    usePlaceholder = true;
                    draw(currentIndex < 0 ? 0 : currentIndex, true);
                };
            }
            frames.push(img);
        }
    }

    // 고해상도 화면 대응
    function resize() {
        const dpr = Math.min(window.devicePixelRatio || 1, 2);
        const { width, height } = canvas.getBoundingClientRect();
        canvas.width = Math.round(width * dpr);
        canvas.height = Math.round(height * dpr);
        draw(currentIndex < 0 ? 0 : currentIndex, true);
    }

    const clamp01 = (value) => Math.min(Math.max(value, 0), 1);

    // 섹션 안에서의 스크롤 진행률(0 ~ 1)
    function getProgress() {
        const distance = showcase.offsetHeight - window.innerHeight;
        if (distance <= 0) return 0;
        return clamp01(-showcase.getBoundingClientRect().top / distance);
    }

    // 마무리 문구가 화면 아래에서 올라온 정도(0 ~ 1): 0 = 화면 밖, 1 = 마지막 화면
    function getClosingProgress() {
        return clamp01(1 - closing.getBoundingClientRect().top / window.innerHeight);
    }

    function update() {
        // 0 → 360°: 마지막에 다시 정면(0번)으로 돌아오도록 % total
        const index = reduceMotion.matches ? 0 : Math.round(getProgress() * total) % total;
        draw(index);

        // 마지막 화면: 캐릭터를 아래로 (이동 거리는 CSS --closing-offset)
        showcase.style.setProperty('--closing-progress', getClosingProgress().toFixed(3));
    }

    function draw(index, force = false) {
        if (index === currentIndex && !force) return;
        currentIndex = index;

        const { width: w, height: h } = canvas;
        ctx.clearRect(0, 0, w, h);

        if (usePlaceholder) {
            drawPlaceholder(index, w, h);
            return;
        }

        // 아직 로드 안 된 프레임이면 가장 가까운 로드된 프레임 사용
        const img = frames[index]?.complete && frames[index].naturalWidth ? frames[index] : frames.find((f) => f.complete && f.naturalWidth);
        if (!img) return;

        // object-fit: contain
        const scale = Math.min(w / img.naturalWidth, h / img.naturalHeight);
        const dw = img.naturalWidth * scale;
        const dh = img.naturalHeight * scale;
        ctx.drawImage(img, (w - dw) / 2, (h - dh) / 2, dw, dh);
    }

    // 임시 캐릭터: 앞(눈·입) / 옆 / 뒤(가방) 구분이 보이도록 간단히 그림
    function drawPlaceholder(index, w, h) {
        const S = Math.min(w, h);
        const cx = w / 2;
        // 그림(머리~그림자)의 시각적 중심이 캔버스 중앙에 오도록 위로 보정
        const cy = h / 2 - S * 0.1;
        const theta = (index / total) * Math.PI * 2;
        const cos = Math.cos(theta);
        const lw = S * 0.008;

        // 바닥 그림자
        ctx.fillStyle = colors.dark;
        ctx.beginPath();
        ctx.ellipse(cx, cy + S * 0.4, S * 0.2, S * 0.035, 0, 0, Math.PI * 2);
        ctx.fill();

        // 몸통 (옆모습일수록 얇아짐)
        const bodyY = cy + S * 0.17;
        const bodyRx = S * 0.16 * (0.7 + 0.3 * Math.abs(cos));
        ctx.fillStyle = colors.surface;
        ctx.strokeStyle = colors.border;
        ctx.lineWidth = lw;
        ctx.beginPath();
        ctx.ellipse(cx, bodyY, bodyRx, S * 0.2, 0, 0, Math.PI * 2);
        ctx.fill();
        ctx.stroke();

        // 등의 가방 (뒤를 볼 때만)
        const backPhi = theta + Math.PI;
        if (Math.cos(backPhi) > 0) {
            const bx = cx + Math.sin(backPhi) * bodyRx * 0.8;
            const bw = S * 0.16 * Math.cos(backPhi);
            ctx.fillStyle = colors.accent;
            ctx.beginPath();
            ctx.roundRect(bx - bw / 2, bodyY - S * 0.1, bw, S * 0.2, S * 0.03);
            ctx.fill();
        }

        // 머리
        const headY = cy - S * 0.13;
        const r = S * 0.15;
        ctx.fillStyle = colors.surface;
        ctx.strokeStyle = colors.accent;
        ctx.beginPath();
        ctx.arc(cx, headY, r, 0, Math.PI * 2);
        ctx.fill();
        ctx.stroke();

        // 눈 (구 표면 위 좌우 ±0.45rad, 보이는 쪽만)
        ctx.fillStyle = colors.textLight;
        [-0.45, 0.45].forEach((offset) => {
            const phi = theta + offset;
            const depth = Math.cos(phi);
            if (depth <= 0) return;
            ctx.beginPath();
            ctx.ellipse(cx + Math.sin(phi) * r * 0.8, headY - r * 0.1, r * 0.11 * depth, r * 0.16, 0, 0, Math.PI * 2);
            ctx.fill();
        });

        // 입
        if (cos > 0) {
            ctx.strokeStyle = colors.textLight;
            ctx.lineWidth = lw;
            ctx.beginPath();
            ctx.ellipse(cx + Math.sin(theta) * r * 0.8, headY + r * 0.35, r * 0.22 * cos, r * 0.1, 0, 0, Math.PI);
            ctx.stroke();
        }

        // 각도 표시
        const deg = Math.round((index / total) * 360);
        const label = deg === 0 ? 'FRONT' : deg === 180 ? 'BACK' : deg < 180 ? 'SIDE R' : 'SIDE L';
        ctx.fillStyle = colors.muted;
        ctx.font = `bold ${Math.round(S * 0.045)}px sans-serif`;
        ctx.textAlign = 'center';
        ctx.fillText(`${label} · ${deg}°`, cx, cy + S * 0.49);
    }

    // 스크롤 이벤트: requestAnimationFrame으로 한 프레임에 한 번만 계산
    let ticking = false;

    function onScroll() {
        if (ticking) return;
        ticking = true;
        requestAnimationFrame(() => {
            update();
            ticking = false;
        });
    }

    loadFrames();
    resize();
    update();

    window.addEventListener('scroll', onScroll, { passive: true });
    window.addEventListener('resize', () => {
        resize();
        onScroll();
    });
    reduceMotion.addEventListener('change', onScroll);
})();
