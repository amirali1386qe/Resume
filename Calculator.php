<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	<link rel="stylesheet" href="style.css">
</head>

<body>
	<?php
	$num1 = $_POST["txtNum1"];
	$num2 = $_POST["txtNum2"];
	$opt = $_POST["operator"];
	
		if(isset($num1) && isset($num2) && !empty($num1) && !empty($num2) )
		{
		if( $opt == "Sum" )
		{
			$Result = $num1 + $num2;
		}
	elseif($opt == "minus")
	$Result = $num1 - $num2;
	
	elseif($opt == "Mul")
	$Result = $num1 * $num2;
	
	elseif($opt == "division")
	$Result = $num1 / $num2;
	?>
	<h1 class="result">
		<?php
	echo($Result);
		}
	else
	{
	?>
	
		<script>
		location.replace("index.html");
		</script>
		
		
		<?php
		}
	?>
	</h1>
</body>
</html>