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
            <div><img src="img/pick/p2.png"></div>
        </div>
        <div id="textbox">
            <div class="s1">
                <h3>책 소개</h3>
                <p>
                 중학 과학 공부, 시작은 용어!<br><br>

과학은 용어의 말뜻 안에 개념이 들어있는 과목입니다. 따라서 용어만 제대로 알아도 중학 과학을 마스터할 수 있습니다. 『뭔말 과학 용어 200』은 초등-중등 과학 교과서에서 꼭 알아야 하지만 헷갈리는 과학 용어만 골라, 짝으로 묶어 쉽게 풀어 쓴 책입니다. 특히 생활 속 사례로 만든 만화 퀴즈와 한 장 가득 펼쳐지는 그림은 읽는 재미를 더해줍니다. 이야기를 읽듯 술술 읽어 나가다 보면 어느새 필수 과학 용어 200개를 완벽하게 끝낼 수 있습니다. 용어를 제대로 알아야 진짜 과학 실력을 키울 수 있습니다.

</p><br><br>
<span></span>
                <h3>목차</h3>
                <p>
          001 무게 vs 002 질량<br>
003 탄성력 vs 004 마찰력<br>
005 속력 vs 006 속도<br>
007 등속 직선 vs 008 등가속도<br>
009 해수 vs 010 육수<br>
011 대류권 vs 012 중간권<br>
013 대륙 지각 vs 014 해양 지각<br>
015 P파 vs 016 S파<br>
017 외핵 vs 018 내핵<br>
019 화성암 vs 020 퇴적암<br>
021 화산암 vs 022 심성암<br>
023 층리 vs 024 엽리<br>
025 접촉 변성 vs 026 광역 변성<br>
027 겉보기 색 vs 028 조흔색<br>
029 무색 광물 vs 030 유색 광물<br>
031 동물 세포 vs 032 식물 세포<br>
033 원핵생물 vs 034 진핵생물<br>
035 세포막 vs 036 세포벽<br>
037 종 다양성 vs 038 유전적 다양성<br>
039 기화 vs 040 액화<br>
041 확산 vs 042 삼투<br>
043 보일 법칙 vs 044 샤를 법칙<br>
045 발열 반응 vs 046 흡열 반응<br>
047 융해 vs 048 용해<br>
049 증발 vs 050 끓음<br>
051 반사 vs 052 굴절<br>
053 오목 렌즈 vs 054 볼록 렌즈<br>
055 정반사 vs 056 난반사<br>
057 원자 vs 058 분자<br>
059 연속설 vs 060 입자설<br>
061 주기 vs 062 족<br>
063 금속 원소 vs 064 비금속 원소<br>
065 양이온 vs 066 음이온<br>
067 전해질 vs 068 비전해질<br>
069 도체 vs 070 부도체<br>
071 방전 vs 072 감전<br>
073 전압 vs 074 감전<br>
075 직렬 vs 076 병렬<br>
077 전동기 vs 078 발전기<br>
079 자전 vs 080 공전<br>
081 일주 운동 vs 082 연주 운동<br>
083 망 vs 084 삭<br>
085 일식 vs 086 월식<br>
087 개기 vs 088 부분<br>
089 항성 vs 090 행성<br>
091 내행성 vs 092 외행성<br>
093 지구형 행성 vs 094 목성형 행성<br>
095 녹말 vs 096 포도당<br>
097 광합성 vs 098 호흡<br>
099 동화 작용 vs 100 이화 작용
  </p>
            </div>
        </div>
        <div id="box">