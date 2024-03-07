function onOff() {
    document.getElementById('navicon').classList.toggle('navicon-on');
    document.body.classList.toggle('right-navbar-on')
}
window.onresize = function (event) {
    var innerWidth = window.innerWidth;
    if (innerWidth > 960) {
        document.getElementById('navicon').classList.remove('navicon-on')
        document.body.classList.remove('right-navbar-on');
    }
}
function game() {
    var randomNumber1 =
        Math.floor(Math.random() * (5-1)) + 1;

    var randomImage = "" + "dice" + randomNumber1 + ".png";

    document.querySelectorAll("img")[0].setAttribute("src", randomImage)



    var randomNumber2 =
        Math.floor(Math.random() * (7-3)) + 3;

    var randomImage2 = "" + "dice" + randomNumber2 + ".png";

    document.querySelectorAll("img")[1].setAttribute("src", randomImage2)



    if (randomNumber1 > randomNumber2) {

        document.getElementById('title').innerHTML = "나 승리"

    }
    else if (randomNumber1 < randomNumber2) {
        document.getElementById('title').innerHTML = "상대 승리"

    }
    else {
        document.getElementById('title').innerHTML = "무승부"
    }
}