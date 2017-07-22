<!DOCTYPE html>
<html>
<head>
	<title>hi</title>
	
	<link rel="stylesheet" type="text/css" href="testingphp.css">
	<script src="./jquery.js"></script>
	<script src="./qtransform1.js"></script>
	<script type="text/javascript">

	<?php

		$ang = date('s');

	 ?>
		var angle = 10;


	</script>
	<script>

		$(document).ready(function(){
			$(function animate(){
        	//console.log('ok');
        	$("#in1").animate({ rotate: '0deg'},animate);
        	$("#in1").animate({ rotate: '360deg'},800);
    });

});

	</script>
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