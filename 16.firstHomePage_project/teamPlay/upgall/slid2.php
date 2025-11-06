<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      @font-face {
      font-family: 'Pretendard';
      src: url('https://cdn.jsdelivr.net/gh/Project-Noonnu/noonfonts_2107@1.1/Pretendard-Medium.woff') format('woff');
      font-weight: 400;
      font-display: swap;
    }
        * { margin: 0; padding: 0; box-sizing: border-box; }

        /* 헤더 */
        .head1 { background-color: white; position: fixed; top: 0; left: 0; width: 100%; height: 10%;
        z-index: 1000; }
        .head1 img { position: fixed; top: 3%; left: 12%; width: 178.83px; height: 58px; }
        .manu { position: fixed; top: 4%; left: 38%; }
        .manu ul li { display: inline; margin-left: 0; }
        .manu a { list-style: none; text-decoration: none; color: black; font-size: 18px;
        font-weight: bold; margin-left: 60px; font-family: 'Pretendard', sans-serif; }
        .manu a:hover { color: dodgerblue; }
        .toggle { width: 25px; height: 30px; position: fixed; cursor: pointer; left: 86%; top: 4%; }
        .toggle span { display: block; height: 2px; background: black; margin: 5px 0;
        transition: all 0.3s ease; border-radius: 2px; }

        /* 햄버거 */
        .toggle.active span:nth-child(1) { transform: translateY(7px) rotate(45deg); }
        .toggle.active span:nth-child(2) { opacity: 0; }
        .toggle.active span:nth-child(3) { transform: translateY(-7px) rotate(-45deg); }

        /* 언더 */
        #gnb { z-index: 1000; display: none; position: fixed; left: 0; right: 0;
        border-top: 1px solid #E5E5E5; top: 8%; width: 100%; height: 32%; border-bottom: 1px solid #E5E5E5; 
        background-color: white; }
        #gnb.on { display: block; z-index: 1000; }
        #container { display: flex; width: 100%; z-index: 1000; }
        #gnblow { display: inline-block; }
        #box1 { width: 3%; height: 14%; position: fixed; left: 41.1%; top: 8%; }
        #b1 li { margin-top: 20px; list-style: none; font-family: 'Pretendard', sans-serif; font-size: 16px; }
        #b1 li a { text-decoration: none; color: #666666 }
        #box2 { width: 6%; height: 25%; position: fixed; left: 46%; top: 8%; }
        #b2 li { margin-top: 20px; list-style: none; font-family: 'Pretendard', sans-serif; font-size: 16px; }
        #b2 li a { text-decoration: none; color: #666666 }
        #box4 { width: 6%; height: 30%; position: fixed; left: 58%; top: 8%; }
        #b4 li { margin-top: 20px; list-style: none; font-family: 'Pretendard', sans-serif; font-size: 16px; }
        #b4 li a { text-decoration: none; color: #666666 }
        #con { display: flex; flex-direction: column; max-width: 1200px; align-items: center; margin: 100px auto 0; }
        #con p, h2 { align-self: flex-start; margin-bottom: 20px; }
        span { display: block; width: 100%; height: 2px; background-color: #111; margin: 40px 0; }
        h2 { margin-bottom: 30px; width: 100%; text-align: left; font-size: 36px; }
        #con p { border: 1px solid #111; border-radius: 5px; font-size: 15px; padding: 3px 11px; font-weight: bold; }
        #box { display: none; }

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
    let isClicked = false;

    // 토글 클릭
    $(".toggle").click(function (e) {
      e.stopPropagation();
      isClicked = !isClicked;

      $('#gnb').stop(true, true).fadeToggle();
      $(this).toggleClass('active');
    });

    // gnb 클릭 시 이벤트 전파 방지
    $('#gnb').click(function (e) {
      e.stopPropagation();
    });

    // 문서 클릭 시 닫기
    $(document).click(function () {
      if (isClicked) {
        $('#gnb').fadeOut();
        $('.toggle').removeClass('active');
        isClicked = false;
      }
    });

    // ✅ 헤더 전체 + gnb hover 시 열림
    $('.head1, #gnb').hover(
      function () {
        if (!isClicked) {
          $('#gnb').stop(true, true).fadeIn();
          $('.toggle').addClass('active');
        }
      },
      function () {
        if (!isClicked) {
          $('#gnb').stop(true, true).fadeOut();
          $('.toggle').removeClass('active');
        }
      }
    );

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
      firstBox.find('.filter-btn').removeClass('active').eq(1).addClass('active'); // 초등
      $('.filter-box').not(':eq(0)').each(function () {
        $(this).find('.filter-btn').removeClass('active').first().addClass('active');
      });
      $('#cont h1').text('초등 도서');
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
    <div id="con">
        <p>기획전</p>
        <h2>새 교육과정 수학은 완쏠</h2>
        <span></span>
        <img src="img/slid2.jpg">
    </div>
    <div id="box">