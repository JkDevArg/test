<html>
<body>
  <form method = "POST">
    Color Favorito:
    <input name="color" type="text">
    <br>
    Comida Favorita:
    <input name="comida" type="text">
    <br>
    <input type="submit" value="Enviar">
  </form>
  <br>
  <p>Tu comida favorita es: <?=$_POST['comida'];?></p>
  <p>Tu color favorito es: <?=$_POST['color'];?></p>
  <a href="index.php">Reiniciar</a>
</body>
</html>
