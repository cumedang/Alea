<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="gambling.css">
    <link rel="icon" type="img/x-icon" href="해커톤9팀.png">
    <script src="gambling.js"></script>
    <title>Alea</title>
</head>

<body>
    <header class="header_wrap">
        <div class="header_container">
            <div class="header-inner">
                <div class="logo">
                    <a href="index.php">"NO GAMBLING!"</a>
                </div>
                <ul class="top-navbar">
                    <li class="tnb_list"><a href="coin.php">COIN</a></li>
                    <li class="tnb_list"><a href="dice.php">DICE</a></li>
                    <li class="tnb_list"><a href="rps.php">RPS</a></li>
                </ul>
            </div>
        </div>
    </header>
    <div id="utilBox">
        <div class="utilBox-inner">
            <div class="util_menu">
                <ul>
                <?php
                    session_start();
                    if (empty($_SESSION['userid'])) {
                    ?>
                    <li><a href="login.html" target="_blank">로그인</a></li>
                    <li><a href="siginup.html" target="_blank">회원가입</a></li>
                    <?php
                    } else {
                    ?>
                    <li><a href="#">
                            <b><?php echo ($_SESSION['userid']) ?>님 환영합니다</b>
                        </a></li>
                    <li><a href="logout.php"><b>로그아웃</b></a></li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
        </div>
    </div>
    <div id="navicon" onclick="onOff()">
        <div style="position: relative;">
            <div class="navicon_line nl1"></div>
            <div class="navicon_line nl2"></div>
            <div class="navicon_line nl3"></div>
        </div>
    </div>
    <div id="right-navbar">
        <div class="quick-menu">
            <ul>
            <?php
                if (empty($_SESSION['userid'])) {
                ?>
                <li><a href="login.html"><b>로그인</b></a></li>
                <li class="bar"></li>
                <li><a href="siginup.html"><b>회원가입</b></a></li>
                <?php
                } else {
                ?>
                <li><a><b><?php echo ($_SESSION['userid']) ?>님 환영합니다</b></a></li>
                <li class="bar"></li>
                <li><a href="logout.php"><b>로그아웃</b></a></li>
                <?php
                }
                ?>
            </ul>
        </div>
        <div class="side-menu">
            <div class="inquiry">
                <a href="">INQUIRY</a>
            </div>
            <ul class="sm_list">
                <li><a href="coin.php"><b>COIN</b></a></li>
                <li><a href="dice.php"><b>DICE</b></a></li>
                <li><a href="rps.php"><b>RPS</b></a></li>
            </ul>
        </div>
    </div>
    <section>
        <div class="intro-bg">
            <div class="intro">
                <div class="title">PREVENTION</div>
                <div class="l-title">gambling addiction</div>
            </div>
        </div>
        <div id="c1_wrap">
            <div class="c_inner">
                <div class="c1_img">
                    <img src="콘텐츠1.jpg">
                </div>
                <div class="c1_txt">
                    <h1>
                        "도박중독 예방사이트 Alea입니다."
                    </h1>
                    <p>
                        Alea를 찾아주셔서 감사합니다. Alea는 도박 시뮬레이션을 통한
                        <br>
                        도박중독 예방을 목적으로 합니다.
                    </p>
                </div>
            </div>
        </div>
        <div id="c2_wrap">
            <div class="c_inner">
                <div class="c2_img">
                    <img src="콘텐츠2.jpg">
                </div>
                <div class="c2_txt">
                    <h1>
                        "도박이란?"
                    </h1>
                    <p>
                        도박이란 불확실성에 돈을 거는 행위를 말합니다. 문제성 도박이란 <br>
                        도박으로 인해 여러 영역에 문제가 생기는 경우를 말하나, 도박중독의 <br>
                        개념을 포함할 수도 있습니다. 점점 배팅 액수와 횟수가 증가하는 내성, <br>
                        도박 행동의 중단 시 화가 나거나 불안해지는 금단, 그만해야지 하면서도 <br>
                        반복되는 조절 실패, 도박으로 인한 경제적, 심리적, 가정적 문제, 여러 <br>
                        문제가 있지만 반복적으로 하는 도박, 거짓말, 본전을 만회하고자 하는 <br>
                        추격 도박 등이 중요한 기준이 됩니다.
                    </p>
                </div>
            </div>
        </div>
    </section>
</body>

</html>