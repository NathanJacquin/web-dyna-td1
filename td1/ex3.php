<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Exo3</title>
</head>

<form method="POST">
<label for="color">Color :</label>
<input type="color" id="html5colorpicker" onchange="clickColor(0, -1, -1, 5)" value="#ff0000" name="Color">
<label for="size">Size :</label>
<input type="number" value="" name="size" id="size">
<label for="contenue">message</label>

<textarea rows="2" cols="33" name="message" id="message"></textarea>
<input type="submit" value="Valider">

</form>

<body>
  <?php
  if (empty($_POST)) {
    echo "erreur";
  }
  if (empty($_POST["size"] and $_POST["Color"])) {
    echo "<div style='font-size: 12px; color: black'>{$_POST["message"]}</div>";
  }
  else {
    echo "<div style='font-size: {$_POST["size"]}px; color: {$_POST["Color"]}'>{$_POST["message"]}</div>";
  }
  ?>
</body>
</html>
