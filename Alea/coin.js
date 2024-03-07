
function answer() {
    let sanz = document.getElementsByName('answer');
    var sel_type = null;

    for (var i = 0; i < sanz.length; i++) {
        if (sanz[i].checked == true) {
            sel_type = sanz[i].value;
        }
    }
    if (sel_type == null) {
        return false
    }else {
        setname()
            setTimeout(() => {
                if (sel_type == "yes") {
                    const answer = Math.floor((Math.random() * 10))
                    if (answer == 9) {
                        document.getElementById('result').innerText = "앞면";
                    } else {
                        document.getElementById('result').innerText = "뒷면";
                    }
                } else {
                    const answer = Math.floor((Math.random() * 10))
                    if (answer == 9) {
                        document.getElementById('result').innerText = "뒷면";
                    } else {
                        document.getElementById('result').innerText = "앞면";
    
                    }
                    
                }
            }, 1500);
        }
    de();
}

function de() {
    $("input:radio[name='answer']").prop('checked', false);
}

function setname() {
    document.getElementById('coin').className = 'coin';
    setTimeout(() => {
        document.getElementById('coin').className = 'afcoin';
    }, 1500);
}

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

