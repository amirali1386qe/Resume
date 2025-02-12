<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	<link type="text/css" rel="stylesheet" href="style.css">
</head>

<body>
	<?php
	include("header.php");
	?>
	
	<div class="main-page">
	
	
	<form id="Main" method="post" action="Calculate.php">
		
	<label> score 1 : <input type="number" name="score1" id="score1"></label>
	<label> score 2 : <input type="number" name="score2" id="score2"></label>
	<label> score 3 : <input type="number" name="score3" id="score3"></label>
	<label> score 4 : <input type="number" name="score4" id="score4"></label>
	<label> score 5 : <input type="number" name="score5" id="score5"></label>
		<input type="button" name="btnSubmit" id="btnSubmit" value="Submit">
	</form>
	
	</div>
	
	
	<?php
	include("footer.php");
	?>
	
	
	<script type="text/javascript" src="scripts/script.js"></script>
</body>
</html>