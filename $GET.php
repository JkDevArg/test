<html>
<body>
  <form method="GET">
    Country:
    <input name="pais" type="text">
    <br>
    Language:
    <input name="idioma" type="text">
    <br>
    <input type="submit" value="Submit">
  </form>
  <br>
    <p>Tu Idioma es: <?=$_GET['idioma'];?></p>
    <p>Tu País es: <?=$_GET['pais'];?></p>
    <a href="index.php">Reiniciar</a>
</body>
</html>
