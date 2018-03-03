<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		textarea,input{
			float: left;
			text-transform: uppercase;
		}
	</style>
</head>
<body>
	<fieldset> 
<?php 
	$num = 0;
	
	while ($num < 100) {
		print "<p id='p'>".$num."</p>";
		$num = ($num +1);
		
		;
	}

 ?>
 </fieldset>

</body>
</html>