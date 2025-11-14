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
            <div><img src="img/2/22.png"></div>
        </div>
        <div id="textbox">
            <div class="s1">
                <h3>책 소개</h3>
                <p>- 2022 개정 교육과정을 반영, 어떤 교재, 교과서와도 병행 사용이 가능한 과제용 교재<br><br>

- 중등수학을 처음 시작하는 학생들이 숙제로 풀기에 최적화된 분량과 난이도 구현<br><br>

- 중등수학3-1을 22개정 교육과정에서 제시한 내용을 기준으로 47개 개념으로 분류했고, <br>
  개념별 기초문제(연산문제 포함)과 기본문제(필수문제)를 약 1:1의 비율로 담은 교재<br><br>

- 학교, 학원에서 진도를 나간 부분 또는 스스로 공부한 부분에 해당하는 개념(내용)만큼만 택하여 숙제로 문제 풀이 집중 연습 가능</p><br><br>
                <span></span>
                <h3>목차</h3>
                <p>PART1. 숙제<br>
1. 제곱근과 실수 (개념01~09)<br>
2. 근호를 포함한 식의 계산 (개념10~14)<br>
3. 다항식의 곱셈과 인수분해 (개념 15~25)<br>
4. 이차방정식 (개념 26~34)<br>
5. 이차함수와 그 그래프(1) (개념 35~41)<br>
6. 이차함수와 그 그래프(2) (개념 42~47)<br><br>

PART2. 테스트<br>
- 단원 테스트(중단원별 2회)<br>
- 서술형 테스트(중단원별 1회)
  </p>
            </div>
        </div>
        <div id="box">