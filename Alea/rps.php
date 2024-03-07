<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="rpc.css">
    <link rel="icon" type="img/x-icon" href="해커톤9팀.png">
    <title>가위바위보도박사이트</title>
</head>

<body>
    <header class="header_wrap">
        <div class="header_container">
            <div class="header-inner">
                <div class="logo">
                <a href="index.php"><b>"NO GAMBLING!"</b></a>
                </div>
                <ul class="top-navbar">
                    <li class="tnb_list"><a href="coin.php"><b>COIN</b></a></li>
                    <li class="tnb_list"><a href="dice.php"><b>DICE</b></a></li>
                    <li class="tnb_list"><a href="rps.php"><b>RPS</b></a></li>
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
                    <li><a href="login.html" target="_blank"><b>로그인</b></a></li>
                    <li><a href="siginup.html" target="_blank"><b>회원가입</b></a></li>
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
    <div class="rps">
        <div class="me">
            <p class="me-text"><b>나</b></p>
            <img src="바위.png" alt="바위">
        </div>
        <div class="title-text">
            <?php
            if (empty($_SESSION['userid'])) {
            ?>
            <div class="play-text" onclick="location.href='login.html'; alert('로그인후 이용해주세요')"><b>로그인후 이용해주세요</b></div>
            <?php
            } else {
                ?>
                <div class="result" id="result"></div>
            <div class="di">
                <a class="sanz" id="s" onclick="rpsse()"><b>가위내기</b></a>
                <a class="sanz" id="r" onclick="rpsrook()"><b>바위내기</b></a>
                <a class="sanz" id="b" onclick="rpspa()"><b>보자기내기</b></a>
            </div>

            <?php
            }
                ?>
        </div>
        <div class="you">
            <p class="you-text"><b>상대</b></p>
            <img src="상대바위.png" alt="바위">
        </div>
    </div>
</body>
<script src="rps.js"></script>

</html>