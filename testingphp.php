<!DOCTYPE html>
<html>
<head>
	<title>hi</title>
	
	<link rel="stylesheet" type="text/css" href="testingphp.css">
	<script src="./jquery.js"></script>

	<style type="text/css">
		
		@keyframes spin3 {
  
          0% { transform: rotatez(<?php echo "90"; ?>deg);}
          100% { transform: rotatez(360deg);}
  
        }

        @keyframes spin {
  
          0% { transform: rotatez(0deg);}
          100% { transform: rotatez(360deg);}
  
        }

        @keyframes spin {
  
          0% { transform: rotatez(0deg);}
          100% { transform: rotatez(360deg);}
  
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