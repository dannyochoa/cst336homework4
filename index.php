<html>
	<head>
		<title>Shooting Monkeys</title>
		 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<link rel="stylesheet" type="text/css" href="styles.css">

	</head>
	<body onload="init()">
		<div id="gameWindow">
			<img src="monkey.png" id="monkey_01" class="monkey" onmousedown="hitMonkey()">
		</div>
		<div id="output" style="color: white; padding: 20px;"></div>

		
		<script language="javascript" type="text/javascript" src="engine.js"></script>

	</body>
</html>

