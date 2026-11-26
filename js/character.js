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
    const wrap = (i) => ((i % FRAME_COUNT) + FRAME_COUNT) % FRAME_COUNT;
    const clamp01 = (value) => Math.min(Math.max(value, 0), 1);
    const startFrame = wrap(Math.round(START_ANGLE / (360 / FRAME_COUNT)));

    const frames = [];
    const ready = []; // 불러오기 + 디코딩까지 끝난 프레임
    let current = startFrame; // 그려야 할 프레임
    let drawn = -1; // 실제로 그려져 있는 프레임

    /*
     * 프레임 불러오기
     * - 시작 프레임부터 스크롤 방향 순서대로 요청 → 첫 화면이 가장 먼저 뜨고, 다음 장면이 미리 준비됨
     * - decode(): 그리기 전에 미리 디코딩 → 스크롤 중 끊김 방지
     */
    for (let step = 0; step < FRAME_COUNT; step++) {
        const i = wrap(startFrame + step);
        const img = new Image();
        img.src = framePath(i + 1);
        img.decode().then(() => {
            ready[i] = true;
            draw();
        }, () => {});
        frames[i] = img;
    }

    // 그릴 프레임이 아직 준비 전이면 가장 가까운 준비된 프레임 사용 (빈 화면·깜빡임 방지)
    function nearestReady(index) {
        for (let d = 0; d <= FRAME_COUNT / 2; d++) {
            if (ready[wrap(index - d)]) return wrap(index - d);
            if (ready[wrap(index + d)]) return wrap(index + d);
        }
        return -1;
    }

    function draw() {
        const index = nearestReady(current);
        if (index < 0 || index === drawn) return;
        drawn = index;
        ctx.clearRect(0, 0, canvas.width, canvas.height);
        ctx.drawImage(frames[index], 0, 0, canvas.width, canvas.height); // 이미지·캔버스 모두 정사각형
    }

    // 고해상도 화면 대응 (크기가 실제로 바뀔 때만 → 모바일 주소창 변화로 캔버스가 지워지는 깜빡임 방지)
    function resize() {
        const dpr = Math.min(devicePixelRatio || 1, 2);
        const size = Math.round(canvas.clientWidth * dpr);
        if (size === canvas.width) return;
        canvas.width = canvas.height = size;
        drawn = -1;
        draw();
    }

    function update() {
        // 회전: 섹션 스크롤 진행률(0~1) → 프레임 번호 (끝에서 다시 시작 각도로)
        const distance = showcase.offsetHeight - innerHeight;
        const progress = reduceMotion.matches || distance <= 0 ? 0 : clamp01(-showcase.getBoundingClientRect().top / distance);
        current = wrap(Math.round(progress * FRAME_COUNT) + startFrame);
        draw();

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
