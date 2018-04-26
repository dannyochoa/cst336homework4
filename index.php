<html>
	<head>
		<title>Shooting Monkeys</title>
		 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<link rel="stylesheet" type="text/css" href="styles.css">

	</head>
	<body>
		<div id="gameWindow">
			<img src="monkey.png" id="monkey_01" class="monkey" onmousedown="hitMonkey()">
		</div>
		<div id = "settingdiv">
			<div id="output" style="color: white; padding: 20px;">Dificulty: </div>
			<span id="diff"  style="color: white; padding: 20px;"></span>
			<button id = "increase">Increase</button>
			<button id = "decrease">Decrease</button><br>
			<button id="startButton">Start</button>
			<span id="win" style="color: white; padding: 20px;"></span>
		</div>
		
		<script>
			var monkey_01;
			var gameTimer;
			var output;
			var difficulty = 6;
			var numHits = 0;
			var lose = 0;
			$("#decrease").click(function(){
				if(difficulty < 6)difficulty++;
				$("#diff").html(" ");
				for(var i = 0; i <= 6 - difficulty; i++){
					$("#diff").append("*");
				}
			});
			$("#increase").click(function(){
			    if(difficulty > 1)difficulty --;
			    $("#diff").html(" ");
				for(var i = 0; i < 6 - difficulty; i++){
					$("#diff").append("*");
				}
			});
			$("#startButton").click(function(){
				numHits =0; lose = 0; init(); });
			function init(){
			    monkey_01 = $("#monkey_01")[0];
			    output = $("#output")[0];
			    gameTimer = setInterval(gameloop,difficulty * 10);
			    placeMonkey(); 
			}
			function gameloop(){
			    var y = parseInt(monkey_01.style.top)-10;
			    if(y <-100){
			        placeMonkey();
			        lose +=1;
			        if(lose == 5){
			            alert('You lose');
			            $("#win").html("<h1>You Lose</h1>");
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
			         $("#win").html("<h1>You Win</h1>");
			        clearInterval(gameTimer);
			    }
			    placeMonkey();
			}

		</script>

	</body>
</html>

