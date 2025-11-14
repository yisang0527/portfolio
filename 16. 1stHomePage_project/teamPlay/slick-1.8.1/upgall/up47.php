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
        * {margin:0; padding:0; box-sizing:border-box;}
        body {font-family:'Pretendard',sans-serif; background:white; font-size:18px;}
        #cont {max-width:1500px; margin:auto; padding:50px 20px;}
        #box {max-width: 1500px;}
        #imgg {display: flex; justify-content: center; margin: 0 auto 100px; flex-wrap: wrap;}
        #imgg img {max-width: 100%; height: auto; border-radius: 10px;}
        .s1{max-width: 1500px; margin: auto; border: 1px solid #ccc; border-radius: 10px; padding: 40px;}
        h3{margin-bottom: 30px;}
        .s1 span { display: block; width: 100%; height: 1px; background-color: #ccc; margin: 40px 0; }

        #box{display: none;}

        /* 푸터 */
        footer { width: 100%; margin: 0; padding: 0; box-sizing: border-box; overflow-x: hidden; }
        #container8, #container9 { width: 100%; padding: 0 20px; box-sizing: border-box; }
        .inner-container { margin: 0 auto; }
        /* 상단 푸터 */
        #container8 { background-color: #555555; padding: 10px 0; text-align: center; }
        /* 하단 푸터 */
        #container9 { background-color: #333; padding: 20px 0; text-align: center; }

        /* 상단 푸터 */
        #container8 { background-color: #555555; padding: 10px 0; text-align: center; }
        #container8 p { margin: 0; line-height: 1.5; font-size: 14px; }
        #container8 a { color: #ddd; text-decoration: none; margin: 0 8px; }
        #container8 a:hover { color: #fff; }
        /* 하단 푸터 */
        #container9 { background-color: #333; padding: 20px 0; text-align: center; }
        #container9 img { margin-bottom: 10px; max-width: 150px; }
        #container9 p { color: #eee; font-size: 13px; margin: 0; line-height: 1.5; }

        /* 반응형 */
        @media (max-width: 600px) {
            #container8 p, #container9 p {
            font-size: 12px;
            }
            #container9 img {
            max-width: 120px;
            }
        }
    </style>
</head>

<body>
    <div id="contt">
        <div id="imgg">
            <div><img src="img/4/47.png"></div>
        </div>
        <div id="textbox">
            <div class="s1">
                <h3>책 소개</h3>
                <p>
                 원하는 성적을 만드는 최소한의 노트정리<br>
★굿노트 전자책 단독 입점 EVENT★<br>
</p><br><br>
<span></span>
                <h3>목차</h3>
                <p>
          ★EVENT 1<br>
<원하는 성적을 만드는 최소한의 노트정리><br>
구매자에게만 드리는 굿노트 속지+스티커팩!<br><br>

★EVENT 2<br>
공스타 햄이의 노트정리 원데이 클래스!<br><br>

더 자세한 내용은 아래 이벤트 페이지를 확인해 보세요 ↓
  </p>
            </div>
        </div>
        <div id="box">