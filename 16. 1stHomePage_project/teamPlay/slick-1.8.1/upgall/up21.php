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
            <div><img src="img/2/21.png"></div>
        </div>
        <div id="textbox">
            <div class="s1">
                <h3>책 소개</h3>
                <p>- 중등수학을 쉽고 가볍게 시작하고 학생을 위한 개념연산 교재<br>
- 체계적인 개념별 기초, 기본 문제를 반복하여 수학 기본기를 다질 수 있는 교재<br>
- 개념을 확실하게 익힐 수 있도록 연산 문제를 체계적으로 구성한 교재<br>
- 실전 문제를 풀기 전 기본기를 다지고 싶은 학생에게 적합한 문제들로 구성한 교재<br>
- 빈출 문제로 구성한 실전 연습 문제를 수록하여 기출문제로 맛볼 수 있는 교재</p><br><br>
                <span></span>
                <h3>목차</h3>
                <p>Ⅰ. 실수와 그 연산<br>
1. 제곱근과 실수 (개념01~09)<br>
2. 근호를 포함한 식의 계산 (개념10~18)<br><br>

Ⅱ. 식의 계산과 이차방정식<br>
3. 다항식의 곱셈과 인수분해 (개념19~35)<br>
4. 이차방정식 (개념36~48)<br><br>

Ⅲ. 이차함수<br>
5. 이차함수와 그 그래프(1) (개념49~55)<br>
6. 이차함수와 그 그래프(2) (개념56~61)
  </p>
            </div>
        </div>
        <div id="box">