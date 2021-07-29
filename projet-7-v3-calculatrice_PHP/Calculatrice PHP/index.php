<?php 
require "class.php";

//intializing varibales
$x = null;
$operator = null;
$y = null;
$display = null;
$number = null;
$result = null;
//values of inputes 
if(isset($_POST["x"])) $x = $_POST["x"];
if(isset($_POST["operator"])) $operator = $_POST["operator"];
if(isset($_POST["y"])) $y = $_POST["y"];

//add number 
if(isset($_POST["number"])){
  $number = $_POST["number"];
  if ($x == null) $x = $number;
  elseif($x != null && $operator == null) $x .= $number;
  elseif($operator != null) $y .= $number;
} 

//add operator
if(isset($_POST["operator"])){
  if ($x != null && $operator == null) {
      $operator = $_POST["operator"];
  }
}

$calculatrice = new Calculatrice($x, $operator, $y);

//equal button 
if(isset($_POST["equal"])){
  $result = $calculatrice->compute();
}

// display
if($result != null) $display = $result;
else{
  if($x != null) $display .= $x;
  if($operator != null) $display .= $operator;
  if($y != null) $display .= $y;
}

//clear 
if(isset($_POST["C"])){
  $x = null;
  $operator = null;
  $y = null;
  $display = "";
  $number = null;
  $result = null; 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculatrice avec PHP</title>
    <link rel="stylesheet" href="stayle.css">
</head>
<body>
<div class="center">
    <form method="post">
            <div class="output">
                <input type="text"  readonly  id="afficheur" value="<?php echo $display; ?>">
            </div>
            <input type="input" hidden name="x" value="<?php echo $x ?>">
            <input type="input" hidden name="operator" value="<?php echo $operator ?>">
           
            <input type="input" hidden name="y" value="<?php echo $y ?>"><br>
            <button name="number" value="7">7</button>
            <button name="number" value="8">8</button>
            <button name="number" value="9">9</button>
            <button name="operator" value="/">/</button><br>
            <button name="number" value="4">4</button>
            <button name="number" value="5">5</button>
            <button name="number" value="6">6</button>
            <button name="operator" value="*">*</button><br>
            <button name="number" value="1">1</button>
            <button name="number" value="2">2</button>
            <button name="number" value="3">3</button>
            <button name="operator" value="-">-</button> <br>
            <button name="operator" value=".">.</button>
            <button  name="number" class="zero" value="0">0</button>
            <button name="operator" value="+">+</button>
            <button id="cler" name="C" value="0">C</button> <br>
            <button name="equal" id="equal" >=</button>

        
    </form>
</div>
</body>
</html>