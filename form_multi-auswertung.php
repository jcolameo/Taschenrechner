<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>Rechenergebnis</title>
</head>

<body>
  <?php
  echo "<h1>Rechenergebnis</h1>";
  if (isset($_POST["mal"])) {
    $ergebnis = $_POST["zahl1"] * $_POST["zahl2"];
    echo "<p>" . $_POST["zahl1"] . " mal " . $_POST["zahl2"] . " ist gleich $ergebnis.</p>";
  }
  if (isset($_POST["plus"])) {
    $ergebnis = $_POST["zahl1"] + $_POST["zahl2"];
    echo "<p>" . $_POST["zahl1"] . " plus " . $_POST["zahl2"] . " ist gleich $ergebnis.</p>";
  }
  if (isset($_POST["minus"])) {
    $ergebnis = $_POST["zahl1"] - $_POST["zahl2"];
    echo "<p>" . $_POST["zahl1"] . " minus " . $_POST["zahl2"] . " ist gleich $ergebnis.</p>";
  }

  if (empty($_POST["zahl2"]) or $_POST["zahl2"] == 0) {
    echo "Die Zahl kann nicht durch 0 dividiert werden!";
  } 
  
  elseif (isset($_POST["durch"])) {
    $ergebnis = $_POST["zahl1"] / $_POST["zahl2"];
    echo "<p>" . $_POST["zahl1"] . " durch " . $_POST["zahl2"] . " ist gleich $ergebnis.</p>";
  }


  ?>
</body>

</html>