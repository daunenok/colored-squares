<?php
for ($i = 0; $i < 10; $i++) {
	for ($j = 0; $j < 10; $j++) {
		$colors[$i][$j] = "hsl(" . rand(0, 360) . ", 100%, 50%)";
	}
} 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Colored Squares</title>
    <style>
    	body {
    		margin: 0;
    		padding: 0;
    	}
    	div {
    		float: left;
    	}
    </style>
</head>
<body>

<?php
for ($i = 0; $i < 10; $i++) {
for ($j = 0; $j < 10; $j++) { 
?>
	<div style="background-color: <?=$colors[$i][$j]?>"></div>	
<?php 
}
}
?>

<script type="text/javascript">
	var width10 = document.documentElement.clientWidth;
	var height10 = document.documentElement.clientHeight;
	var width = width10 / 10;
	var height = height10 / 10; 
	width += "px";
	height += "px";
	var divs = document.querySelectorAll("div");
	divs.forEach(function(item) {
		item.style.width = width;
		item.style.height = height;
	});
</script>
</body>
</html>