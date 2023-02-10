<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giải phương trình bậc hai</title>
</head>
<body>
  <h2>Giải phương trình bậc hai</h2>
  <form action="solvequadratic.php" method="post">
    Nhập a: <input type="text" name="a"><br><br>
    Nhập b: <input type="text" name="b"><br><br>
    Nhập c: <input type="text" name="c"><br><br>
    <input type="submit" value="Giải phương trình">

    <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $a = $_POST["a"];
    $b = $_POST["b"];
    $c = $_POST["c"];

    $delta = $b * $b - 4 * $a * $c;

    if ($delta > 0) {
      $x1 = (-$b + sqrt($delta)) / (2 * $a);
      $x2 = (-$b - sqrt($delta)) / (2 * $a);
      echo "Phương trình có hai nghiệm x1 = $x1 và x2 = $x2";
    } else if ($delta == 0) {
      $x = -$b / (2 * $a);
      echo "Phương trình có một nghiệm x = $x";
    } else {
      echo "Phương trình vô nghiệm";
    }
  }
?>

  </form>
</body>
</html>