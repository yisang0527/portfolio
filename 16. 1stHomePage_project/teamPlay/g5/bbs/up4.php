<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>단행본</title>
  <style>
    * {margin:0; padding:0; box-sizing:border-box;}
    body {font-family:sans-serif; background:#fafafa; font-size:18px;}
    #cont {max-width:1500px; margin:auto; padding:50px 20px;}
    .h1 {margin-bottom:30px; text-align:center; font-size: 36px;}

    /* 검색창 */
    .filter1 {max-width:530px; height:56px; margin:20px auto; position:relative; display:flex;}
    .filter1 input {flex:1; border-radius:2rem; border:0; padding-left:1.2rem; padding-right:50px; 
    box-shadow:0 .25rem 1.5rem rgba(0,0,0,0.08); font-size: 16px}
    .btn1 {position:absolute; top:0; right:0; width:56px; height:56px; border:none; background:none; 
    cursor:pointer; display:flex; align-items:center; justify-content:center;}
    .icon-srch img {width:24px; height:24px;}

    #filterall {margin-top:30px; padding:10px 20px; border-radius:20px; border:1px solid #ccc;}
    .filter-box {margin-bottom:20px;}
    .filter-title {margin-bottom:10px; font-weight:bold;}
    .filter-btns {display:flex; flex-wrap:wrap; gap:5px; padding-right: 400px;}
    .filter-btn {padding:8px 5px; min-width:100px; height:40px; border-radius:10px; border:1px solid #ccc;
    cursor:pointer; background:#fff; text-align:center; transition:.2s; font-size: 16px; font-weight:600;}
    .filter-btn.active {background:#007bff; color:#fff; border-color:#007bff;}
    /* 버튼 */
    .action-btns {margin-top:20px; text-align:right;}
    .action-btns button {padding:10px 20px; margin-left:10px; border:none; border-radius:30px; 
    cursor:pointer; font-size:16px;}
    .btn-apply {background:#000; color:#fff;}
    .btn-reset {background:#e9ecef;}
    
    .book-info {display: flex; justify-content: space-between; align-items: center; margin: 30px 0; font-size: 16px;}
    .total-count {color: #333;font-weight: 600;}
    .sort-tabs {display: flex; gap: 15px; border-bottom: 2px solid #111;padding-bottom: 20px;}
    .sort-btn{border: none; background: none; font-size: 16px; cursor: pointer; color: #777; position: relative;}
    .sort-btn.active {font-weight: bold; color: #000;}
    .sort-btn.active::after {content: none; position: absolute; bottom: -5px; left: 0; right: 0; height: 2px; background: #000;}

    #gal1 {display: flex; flex-wrap: wrap; gap: 10px; max-width: 1500px; margin: 20px auto; 
    justify-content: center; box-sizing: border-box;}
    #gal1 .book {flex: 1 1 20%; max-width: 25%; padding: 15px; box-sizing: border-box;}
    #gal1 .ima {width: 100%; height: 400px; background-color: #cbdfff; border-radius: 20px; display: flex;
    align-items: center; justify-content: center;}
    #gal1 .ima img {width: 180px; height: auto;}
    #gal1 h2 {font-size: 18px; margin: 10px 0; white-space: wrap; letter-spacing: -0.5px;}
    #gal1 p {border: 1px solid #222; border-radius: 5px; max-width: 70px; font-size: 15px; font-weight: bold; padding: 0 5px;
    white-space: normal; display: inline-block;}

    #box {max-width: 1500px; display: none;}
  </style>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script>
    $(document).ready(function(){

      // 분류 버튼 클릭 (전체 제외하고 링크 추가)
      $('.filter-box').eq(0).find('.filter-btn').not(':first').on('click', function(){
        $(this).siblings().removeClass('active');
        $(this).addClass('active');
        // 링크를 추가하려면 여기서 location.href = '링크'로 설정할 수 있습니다.
        const category = $(this).text();
        // 예: 링크 추가, 여기에 원하는 링크를 넣으세요.
        if (category === '단행본') {
          window.location.href = 'https://jjoo545.dothome.co.kr/g5/bbs/board.php?bo_table=QnA'; // 단행본 페이지 링크로 변경
          } else if (category === '초등') {
            window.location.href = 'https://jjoo545.dothome.co.kr/g5/bbs/board.php?bo_table=free'; // 초등 도서 페이지 링크로 변경
          
        } else if (category === '중등') {
          window.location.href = 'https://jjoo545.dothome.co.kr/g5/bbs/board.php?bo_table=gallery'; // 중등 도서 페이지 링크로 변경
        
        } else if (category === '고등') {
          window.location.href = 'https://jjoo545.dothome.co.kr/g5/bbs/board.php?bo_table=notis'; // 고등 도서 페이지 링크로 변경
        }
      });

      // 나머지 필터 버튼 클릭
      $('.filter-box').not(':eq(0)').find('.filter-btn').on('click', function(){
        $(this).siblings().removeClass('active');
        $(this).addClass('active');
      });

      // 초기화 버튼
      $('.btn-reset').on('click', function(){
        // '분류'는 '초등'으로 유지
        $('.filter-box').eq(0).find('.filter-btn').removeClass('active');
        $('.filter-box').eq(0).find('.filter-btn').eq(4).addClass('active');  // "초등" 버튼 선택

        // 나머지 필터는 "전체"로 초기화
        $('.filter-box').not(':eq(0)').each(function(){
          $(this).find('.filter-btn').removeClass('active');
          $(this).find('.filter-btn').first().addClass('active');
        });

        $('#cont h1').text('단행본');
        $('.filter1 input').val('');  // 검색창 초기화
        $('#book-list .book').show();
      });

      // 필터 적용
      $('.btn-apply').on('click', function(){
        const category = $('.filter-box').eq(0).find('.filter-btn.active').text();
        const subject = $('.filter-box').eq(1).find('.filter-btn.active').text();
        const grade = $('.filter-box').eq(2).find('.filter-btn.active').text();
        const term = $('.filter-box').eq(3).find('.filter-btn.active').text();
        const keyword = $('.filter1 input').val().toLowerCase();

        $('#book-list .book').each(function(){
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

      // 검색창 Enter 적용
      $('.filter1 input').on('keypress', function (e) {
        if (e.which === 13) {
          $('.btn-apply').click();
        }
      });

      // 검색 버튼 클릭
      $('.btn1').on('click', function () {
        $('.btn-apply').click();
      });

      $(".sort-btn").on("click", function () {
        $(".sort-btn").removeClass("active");
        $(this).addClass("active");
      });

    });
  </script>
</head>
<body>
  <div id="cont">
    <h1 class="h1">단행본</h1>

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
          <button class="filter-btn">중등</button>
          <button class="filter-btn">고등</button>
          <button class="filter-btn active">단행본</button>
        </div>
      </div>
      <div class="filter-box">
        <div class="filter-title">과목</div>
        <div class="filter-btns">
          <button class="filter-btn active">전체</button>
          <button class="filter-btn">IT모바일</button>
          <button class="filter-btn">경제경영</button>
          <button class="filter-btn">인문교양</button>
          <button class="filter-btn">자기계발</button>
          <button class="filter-btn">자녀교육</button>
          <button class="filter-btn">에세이</button>
          <button class="filter-btn">요리</button>
          <button class="filter-btn">어린이</button>
          <button class="filter-btn">유아</button>
          <button class="filter-btn">청소년</button>
          <button class="filter-btn">한국사/한능검</button>
          <button class="filter-btn">소설</button>
        </div>
      </div>
      <div class="filter-box">
        <div class="filter-title">분야</div>
        <div class="filter-btns">
          <button class="filter-btn active">전체</button>
          <button class="filter-btn">IT모바일</button>
          <button class="filter-btn">경제경영</button>
          <button class="filter-btn">인문교양</button>
          <button class="filter-btn">자기계발</button>
          <button class="filter-btn">자녀교육</button>
          <button class="filter-btn">에세이</button>
          <button class="filter-btn">요리</button>
          <button class="filter-btn">어린이</button>
          <button class="filter-btn">유아</button>
          <button class="filter-btn">청소년</button>
          <button class="filter-btn">한국사/한능검</button>
          <button class="filter-btn">소설</button>
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
    
    
    <div id="gal1">
      <div class="book">
        <a href="https://jjoo545.dothome.co.kr/g5/bbs/board.php?bo_table=QnA&wr_id=8">
          <div class="ima"><img src="img/4/41.jpg"></div>
          <h2>한 번쯤은, 서양미술사</h2>
          <p>인문교양</p>
        </a>
      </div>
      <div class="book">
        <a href="https://jjoo545.dothome.co.kr/g5/bbs/board.php?bo_table=QnA&wr_id=7">
          <div class="ima"><img src="img/4/42.jpg"></div>
          <h2>어린이 마음 수업</h2>
          <p>어린이</p>
        </a>
      </div>
      <div class="book">
        <a href="https://jjoo545.dothome.co.kr/g5/bbs/board.php?bo_table=QnA&wr_id=6">
          <div class="ima"><img src="img/4/43.jpg"></div>
          <h2>한 권으로 끝내는 로빈의 한국사</h2>
          <p>인문교양</p>
        </a>
      </div>
      <div class="book">
        <a href="https://jjoo545.dothome.co.kr/g5/bbs/board.php?bo_table=QnA&wr_id=5">
          <div class="ima"><img src="img/4/44.jpg"></div>
          <h2>감량 혁명</h2>
          <p>자기계발</p>
        </a>
      </div>
      <div class="book">
        <a href="https://jjoo545.dothome.co.kr/g5/bbs/board.php?bo_table=QnA&wr_id=4">
          <div class="ima"><img src="img/4/45.jpg"></div>
          <h2>이종임의 백년 밥상</h2>
          <p>요리</p>
        </a>
      </div>
      <div class="book">
        <a href="https://jjoo545.dothome.co.kr/g5/bbs/board.php?bo_table=QnA&wr_id=3">
          <div class="ima"><img src="img/4/46.jpg"></div>
          <h2>책방 과학자의 인문학 필사 노트</h2>
          <p>인문교양</p>
        </a>
      </div>
      <div class="book">
        <a href="https://jjoo545.dothome.co.kr/g5/bbs/board.php?bo_table=QnA&wr_id=2">
          <div class="ima"><img src="img/4/47.jpg"></div>
          <h2>원하는 성적을 만드는 최소한의 노트정리</h2>
          <p>청소년</p>
        </a>
      </div>
      <div class="book">
        <a href="https://jjoo545.dothome.co.kr/g5/bbs/board.php?bo_table=QnA&wr_id=1">
          <div class="ima"><img src="img/4/48.jpg"></div>
          <h2>평생 소장 클래식 집밥 백과</h2>
          <p>요리</p>
        </a>
      </div>
    </div>

    <div id="box">