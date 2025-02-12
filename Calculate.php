<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	
</head>

<body>
	<?php
	if(  isset($_POST["score1"])&& isset($_POST["score2"])&& isset($_POST["score3"])&&
	  isset($_POST["score4"])&& isset($_POST["score5"])  )
	{
		$score[] = $_POST["score1"];
		$score[] = $_POST["score2"];
		$score[] = $_POST["score3"];
		$score[] = $_POST["score4"];
		$score[] = $_POST["score5"];
		$miangin = 0;
		$sum = 0;
		
		
		
		for( $i = 0 ; $i < count($score) ; $i++)
		{
			$sum = $score[$i] + $sum;
		}
		
		$miangin = $sum / count($score);
		
		echo("<h2> SUM : $sum  AND miangin : $miangin <br></h2>");
		
		
		for( $j = 0 ; $j < count($score) ; $j++)
		{
			if($score[$j] < $miangin)
			{
				echo("<br> <h2> bad score : $score[$j] <br> </h2>");
			}
		}
		
	}
	else{
		?>
	<script>
	location.replace("index.php");
	</script>
		<?php
	}
	
	?>
</body>
</html>









