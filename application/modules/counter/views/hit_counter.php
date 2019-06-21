<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<style>
		body {
		  color: #fff;
		  font-size: 22px;
		}
		span {
		  display: inline-block;
		  padding: 6px 6px 4px;
		  border-radius: 3px;
		  background: #b09dc4;
		  margin-right: 2px;
		}
		.position {
		  text-align: left;
		}
		.message {
		  color: #ccc6e3;
		  font-family: Verdana;
		  font-size: 12px;
		}
	</style>
</head>
<body>
	<div class="position">
	<?php $count_my_page = ("hitcounter.txt"); 
	$hits = file("hitcounter.txt"); 
	$hits[0]++; 
	$fp = fopen($count_my_page , "w"); fputs($fp , "$hits[0]"); 
	fclose($fp); $hits[0]; 
	$data = str_split($hits[0]);
	foreach ($data as $val) {
		echo "<span>$val</span>";
	}
	?>
	
	</div>
</body>
</html>