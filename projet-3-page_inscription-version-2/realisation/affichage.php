<?php
 // Traitement

 // Initialisation du session
 session_start();

 // Initialisation du tableau des participants
 $firstname = [];
 $lastname  = [];
 $Tel     = [];
 $email     = [];

 // Trouver ou créer le tableau dans Session
 if( isset( $_SESSION['nom'] ) ) {
    $firstname =  $_SESSION['nom'] ;
 }else {
    $_SESSION['nom'] =  $firstname;
 }

 if( isset( $_SESSION['Prenom'] ) ) {
    $lastname =  $_SESSION['Prenom'] ;
 }else {
    $_SESSION['Prenom'] =  $lastname;
}
if( isset( $_SESSION['Tel'] ) ) {
    $Tel =  $_SESSION['Tel'] ;
 }else {
    $_SESSION['Tel'] =  $Tel;
 }

 if( isset( $_SESSION['email'] ) ) {
    $email =  $_SESSION['email'] ;
 }else {
    $_SESSION['email'] =  $email;
 }
 


 // Ajouter le nom du nom dans le tableau
 $firstname[] = $_POST["nom"] ;
 $lastname[] = $_POST["Prenom"] ;
 $Tel[] = $_POST["Tel"] ;
 $email[] = $_POST["email"] ;



 // Enregistrer le tableau dans la session
$_SESSION['nom'] =  $firstname;
$_SESSION['Prenom'] =  $lastname;
$_SESSION['Tel'] =  $Tel;
$_SESSION['email'] =  $email;


// session_destroy();

?>

<!-- Affichage -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Information</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>

    <div class="row">
    <div class="col-lg-3 col-md-6">
<h1>Nom</h1>
<ol>
    <?php
        foreach ($firstname as $value) { 
        ?>
        <li><?php echo $value ?></li>
        <?php
        }
    ?>  
</ol>
</div>
<div class="col-lg-3 col-md-6">
<h1>Prénom</h1>
<ol>
    <?php
        foreach ($lastname as $value) { 
        ?>
        <li><?php echo $value ?></li>
        <?php
        }
    ?>  
</ol>
</div>


<div class="col-lg-3 col-md-6">
<h1>Tel</h1>
<ol>

    <?php
        foreach ($Tel as $value) { 
        ?>
        <li><?php echo $value ?></li>
        <?php
        }
    ?>  
</ol>
</div>

<div class="col-lg-3 col-md-6">
<h1>Emails</h1>
<ol>

    <?php
        foreach ($email as $value) { 
        ?>
        <li><?php echo $value ?></li>
        <?php
        }
    ?>  
</ol>
</div>
</div>
<button type="button" onclick="window.print()" > print</button>

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>