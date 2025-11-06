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
            <div><img src="img/2/27.png"></div>
        </div>
        <div id="textbox">
            <div class="s1">
                <h3>책 소개</h3>
                <p>
                    - 중등수학을 처음 시작하는 학생을 위한 필수 개념 입문서<br>
- 교과서와 가장 유사한 난이도 구성으로 쉽고 빠른 개념 학습 가능<br>
- 새 교육과정을 반영하여 반드시 알아야 할 필수개념과 대표예제를 빠짐없이 수록<br>
- “필수개념&확인문제”, “필수예제&유제”, “실전문제”의 3단계로 구성된 본책과,<br>
본책의 확인문제와 대표예제를 다시 한 번 더 풀 수 있는 워크북으로 완벽한 학습 가능
</p><br><br>
                <span></span>
                <h3>목차</h3>
                <p>
                   Ⅰ. 실수와 그 연산<br>
1. 제곱근과 실수 (개념01~07)<br>
2. 근호를 포함한 식의 계산 (개념08~13)<br>
Ⅱ. 식의 계산과 이차방정식<br>
3. 다항식의 곱셈과 인수분해 (개념 14~22)<br>
4. 이차방정식 (개념 23~30)<br>
Ⅲ. 이차함수<br>
5. 이차함수와 그 그래프 (개념 31~37)<br>
6. 이차함수 y=ax²+bx+c의 그래프 (개념 38~40)
  </p>
            </div>
        </div>
        <div id="box">