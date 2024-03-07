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
function rpsse() {
    var Image = "" + "가위" + ".png";
    var rand = Math.floor(Math.random() * (12-1)) + 1;
    if(rand==11){
        var Image2 = "" + "상대가위" + ".png";
        document.getElementById('result').innerText = "무승부!";
    }else if(rand==10){
        var Image2 = "" + "상대보자기" + ".png";
        document.getElementById('result').innerText = "승리!!";
    }else{
        var Image2 = "" + "상대바위" + ".png";
        document.getElementById('result').innerText = "패배ㅜㅜ";
    }
    
    document.querySelectorAll("img")[0].setAttribute("src", Image)
    document.querySelectorAll("img")[1].setAttribute("src", Image2)
}
function rpsrook() {
    var Image = "" + "바위" + ".png";
    var rand = Math.floor(Math.random() * (12-1)) + 1;
    if(rand==11){
        var Image2 = "" + "상대바위" + ".png";
        document.getElementById('result').innerText = "무승부!";
    }else if(rand==10){
        var Image2 = "" + "상대가위" + ".png";
        document.getElementById('result').innerText = "승리!!";
    }else{
        var Image2 = "" + "상대보자기" + ".png";
        document.getElementById('result').innerText = "패배ㅜㅜ";
    }
    
    document.querySelectorAll("img")[0].setAttribute("src", Image)
    document.querySelectorAll("img")[1].setAttribute("src", Image2)
}
function rpspa() {
    var Image = "" + "보자기" + ".png";
    var rand = Math.floor(Math.random() * (12-1)) + 1;
    if(rand==11){
        var Image2 = "" + "상대보자기" + ".png";
        document.getElementById('result').innerText = "무승부!";
    }else if(rand==10){
        var Image2 = "" + "상대바위" + ".png";
        document.getElementById('result').innerText = "승리!!";
    }else{
        var Image2 = "" + "상대가위" + ".png";
        document.getElementById('result').innerText = "패배ㅜㅜ";
    }
    
    document.querySelectorAll("img")[0].setAttribute("src", Image)
    document.querySelectorAll("img")[1].setAttribute("src", Image2)
}