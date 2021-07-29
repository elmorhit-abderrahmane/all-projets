<!doctype html>
<html lang="en">
  <head>
	<title>Formulaire</title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="./css/style.css">
  </head>
  <body>
	  <div class="container" >
    <div class="form-row">
   <div class="signupSection">
      <div class=" h2 mb-4">
        <h2> sign up </h2>
        <form action="inscription.php" method="POST" >
      </div>  
    <ul class="noBullet">
       <div ul col-mb-4>
            <li>
              <div class=" li col-mb-4">
                    <label for="inputEmail4"> </label>
                    <input type="text" class="inputFields" id="inputEmail4" name="nom" placeholder="Nom" required>
              </div>
            </li>
            <li>
              <div class="form-group li col-mb-4">
                <label for="inputPassword4"> </label>
                <input type="text" class="inputFields" id="inputPassword4" name="prenom" placeholder="Prenom" required>
              </div>
            </li>
            <li>
                <div class="form-group  li col-mb-4">
                  <label for="inputAddress"></label>
                  <input type="email" class="inputFields" id="inputAddress" name="email" placeholder="Example@gmail.col" required>
                </div>
            </li>
            <li>
              <div class="form-group li col-mb-4">
                <label for="inputAddress2"></label>
                <input type="text" class="inputFields" id="inputAddress2" name="adress" placeholder=" Tel +212" required>
              </div>
            </li>
        </div>
      </ul>
      
            <button type="submit" class="btn btn-primary">Sign in</button>
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