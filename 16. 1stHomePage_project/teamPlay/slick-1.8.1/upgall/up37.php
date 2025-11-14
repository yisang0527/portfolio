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
            <div><img src="img/3/37.png"></div>
        </div>
        <div id="textbox">
            <div class="s1">
                <h3>책 소개</h3>
                <p>
                  - 2022 개정 교육과정 고등수학을 완성하는 개념서<br>
- 체계적인 개념 설명과 더불어 QR코드로 실전 활용 개념 및 더 자세한 개념 설명 제공<br>
- 최신 내신을 철저히 분석하여 선정한 필수 예제 & 유제 수록<br>
- 학습자의 개념 이해 및 적용을 돕는 집중 연습 문제와 특강을 선별하여 수록<br>
- 내신 고득점과 수능에 대비할 수 있는 기출문제 및 고난도 문제 수록
</p><br><br>
<span></span>
                <h3>목차</h3>
                <p>
             Ⅰ. 지수함수와 로그함수<br>
1. 지수<br>
2. 로그<br>
3. 지수함수<br>
4. 로그함수<br><br>

Ⅱ. 삼각함수<br>
1. 삼각함수<br>
2. 삼각함수의 그래프<br>
3. 삼각함수의 활용<br><br>

Ⅲ. 수열<br>
1. 등차수열<br>
2. 등비수열<br>
3. 수열의 합<br>
4. 수학적 귀납법
  </p>
            </div>
        </div>
        <div id="box">