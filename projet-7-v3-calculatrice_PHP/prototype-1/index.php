
      <form action = "index.php" method = "post">
          <input type = "text" name = "numéro1" ><br>
          <input type = "text" name = "numéro2" ><br>
         <input type = "submit" >
      </form>

  

<?php
 
if(isset($_POST['numéro1'],$_POST['numéro2'])){
    $numéro1 = $_POST['numéro1'];
    $numéro2 = $_POST['numéro2'];

$sum = $numéro1 + $numéro2;
   echo " la somme(  numéro1+numéro2 = $sum)";
}


?>