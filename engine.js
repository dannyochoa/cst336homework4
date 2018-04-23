var monkey_01;
var gameTimer;
var output;
var numHits = 0;
var lose = 0;

function init(){
    monkey_01 = $("#monkey_01")[0];
    output = $("#output")[0];
    // monkey_01 = document.getElementById('monkey_01');
    // output = document.getElementById('output');

    gameTimer = setInterval(gameloop,15);
    placeMonkey();
}

function gameloop(){
    var y = parseInt(monkey_01.style.top)-10;
    if(y <-100){
        placeMonkey();
        lose +=1;
        if(lose == 5){
            alert('You lose');
            clearInterval(gameTimer);
         }
    }
    else monkey_01.style.top = y + 'px';
}

function placeMonkey() {
    var x = Math.floor(Math.random()*421); // 0 - 420
    monkey_01.style.left = x + 'px';
    monkey_01.style.top = '350px';
}

function hitMonkey(){
    numHits += 1;
    if(numHits == 3){
        alert('You Win');
        clearInterval(gameTimer);
    }
    placeMonkey();
}
