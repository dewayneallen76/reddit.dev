<!DOCTYPE html>
<html lang="en">
<head>
	<title>Roll Dice</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
	<div class="container-fluid">	
	<h1>Guess:<?= $guess ;?></h1>
	<h1>Roll:<?= $dice ;?></h1>
	<h2>Result:<?= $result ;?></h2> 
		<h3>Make another guess</h3>
		<ul>
			<li><a href="/rolldice/1">Guess 1</a></li>
			<li><a href="/rolldice/2">Guess 2</a></li>
			<li><a href="/rolldice/3">Guess 3</a></li>
			<li><a href="/rolldice/4">Guess 4</a></li>
			<li><a href="/rolldice/5">Guess 5</a></li>
			<li><a href="/rolldice/6">Guess 6</a></li>
		</ul>
	</div>
</body>
</html>