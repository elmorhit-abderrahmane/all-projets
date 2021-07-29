<!doctype html>
<html lang="en">
  <head>
	<title>Formulaire</title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="css/style.css">

  </head>
  <body>


    <div class="container">
    <div class="row">

      <div class="signupSection">

        <div class=" h2 mb-4">
        <form action="affichage.php" method="POST" >
          <h2>Sign Up</h2>
        </div>
        <ul class="noBullet">
          <li>
            <div class="li col-mb-4">
              <label for="inputEmail4"></label>
              <input type="text" class="inputFields" id="inputEmail4" name="nom" placeholder="nom" />
            </div>
          </li>
          <li>
            <div class="li col-mb-4">
              <label for="inputPassword4"></label>
              <input type="text" class="inputFields" id="inputPassword4" name="Prenom" placeholder="Prenom" />
            </div>
          </li>
         
          <li>
            <div class="li col-mb-4">
              <label for="password"></label>
              <input type="text" class="inputFields" id="inputAddress" name="Tel" placeholder="Tel" />
            </div>
          </li>


          <li>
            <div class="li col-mb-4">
              <label for="password"></label>
              <input type="text" class="inputFields" id="inputAddress" name="email" placeholder="Example@gmail.com" />
            </div>
          </li>


    <div class="form col-sm">
          <button type="submit" class="btn btn-primary">soumettre</button>
          </form>
    </div>
</div>
</div>

	  
	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>