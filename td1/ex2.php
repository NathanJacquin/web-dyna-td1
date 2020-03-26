<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Exo 2</title>
</head>
<body>
<a href="ex2.php?color=black&message=hello&size=15">Afficher Hello</a>
<a href="ex2.php?color=black&message=oui&size=30">Afficher oui</a>
<a href="ex2.php?color=black&message=non&size=5">Afficher non</a>
<form method="GET">
		<label for="Color">Color : </label>
		<input type="color" id="color" onchange="clickColor(0, -1, -1, 5)" value="#00000" name="color">
    <label for="size">Size : </label>
    <input type="number" value="12" name="size" id="size">
	<label for="Color">Message : </label>
	<input type="string" value="" name="message" id="message">
	<input type="submit" value="Valider">
</form>
<?php
$size = $_GET["size"];
$color = $_GET["color"];
$message = $_GET["message"];
echo $message ?>
<div style=
"font-size : <?php echo $size ?>px; color : <?php echo $color ?>">
</div>
</body>
</html>
</html>
