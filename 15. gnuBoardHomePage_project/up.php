<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>계룡건설산업</title>

    <!-- favicon -->
    <link rel="icon" type="image/png" href="assets/favicon-100x100.png" sizes="100x100" />

    <style>
        /* 초기 설정 */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            color: #333;
        }

        ul {
            list-style: none;
        }

        a {
            text-decoration: none;
        }

        html, body {
            position: relative;
            width: 100%;
            height: 100%;
        }

        /* header css */
        header {
            width: 100%;
            height: 100px;
        }

        header>div {
            width: 80%;
            height: 100%;
            margin: auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            width: 12%;
            height: 100%;
            line-height: 100px;
        }

        .logo a {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .logo img {
            width: 30px;
            margin-right: 5px;
        }

        .logo p {
            font-size: 25px;
            font-weight: bold;
        }

        #top>div ul {
            width: 50%;
            height: 100%;
            display: flex;
            justify-content: space-around;
        }

        #top>div ul li {
            width: 25%;
            height: 100%;
            text-align: center;
            line-height: 100px;
        }

        #top>div ul li a {
            display: block;
            font-size: 14px;
            font-weight: bold;
        }

        #top>div ul li a:hover {
            color: #5588ff;
        }

        /* container css */
        #textContainer {
            width: 77%;
            margin: 30px auto;
        }
    </style>
</head>

<body>
    <header id="top">
        <div>
            <div class="logo">
                <a href="https://yisang0527.dothome.co.kr/"><img src="https://yisang0527.dothome.co.kr/assets/logo.png" alt="계룡건설 로고">
                    <p>계룡건설</p>
                </a>
            </div>

            <ul>
                <li><a href="https://yisang0527.dothome.co.kr/g5/bbs/board.php?bo_table=board">계룡소개</a></li>
                <li><a href="https://yisang0527.dothome.co.kr/g5/bbs/board.php?bo_table=gallery">갤러리</a></li>
                <li><a href="https://yisang0527.dothome.co.kr/g5/bbs/board.php?bo_table=news">공지사항</a></li>
                <li><a href="https://yisang0527.dothome.co.kr/g5/bbs/board.php?bo_table=QnA">홍보센터</a></li>
            </ul>
        </div>
    </header>

    <div id="textContainer">
       