/* ==========================================================
 * Character 360°
 * - 스크롤 진행률에 맞춰 캐릭터 프레임 이미지를 <canvas>에 그림
 * - 마지막 화면: 마무리 문구가 올라오는 만큼 캐릭터를 아래로 (CSS --closing-progress)
 * ========================================================== */
(() => {
    /* 설정 */
    const FRAME_COUNT = 72; // 이미지 장수 (한 장 = 360° ÷ 72 = 5°)
    const START_ANGLE = -20; // 시작 각도 (음수 = 화면 기준 왼쪽으로 회전, 5° 단위)
    const framePath = (n) => `./images/character/frame_${String(n).padStart(3, '0')}.webp`;

    const canvas = document.querySelector('.character-canvas');
    if (!canvas) return;

    const ctx = canvas.getContext('2d');
    const showcase = canvas.closest('.showcase');
    const closing = showcase.querySelector('.closing');
    const reduceMotion = matchMedia('(prefers-reduced-motion: reduce)');
    const startFrame = Math.round(START_ANGLE / (360 / FRAME_COUNT));
    const clamp01 = (value) => Math.min(Math.max(value, 0), 1);

    let current = -1; // 지금 그려야 할 프레임 번호

    // 프레임 미리 불러오기 (아직 안 불러온 프레임은 불러오는 즉시 그림)
    const frames = Array.from({ length: FRAME_COUNT }, (_, i) => {
        const img = new Image();
        img.onload = () => i === current && draw();
        img.src = framePath(i + 1);
        return img;
    });

    function draw() {
        const img = frames[current];
        if (!img?.complete || !img.naturalWidth) return;
        ctx.clearRect(0, 0, canvas.width, canvas.height);
        ctx.drawImage(img, 0, 0, canvas.width, canvas.height); // 이미지·캔버스 모두 정사각형
    }

    // 고해상도 화면 대응
    function resize() {
        const dpr = Math.min(devicePixelRatio || 1, 2);
        canvas.width = Math.round(canvas.clientWidth * dpr);
        canvas.height = Math.round(canvas.clientHeight * dpr);
        draw();
    }

    function update() {
        // 회전: 섹션 스크롤 진행률(0~1) → 프레임 번호 (끝에서 다시 시작 각도로)
        const distance = showcase.offsetHeight - innerHeight;
        const progress = reduceMotion.matches || distance <= 0 ? 0 : clamp01(-showcase.getBoundingClientRect().top / distance);
        const index = (((Math.round(progress * FRAME_COUNT) + startFrame) % FRAME_COUNT) + FRAME_COUNT) % FRAME_COUNT;

        if (index !== current) {
            current = index;
            draw();
        }

        // 마지막 화면: 마무리 문구가 올라온 정도(0~1)
        showcase.style.setProperty('--closing-progress', clamp01(1 - closing.getBoundingClientRect().top / innerHeight).toFixed(3));
    }

    // 스크롤: 한 화면 프레임에 한 번만 계산
    let ticking = false;
    function onScroll() {
        if (ticking) return;
        ticking = true;
        requestAnimationFrame(() => {
            update();
            ticking = false;
        });
    }

    resize();
    update();

    addEventListener('scroll', onScroll, { passive: true });
    addEventListener('resize', () => (resize(), onScroll()));
    reduceMotion.addEventListener('change', onScroll);
})();
