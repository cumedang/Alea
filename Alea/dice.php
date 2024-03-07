<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>주사위도박</title>
    <link rel="icon" href="해커톤9팀.png">
    <link rel="stylesheet" href="dice.css">
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
    <div class="dice">
        <div class="dice-title">
            <h1 id="title">주사위게임</h1>
            <?php
                if(empty($_SESSION['userid'])){
                    ?>
                    <h2 onclick="location.href='login.html'; alert('로그인후 이용해주세요')" id="sanz">로그인후 이용해주세요</h2>
                    <?php
                }else {
                    ?>
                    <h2 onclick="game()" id="sanz">Click!</h2>
                    <?php
                }
                ?>
        </div>


        <div class="player">
            <h3 class="me"><a>나</a>&nbsp;&nbsp;&nbsp;&nbsp;</h3>
            <img style="padding-right:40px" src="dice6.png" alt="dice image" class="dice1">
        </div>

        <div class="player">
            <h3 class="you"><a>상대</a></h3>
            <img src="dice6.png" alt="dice image" class="dice2">
        </div>
</body>
<script src="dice.js"></script>

</html>