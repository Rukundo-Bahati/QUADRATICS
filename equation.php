<?php

if (isset($_POST['value1'])) {
  $number1 = $_POST['value1'];
  $number2 = $_POST['value2'];
  $number3 = $_POST['value3'];
  $delta = pow($number2, 2) - (4 * $number1 * $number3);
  $result1;
  $result2;

  if ($delta > 0) {
    $result1 = (-$number2 + sqrt($delta)) / 2 * $number1;
    $result2 = (-$number2 - sqrt($delta)) / 2 * $number1;
    echo "x1=" . $result1 . "<br>";
    echo "x2=" . $result2;
  } else if ($delta == 0) {
    $result1 = -$number2 / (2 * $number1);
    echo "x=" . $result1;
    $result2 =  "No value of x2";
    echo $result2;
  } else {
    $result1 = "No Solution because Delta is less than 0";
    $result2 = "No Solution because Delta is less than 0";
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cal</title>
  <style>
    form {
      display: flex;
      flex-direction: column;
      width: 40%;
      border: 3px Solid #0ef;
      border-radius: 9px;
      padding: 10px;
      height: 39%;
      margin: 12px;
      background-image: linear-gradient(to bottom right, purple, #0ef);
    }
    
    body {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items:center;
      background-image: linear-gradient(to bottom right, rgb(47, 0, 128), rgb(92, 0, 128));
      color: #fff;
    }

    button {
      color: #fff;
      background-image: linear-gradient(to bottom right, purple, #0ef);
      height: 2rem;
      border: 1px solid #333;
      border-radius: 15px;
      font-size: 15px;
      font-weight: bold;
    }
    .display {
      border: none;
      background: transparent;
    }

    h1 {
      font-weight: bolder;
      font-size: 18px;
    }
    @media screen and (min-width: 768px) {
      form {
      width: 25%;
      }
    }
  </style>
</head>

<body>
  <h1>Solving Quadratic Equations inPHP</h1>
  <form action="" method="post">
    <label for="value1">Enter value of a</label>
    <input type="text" name="value1">
    <label for="value2">Enter value of b</label>
    <input type="text" name="value2">
    <label for="value3">Enter value of c</label>
    <input type="text" name="value3">
    <br>
    <input type="text" class="display" value="<?php echo $result1 ?>"></input>
  
    <input type="text" class="display" value="<?php echo $result2 ?>"></input>
   <br>
    <button type="submit">Calculate</button>

  </form>
</body>

</html>