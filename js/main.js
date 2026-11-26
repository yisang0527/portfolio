/* ==========================================================
 * Common UI
 * 1. 스크롤 : 진행률 바 / 첫 화면 요소 숨김 / 맨 위로 버튼
 * 2. 언어 변경 : KOR / ENG
 * ========================================================== */

/* 1. 스크롤 ------------------------------------------------ */
const progressBar = document.querySelector('.progress-bar');
const topButton = document.querySelector('.top-button');
// 스크롤을 시작하면 사라지는 첫 화면 요소
const introElements = document.querySelectorAll('.welcome-ring, .scroll-hint');

function updateScroll() {
    const maxScroll = document.documentElement.scrollHeight - window.innerHeight;
    const percent = maxScroll > 0 ? Math.min(window.scrollY / maxScroll * 100, 100) : 0;

    progressBar.style.width = `${percent}%`;
    introElements.forEach((el) => el.classList.toggle('is-hidden', window.scrollY > 20));
    // 첫 화면을 지나면 맨 위로 버튼 표시
    topButton.classList.toggle('is-visible', window.scrollY > window.innerHeight);
}

window.addEventListener('scroll', updateScroll, { passive: true });
window.addEventListener('resize', updateScroll);
updateScroll();

// 맨 위로 이동 (부드러운 스크롤은 CSS scroll-behavior가 담당)
topButton.addEventListener('click', () => window.scrollTo({ top: 0 }));

/* 2. 언어 변경 --------------------------------------------- */
// 키 이름 = HTML의 data-lang 값
const translations = {
    ko: {
        pageTitle: '이재영 | 프론트엔드 개발자 포트폴리오',
        profileName: '이재영',
        welcomeTitle: '나의 포트폴리오에 오신 것을 환영합니다',

        // 왼쪽: 소개 / 스킬 / 경력 / 교육 / 연락처
        aboutTitle: '디자인과 코드 사이를 잇는 프론트엔드 개발자',
        aboutDesc: '사용자가 편하게 쓰는 화면을 고민하고, 그 고민을 깔끔한 코드로 옮깁니다. 작은 인터랙션 하나까지 완성도 있게 다듬는 것을 좋아합니다.',
        skillsTitle: '스킬 & 툴',
        skillsDesc: '웹 표준과 접근성을 기본으로, 반응형 UI부터 컴포넌트 설계까지 다룹니다.',
        experienceTitle: '경력',
        experience1Role: '웹 퍼블리셔 · F 회사',
        experience1Desc: '홈페이지 유지보수를 담당하며, 웹 접근성을 기반으로 한 반응형 페이지를 제작하고 있습니다. 프로그램의 사용자 경험(UX) 개선을 위해 UI를 최적화하는 작업도 함께 진행하고 있습니다.',
        educationTitle: '교육',
        education1Institution: 'DW 아카데미',
        education1Course: '[기업프로젝트] 데이터시각화 UI 개발자 트랙',
        education1Desc: '데이터를 시각화하는 과정을 여러 프로그래밍 언어로 표현하는 방법을 배우며, 복잡한 데이터를 한눈에 이해할 수 있는 UI로 풀어내는 역량을 길렀습니다.',
        contactTitle: '연락 정보',
        contactAddress: '경기도 안양시',
        contactPhone: '010-4135-2602',

        // 오른쪽: 프로젝트
        project1Title: '포트폴리오 웹사이트',
        project1ImageAlt: '포트폴리오 웹사이트 첫 화면: 원형 환영 문구에 둘러싸인 캐릭터',
        project1Desc: 'HTML, CSS, JavaScript로 직접 디자인하고 개발했습니다. 스크롤에 따라 360° 회전하는 캐릭터를 중심으로, 저의 기술 스택과 경력, 교육 이력 등 개발자로서의 스펙을 한눈에 볼 수 있도록 구성했습니다.',
        project2Title: '제작중',
        project2Desc: '다음 프로젝트를 제작중입니다.',

        // 마무리 / 버튼
        closingTitle: '끝까지 봐주셔서 감사합니다',
        closingDesc: '궁금한 점이 있으시다면 언제든지 연락주세요.',
        topButton: '맨 위로',

        // 공통
        present: '현재',
        labelPeriod: '기간',
        labelInstitution: '학습기관',
        labelCourse: '학습과정',
        labelContent: '학습 내용',
        linkDemo: '사이트 보기',
    },
    en: {
        pageTitle: 'Lee Jaeyoung | Frontend Developer Portfolio',
        profileName: 'Lee Jaeyoung',
        welcomeTitle: 'Welcome to my portfolio',

        // 왼쪽: 소개 / 스킬 / 경력 / 교육 / 연락처
        aboutTitle: 'A frontend developer bridging design and code',
        aboutDesc: 'I think about interfaces that feel effortless to use, then turn those ideas into clean code. I love polishing every interaction down to the smallest detail.',
        skillsTitle: 'Skills & Tools',
        skillsDesc: 'Grounded in web standards and accessibility, I build everything from responsive UI to component architecture.',
        experienceTitle: 'Experience',
        experience1Role: 'Web Publisher · F company',
        experience1Desc: 'I maintain the company website and build responsive pages based on web accessibility standards, while optimizing UI to improve the user experience (UX) of our programs.',
        educationTitle: 'Education',
        education1Institution: 'DW Academy',
        education1Course: '[Corporate Project] Data Visualization UI Developer Track',
        education1Desc: 'Learned how to express the data visualization process in multiple programming languages, building the ability to turn complex data into UI that is easy to understand at a glance.',
        contactTitle: 'Contact me',
        contactAddress: 'Anyang-si, Gyeonggi-do, Republic of Korea',
        contactPhone: '+82 10-4135-2602',

        // 오른쪽: 프로젝트
        project1Title: 'Portfolio Website',
        project1ImageAlt: 'Portfolio website first screen: a character surrounded by a circular welcome message',
        project1Desc: 'Designed and built with HTML, CSS and JavaScript. Centered on a character that rotates 360° as you scroll, the site brings together my tech stack, experience and education so you can see my background as a developer at a glance.',
        project2Title: 'In progress',
        project2Desc: 'My next project is currently in progress.',

        // 마무리 / 버튼
        closingTitle: 'Thank you for visiting',
        closingDesc: "If you'd like to work together, feel free to reach out anytime.",
        topButton: 'Back to top',

        // 공통
        present: 'Present',
        labelPeriod: 'Period',
        labelInstitution: 'Institution',
        labelCourse: 'Course',
        labelContent: 'What I learned',
        linkDemo: 'Live site',
    },
};

const langButtons = document.querySelectorAll('.lang-switch button');

function changeLanguage(lang) {
    if (!translations[lang]) lang = 'ko';

    document.querySelectorAll('[data-lang]').forEach((el) => {
        el.textContent = translations[lang][el.dataset.lang] ?? el.textContent;
    });

    // 이미지 대체 텍스트(alt)
    document.querySelectorAll('[data-lang-alt]').forEach((el) => {
        el.alt = translations[lang][el.dataset.langAlt] ?? el.alt;
    });

    langButtons.forEach((btn) => btn.setAttribute('aria-pressed', btn.value === lang));
    document.documentElement.lang = lang;
    localStorage.setItem('selectedLang', lang);
}

langButtons.forEach((btn) => {
    btn.addEventListener('click', () => changeLanguage(btn.value));
});

changeLanguage(localStorage.getItem('selectedLang') || (navigator.language.startsWith('ko') ? 'ko' : 'en'));
