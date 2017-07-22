<!DOCTYPE html>
<html>
<head>
	<title>hi</title>
	
	<link rel="stylesheet" type="text/css" href="testingphp.css">
	<script src="./jquery.js"></script>

	<?php 

		$h = (date('h')*60*60*6 + date('i')*60*6 + date('s')*6)/720;
		echo $h.'<br>';
		$h2 =$h+ 360;

		$m = (date('i')*60*6 + date('s')*6)/60;
		echo $m.'<br>';
		$m2 =$m+ 360;
		
		$s = date('s')*6;
		echo $s.'<br>';
		$s2 =$s+ 360;


	?>

	<style type="text/css">
		
		@keyframes spin1 {
  
          0% { transform: rotatez(<?php echo $h ?>deg);}
          100% { transform: rotatez(<?php echo $h2; ?>deg);}
  
        }
        

        @keyframes spin2 {
  
          0% { transform: rotatez(<?php echo $m; ?>deg);}
          100% { transform: rotatez(<?php echo $m2; ?>deg);}
  
        }

        @keyframes spin3 {
  
          0% { transform: rotatez(<?php echo $s; ?>deg);}
          100% { transform: rotatez(<?php echo $s2; ?>deg);}
  
        }

	</style>
	
</head>
<body>

<div id="out">

<div id="center"></div>

	<div id="in1" class="init_1">
		<div id="trans1"></div>
	</div>
	<div id="in2" class="init_2">
		<div id="trans2"></div>
	</div>
	<div id="in3" class="init_3">
		<div id="trans3"></div>
	</div>
</div>
<?php

	echo time().'<br>';
	echo date('h : i : s');

?>
</body>
</html>