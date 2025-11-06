<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>중등 도서</title>
<style>
  @font-face {
    font-family: 'Pretendard';
    src: url('https://cdn.jsdelivr.net/gh/Project-Noonnu/noonfonts_2107@1.1/Pretendard-Medium.woff') format('woff');
    font-weight: 400;
    font-display: swap;
  }
  /* 공통 초기화 */
  * { margin:0; padding:0; box-sizing:border-box; }
  body { font-family: 'Pretendard', sans-serif; font-size: 18px; }
  a { text-decoration: none; color: #111; }

  /* ===================== 헤더 ===================== */
        .head1 { background-color: white; position: fixed; top: 0; left: 0; width: 100%; height: 80px; z-index: 1000; } /* 헤더 영역 */
        .head1>a { position: absolute; top: 20%; left: 8%; width: 180px; } /* 로고 링크 */
        .head1>a img { width: 100%; } /* 로고 이미지 */
        .manu { position: absolute; top: 0; left: 34%; width: 500px; height: 100%; } /* 메뉴 박스 */
        .manu>ul { width: 100%; height: 100%; display: flex; justify-content: space-between; 
        align-items: center; list-style: none; }
        .manu ul li { width: 25%; height: 100%; } /* 메뉴 항목 */
        .manu a { display: block; width: 100%; height: 100%; text-align: center; line-height: 100px; 
        text-decoration: none; color: black; font-size: 18px; font-weight: bold; font-family: 'Pretendard', sans-serif; }
        .manu a:hover { color: dodgerblue; }
        ul{ list-style: none; }

        @media screen and (max-width: 1440px) {
            .head1>a { left: 4%; }
        }
        @media screen and (max-width: 1024px) {
            .head1>a { left: 6%; }
        }
        @media screen and (max-width: 768px) {
            .head1>a { scale: 0.9; }
        }
        @media screen and (max-width: 425px) {
            .head1>a { scale: 0.7; }
        }

        /* ===================== 모바일 햄버거 ===================== */
        .toggle { width: 25px; height: 30px; position: fixed; cursor: pointer; display: none; right:0; }
        .toggle span { display: block; height: 2px; background: black; margin: 5px 0; 
        transition: all 0.3s ease; border-radius: 2px; }
        .toggle.active span:nth-child(1) { transform: translateY(7px) rotate(45deg); }
        .toggle.active span:nth-child(2) { opacity: 0; }
        .toggle.active span:nth-child(3) { transform: translateY(-7px) rotate(-45deg); }
        #gnb { z-index: 1000; display: none; position: fixed; left: 0; right: 0; border-top: 1px solid #E5E5E5; 
        top: 10%; width: 100%; height: 32%; border-bottom: 1px solid #E5E5E5; background-color: white; }
        #gnb.on { display: block; }

        /* ===================== 반응형 ===================== */

       @media screen and (max-width: 1024px) {
            .manu { display: none; }
            .toggle { display: block; top: 4%; right: 6%; }
        }
       @media screen and (max-width: 768px) {
            .toggle { top: 4%; right: 8%; }
        }
       @media screen and (max-width: 768px) {
            .toggle { top: 4%; right: 12%; width: 20px; height: 25px; }
            .toggle span { margin: 4px 0; }
            .toggle.active span:nth-child(1) { transform: translateY(6px) rotate(45deg); }
            .toggle.active span:nth-child(2) { opacity: 0; }
            .toggle.active span:nth-child(3) { transform: translateY(-6px) rotate(-45deg); }
        }
        @media screen and (max-width: 375px) {
            .toggle { top: 4%; right: 20%; }
        }

        /* ===================== GNB 내부 ===================== */
        #container { display: flex; width: 100%; z-index: 1000; }
        #gnblow { width: 100%; display: flex; z-index: 1000;}
        #box1, #box2, #box4 { position: fixed; top: 10%; }
        #box1 {  height: 30%; left: 35.3%; }
        #box2 {  height: 25%; left: 47.5%; }
        #box4 {  height: 30%; left: 54.4%; }
        #b1 { width: 5%; height: 30%; position: fixed; left: 36.5%; top: 10%; }
        #b2 { width: 6%; height: 25%; position: fixed; left: 42.5%; top: 10%; }
        #b4 { width: 6%; height: 30%; position: fixed; left: 55.5%; top: 10%; }
        #b1 li, #b2 li, #b4 li { margin-top: 20px; list-style: none; font-family: 'Pretendard', sans-serif; 
        font-size: 16px; }
        #b1 li a, #b2 li a, #b4 li a { text-decoration: none; color: #666666; }
        #b1 li a:hover, #b2 li a:hover, #b4 li a:hover { font-weight: bold; }

        #ggs { display: none; margin: auto; }
        #ggs.on { display: none; }
        .gnb2 { width: 100%; height: 100%; margin-top: 80px; background-color: white; position: fixed; 
        display: grid; grid-template-columns: repeat(4, 1fr);  font-size: 32px; padding: 20px; text-align: center; }
        .gnb2>a {font-weight: bold; font-family: 'Pretendard', sans-serif; font-size: 40px;}
        .gnb2 a {text-decoration: none; color: #111; font-family: 'Pretendard', sans-serif;}
        .gnb2 .sub {display:  flex; flex-direction: column; font-size: 24px;}
        .sub li { margin-top: 20px; }
        .sub li a { color: #666; }
        .sub li a:hover { font-weight: bold; }

        @media screen and ( max-width:768px ) {
            .gnb2 li a { font-size: 28px; }
            .sub li a { font-size: 18px; }
        }
        @media screen and ( max-width:768px ) {
            .gnb2 li a { font-size: 24px; }
            .sub li a { font-size: 16px; }
        }

  /* 컨테이너 */
    #cont { max-width: 1500px; margin: 100px auto 0; padding: 50px 20px; }
  .h1 { margin-bottom:30px; text-align:center; font-size:36px; }

  /* 검색창 */
  .filter1 { max-width:530px; height:56px; margin:20px auto; position:relative; display:flex; }
  .filter1 input { flex: 1; border-radius: 2rem; border: 0; padding-left: 1.2rem; padding-right: 50px;
    box-shadow: 0 .25rem 1.5rem rgba(0,0,0,0.08); font-size: 14px; display: flex; align-items: center;
    height: 56px; }
  .btn1 { position:absolute; top:0; right:0; width:56px; height:56px; border:none; background:none;
  cursor:pointer; display:flex; align-items:center; justify-content:center; }
  .icon-srch img { width: 24px; height: 24px; display: block; }

  /* 필터 */
  #filterall { margin-top:30px; padding:10px 20px; border-radius:20px; border:1px solid #ccc;
  background:#fafafa; }
  .filter-box { margin-bottom:20px; }
  .filter-title { margin-bottom:10px; font-weight:bold; }
  .filter-btns { display:flex; flex-wrap:wrap; gap:5px; }
  .filter-btn { padding:8px 0; width:100px; height:40px; border-radius:5px; border:1px solid #ccc;
  cursor:pointer; background:#fff; text-align:center; transition:.2s; font-size:16px; font-weight:600; }
  .filter-btn.active { background:#007bff; color:#fff; border-color:#007bff; }

  /* 버튼 */
  .action-btns { margin-top:20px; text-align:right; }
  .action-btns button { padding:10px 20px; margin-left:10px; border:none; border-radius:30px; cursor:pointer; font-size:16px; }
  .btn-apply { background:#000; color:#fff; }
  .btn-reset { background:#e9ecef; }

  /* 책 정보 */
  .book-info { display:flex; justify-content:space-between; align-items:center; margin:30px 0; font-size:16px; }
  .total-count { color:#333; font-weight:600; }

  /* 정렬 */
  .sort-tabs { display:flex; gap:15px; border-bottom:2px solid #111; padding-bottom:20px; }
  .sort-btn { border:none; background:none; font-size:16px; cursor:pointer; color:#777; position:relative; }
  .sort-btn.active { font-weight:bold; color:#000; }
  .sort-btn.active::after { content:none; position:absolute; bottom:-5px; left:0; right:0; height:2px; background:#000; }

  /* 갤러리 */
  #gal1 { display:flex; flex-wrap:wrap; gap:10px; max-width:1500px; margin:20px auto; 
  justify-content:center; box-sizing:border-box; }
  #gal1 .book { flex:1 1 calc(25% - 10px); max-width:calc(25% - 10px); padding:15px; box-sizing:border-box; }
  #gal1 .ima { width:100%; height:0; padding-bottom:130%; background-color:#cbdfff; border-radius:20px;
  display:flex; align-items:center; justify-content:center; position:relative;}
  #gal1 .ima img { position:absolute; top:50%; left:50%; transform:translate(-50%, -50%);
  width:60%; height:auto; max-height:100%;}
  #gal1 h2 { font-size:18px; margin:10px 0; white-space: wrap; letter-spacing:-0.5px; }
  #gal1 p { border:1px solid #222; border-radius:5px; width:40px;font-size:15px; 
  font-weight:bold; padding:0 5px; font-family: sans-serif; }

  /* 반응형 */
  @media (max-width:1200px) {
    #gal1 .book { flex:1 1 calc(33.333% - 10px); max-width:calc(33.333% - 10px); }
    #gal1 .ima { height:350px; }
  }
  @media (max-width:900px) {
    #gal1 .book { flex:1 1 calc(50% - 10px); max-width:calc(50% - 10px); }
    #gal1 .ima { height:300px; }
  }
  @media (max-width:600px) {
    #gal1 .book { flex:1 1 100%; max-width:100%; }
    #gal1 .ima { height:250px; }
  }

  #box { max-width:1500px; display:none; }

  /* 푸터 */
  #container8 {  width: 100%;  height: 75px;  background-color: #555555;  display: flex; align-items: center; 
        justify-content: space-between; padding: 0 2%; }
        #container8 p {  line-height: 75px; margin: 0; }
        #container8 a {  text-decoration: none;  color: #ddd;  font-size: 14px; margin-left: 20px; }
        #container9 {  position: relative;  width: 100%;  height: 150px;  background-color: #333;  padding: 20px 3%; }
        #container9 img {  position: absolute;  top: 20px;  left: 3%; }
        .footerText1 {  position: absolute;  top: 80px;  left: 3%;  color: #eee;  font-size: 13px; }
        .footerText2 {  position: absolute;  top: 100px;  right: 3%;  color: #ccc;  font-size: 12px; }

        @media screen and (max-width: 1024px) {
            #container8 { flex-direction: column; padding: 10px 2%; justify-content: center; }
            #container8 p, #container8 a { padding: 5px 0; line-height: normal; text-align: center; width: 100%; }
            #container9 { height: 200px; padding: 20px 2% 100px; text-align: center; }
            #container9 img { position: static; margin-bottom: 10px; width: 150px; }
            .footerText1, .footerText2 { position: static; margin: 5px 0; text-align: center; width: 100%; }
        }
</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
  $(function () {
                $(".toggle").click(function () {

                    $('#ggs').stop(true, true).fadeToggle(200);


                    $(this).toggleClass('on');
                });


                $('#gnb').click(function (e) {
                    e.stopPropagation();
                });

                // 문서 클릭하면 메뉴 닫기 및 버튼 모양 원상복구
                $(document).click(function () {
                    if (isClicked) {
                        $('#gnb').fadeOut();
                        $('.toggle').removeClass('on'); // X → 햄버거
                        isClicked = false;
                    }
                });

                // 호버 기능 (아이디 토글 제외)
                $('.manu, #gnb').hover(
                    function () {
                        if (!$('.toggle').hasClass('on')) {
                            $('#gnb').stop(true, true).fadeIn();
                        }
                    },
                    function () {
                        if (!$('.toggle').hasClass('on')) {
                            $('#gnb').stop(true, true).delay(50).fadeOut();
                        }
                    }
                );


                const containers = [
                  { id: 'container3', trigger: 400 },
                  { id: 'container4', trigger: 1100 },
                  { id: 'container5', trigger: 1700 },
                  { id: 'container6', trigger: 2500 },
                  { id: 'container7', trigger: 3000 }
              ];

              window.addEventListener('scroll', () => {
                  const scrollPos = window.scrollY;

                  containers.forEach(({ id, trigger }) => {
                      const element = document.getElementById(id);
                      if (!element) return;

                      if (scrollPos > trigger) {
                          element.classList.add('show');
                      } else {
                          element.classList.remove('show');
                      }
                  });
              });

    // 분류 버튼 클릭 (전체 제외)
    $('.filter-box').eq(0).find('.filter-btn').not(':first').click(function () {
      $(this).siblings().removeClass('active');
      $(this).addClass('active');
      const category = $(this).text();
      const links = {
        '초등': 'https://jjoo545.dothome.co.kr/g5/bbs/board.php?bo_table=free',
        '중등': 'https://jjoo545.dothome.co.kr/g5/bbs/board.php?bo_table=gallery',
        '고등': 'https://jjoo545.dothome.co.kr/g5/bbs/board.php?bo_table=notis',
        '단행본': 'https://jjoo545.dothome.co.kr/g5/bbs/board.php?bo_table=QnA'
      };
      if (links[category]) window.location.href = links[category];
    });

    // 나머지 필터 버튼 클릭
    $('.filter-box').not(':eq(0)').find('.filter-btn').click(function () {
      $(this).siblings().removeClass('active');
      $(this).addClass('active');
    });

    // 초기화 버튼
    $('.btn-reset').click(function () {
      const firstBox = $('.filter-box').eq(0);
      firstBox.find('.filter-btn').removeClass('active').eq(2).addClass('active'); // 초등
      $('.filter-box').not(':eq(0)').each(function () {
        $(this).find('.filter-btn').removeClass('active').first().addClass('active');
      });
      $('#cont h1').text('중등 도서');
      $('.filter1 input').val('');
      $('#book-list .book').show();
    });

    // 필터 적용
    $('.btn-apply').click(function () {
      const category = $('.filter-box').eq(0).find('.filter-btn.active').text();
      const subject = $('.filter-box').eq(1).find('.filter-btn.active').text();
      const grade = $('.filter-box').eq(2).find('.filter-btn.active').text();
      const term = $('.filter-box').eq(3).find('.filter-btn.active').text();
      const keyword = $('.filter1 input').val().toLowerCase();

      $('#book-list .book').each(function () {
        const book = $(this);
        const bCategory = book.data('category');
        const bSubject = book.data('subject');
        const bGrade = book.data('grade');
        const bTerm = book.data('term');
        const bText = book.text().toLowerCase();

        const match =
          (category === '전체' || category === bCategory) &&
          (subject === '전체' || subject === bSubject) &&
          (grade === '전체' || grade === bGrade) &&
          (term === '전체' || term === bTerm) &&
          (keyword === '' || bText.includes(keyword));

        book.toggle(match);
      });
    });

    // 검색
    $('.filter1 input').keypress(function (e) {
      if (e.which === 13) $('.btn-apply').click();
    });
    $('.btn1').click(function () {
      $('.btn-apply').click();
    });

    // 정렬 버튼
    $(".sort-btn").click(function () {
      $(".sort-btn").removeClass("active");
      $(this).addClass("active");
    });
  });
</script>
</head>
<body>
<div class="head1">
            <a href="https://jjoo545.dothome.co.kr/"><img src="img/logo.png"></a>
    
            <div class="manu">
                <ul>
                    <li><a href="#">도서</a></li>
                    <li><a href="#">자료실</a></li>
                    <li><a href="#">이벤트</a></li>
                    <li><a href="#">고객센터</a></li>
                </ul>
            </div>
    
            <div class="toggle" onclick="this.classList.toggle('active')">
                <span></span>
                <span></span>
                <span></span>
            </div>
    
            <nav id="gnb">
                <ul id="gnblow">
                    <li>
                        <ul id="b1">
                            <li><a href="https://jjoo545.dothome.co.kr/g5/bbs/board.php?bo_table=free" target="_blank" rel="noopener noreferrer">초등</a></li>
                            <li><a href="https://jjoo545.dothome.co.kr/g5/bbs/board.php?bo_table=gallery" target="_blank" rel="noopener noreferrer">중등</a></li>
                            <li><a href="https://jjoo545.dothome.co.kr/g5/bbs/board.php?bo_table=notis" target="_blank" rel="noopener noreferrer">고등</a></li>
                            <li><a href="https://jjoo545.dothome.co.kr/g5/bbs/board.php?bo_table=QnA" target="_blank" rel="noopener noreferrer">단행본</a></li>
                        </ul>
                    </li>
            
                    <li>
                        <ul id="b2">
                            <li><a href="#">정답 및 해설</a></li>
                            <li><a href="#">정오표</a></li>
                            <li><a href="#">듣기 자료</a></li>
                            <li><a href="#">교사용 자료</a></li>
                            <li><a href="#">부가 자료</a></li>
                            <li><a href="#">교사용 이북</a></li>
                        </ul>
                    </li>
            
                    <li>
                        <ul id="b3"></ul>
                    </li>
            
                    <li>
                        <ul id="b4">
                            <li><a href="#">공지 사항</a></li>
                            <li><a href="#">고객 문의</a></li>
                            <li><a href="#">자주 묻는 질문</a></li>
                            <li><a href="#">오류 신고</a></li>
                            <li><a href="#">총판 안내</a></li>
                            <li><a href="#">제휴 문의</a></li>
                            <li><a href="#">투고 문의</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <nav id="ggs">
                <ul class="gnb2">
                    <li><a href="#">도서</a>
                        <ul class="sub">
                            <li><a href="https://jjoo545.dothome.co.kr/g5/bbs/board.php?bo_table=free" target="_blank" rel="noopener noreferrer">초등</a></li>
                            <li><a href="https://jjoo545.dothome.co.kr/g5/bbs/board.php?bo_table=gallery" target="_blank" rel="noopener noreferrer">중등</a></li>
                            <li><a href="https://jjoo545.dothome.co.kr/g5/bbs/board.php?bo_table=notis" target="_blank" rel="noopener noreferrer">고등</a></li>
                            <li><a href="https://jjoo545.dothome.co.kr/g5/bbs/board.php?bo_table=QnA" target="_blank" rel="noopener noreferrer">단행본</a></li>
                        </ul>
                    </li>
                    <li><a href="#">자료실</a>
                        <ul class="sub">
                            <li><a href="#">정답 및 해설</a></li>
                            <li><a href="#">정오표</a></li>
                            <li><a href="#">듣기 자료</a></li>
                            <li><a href="#">교사용 자료</a></li>
                            <li><a href="#">부가 자료</a></li>
                            <li><a href="#">교사용 이북</a></li>
                        </ul>
                    </li>
                    <li><a href="#">이벤트</a> </li>
                    <li><a href="#">고객센터</a>
                        <ul class="sub">
                            <li><a href="#">공지 사항</a></li>
                            <li><a href="#">고객 문의</a></li>
                            <li><a href="#">자주 묻는 질문</a></li>
                            <li><a href="#">오류 신고</a></li>
                            <li><a href="#">총판 안내</a></li>
                            <li><a href="#">제휴 문의</a></li>
                            <li><a href="#">투고 문의</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
<div id="cont">
  <h1 class="h1">중등 도서</h1>

  <!-- 검색창 -->
  <div class="filter1">
    <input type="text" placeholder="제목, 저자, 과목, 키워드로 도서를 검색할 수 있습니다.">
    <button class="btn1" type="button">
      <i class="icon-srch"><img src="img/srch.png" alt="검색"></i>
    </button>
  </div>

  <!-- 필터 -->
  <div id="filterall">
    <div class="filter-box">
      <div class="filter-title">분류</div>
      <div class="filter-btns">
        <button class="filter-btn">전체</button>
        <button class="filter-btn">초등</button>
        <button class="filter-btn active">중등</button>
        <button class="filter-btn">고등</button>
        <button class="filter-btn">단행본</button>
      </div>
    </div>
    <div class="filter-box">
      <div class="filter-title">과목</div>
      <div class="filter-btns">
        <button class="filter-btn active">전체</button>
        <button class="filter-btn">국어</button>
        <button class="filter-btn">영어</button>
        <button class="filter-btn">수학</button>
        <button class="filter-btn">과학</button>
        <button class="filter-btn">사회/한국사</button>
      </div>
    </div>
    <div class="filter-box">
      <div class="filter-title">학년</div>
      <div class="filter-btns">
        <button class="filter-btn active">전체</button>
        <button class="filter-btn">예비중</button>
        <button class="filter-btn">중1</button>
        <button class="filter-btn">중2</button>
        <button class="filter-btn">중3</button>
      </div>
    </div>
    <div class="filter-box">
      <div class="filter-title">학기</div>
      <div class="filter-btns">
        <button class="filter-btn active">전체</button>
        <button class="filter-btn">1학기</button>
        <button class="filter-btn">2학기</button>
      </div>
    </div>
  </div>

  <!-- 적용/초기화 버튼 -->
  <div class="action-btns">
    <button class="btn-reset">초기화</button>
    <button class="btn-apply">필터 적용</button>
  </div>

  <div class="book-info">
    <span class="total-count">총 8권</span>
  </div>

  <div class="sort-tabs">
    <button class="sort-btn active">최신순</button>
    <button class="sort-btn">인기순</button>
  </div>

  <!-- 갤러리 -->
  <div id="gal1">
    <div class="book">
      <a href="https://jjoo545.dothome.co.kr/g5/bbs/board.php?bo_table=page21">
        <div class="ima"><img src="img/2/21.jpg" alt=""></div>
        <h2>완쏠 개념연산 중등수학 3-1(2027년)</h2>
        <p>수학</p>
      </a>
    </div>
    <div class="book">
      <a href="https://jjoo545.dothome.co.kr/g5/bbs/board.php?bo_table=page22">
        <div class="ima"><img src="img/2/22.jpg" alt=""></div>
        <h2>수학숙제 중등 3-1 (2027년)</h2>
        <p>수학</p>
      </a>
    </div>
    <div class="book">
      <a href="https://jjoo545.dothome.co.kr/g5/bbs/board.php?bo_table=page23">
        <div class="ima"><img src="img/2/23.jpg" alt=""></div>
        <h2>구해영 중학 영어 독해 Level 4</h2>
        <p>영어</p>
      </a>
    </div>
    <div class="book">
      <a href="https://jjoo545.dothome.co.kr/g5/bbs/board.php?bo_table=page24">
        <div class="ima"><img src="img/2/24.jpg" alt=""></div>
        <h2>구해영 중학 영어 독해 Level 3</h2>
        <p>영어</p>
      </a>
    </div>
    <div class="book">
      <a href="https://jjoo545.dothome.co.kr/g5/bbs/board.php?bo_table=page25">
        <div class="ima"><img src="img/2/25.jpg" alt=""></div>
        <h2>구해영 중학 영어 독해 Level 2</h2>
        <p>영어</p>
      </a>
    </div>
    <div class="book">
      <a href="https://jjoo545.dothome.co.kr/g5/bbs/board.php?bo_table=page26">
        <div class="ima"><img src="img/2/26.jpg" alt=""></div>
        <h2>구해영 중학 영어 독해 Level 1</h2>
        <p>영어</p>
      </a>
    </div>
    <div class="book">
      <a href="https://jjoo545.dothome.co.kr/g5/bbs/board.php?bo_table=page27">
        <div class="ima"><img src="img/2/27.jpg" alt=""></div>
        <h2>완쏠 개념 중등수학 3-1 (2027년)</h2>
        <p>수학</p>
      </a>
    </div>
    <div class="book">
      <a href="https://jjoo545.dothome.co.kr/g5/bbs/board.php?bo_table=page28">
        <div class="ima"><img src="img/2/28.jpg" alt=""></div>
        <h2>백신 중학과학 1-2 (2025년)</h2>
        <p>과학</p>
      </a>
    </div>
  </div>
</div>

  <div id="box">