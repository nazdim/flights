<?php
session_start();
unset($_SESSION['mail']);
session_destroy();


?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Bootstrap CSS -->
	  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->

    <link rel="icon" type="image/png" href="./images/plane_02.png"/>
    
  
    <link rel="stylesheet" href="./styles.css" type="text/css" />
  

    <script src="http://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->


    <title>Flight Scanner V1.1</title>

</head>

<body>

	<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
		<a class="navbar-brand" href="#">Flight scanner 1.1</a>
		<ul class="navbar-nav mr-auto">
			<li class="nav-item">
				<a class="nav-link active">Αρχική</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="search.php">Αναζήτηση</a>
			</li>
		</ul>
		<ul class="navbar-nav ml-auto">
			<li class="nav-item">
				<a class="nav-link">Εγγραφή</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" >Είσοδος</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href = "logout.php">Έξοδος</a>
			</li>
		</ul>
	</nav>

    <br>

	<div class="container">
  
        <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel" data-interval="4000">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
            </ol>
         <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="images/a1.jpg?auto=yes&bg=777&fg=555&text=First slide" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="images/a2.jpg?auto=yes&bg=666&fg=444&text=Second slide" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="images/a3.jpg?auto=yes&bg=555&fg=333&text=Third slide" alt="Third slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="images/a4.jpg?auto=yes&bg=555&fg=333&text=Fourth slide" alt="Fourth slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="images/a5.jpg?auto=yes&bg=555&fg=333&text=Fifth slide" alt="Fifth slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

</div>

<br>
<br>
<!-- Division for Sign in And Register -->
<div class="container">
 
  <div class="panel-group" id="accordion">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Sign In </a>
        </h4>
      </div>
      <div id="collapse1" class="panel-collapse collapse in">
        <form action= "validation.php" method="post">
			<div >
				<label>email</label>
				<input type="email" name="email" class="form-control" autocomplete="off" required>
			</div>
			<div >
				<label>Password</label>
				<input type="password" name="passwd" class="form-control" required>
			</div>
			<button type="submit" class="btn btn-primary"> Login </button>
		</form>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Register</a>
        </h4>
      </div>
      <div id="collapse2" class="panel-collapse collapse">
        <form action="registration.php" method="post">
			<div>
				<label>email</label>
				<input type="email" name="email" class="form-control" autocomplete="off" required>
			</div>
			<div>
				<label>Password</label>
				<input type="password" name="passwd" class="form-control" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"title="Πρέπει να περιέχεται τουλάχιστον ένας αριθμός,ένας κεφαλαίος και ένας πεζός χαρακτήρας και να αποτελείται απο τουλάχιστον 8 χαρακτήρες"  required>
			</div>
		
			<div>
				<label>Όνομα</label>
				<input type="name" name="oname" class="form-control"  autocomplete="off" required>
			</div>
			<div>
				<label>Επίθετο</label>
				<input type="name" name="fname" class="form-control" autocomplete="off" required>
			</div>
			<div>
				<div class="g-recaptcha" data-sitekey="6LcLYHkUAAAAAJNkmWs9E-L9m_hQtCHZbRHiJvnr"></div>	
			</div>
			<div>
				<button type="submit" class="btn btn-primary"> Register </button>
			</div>
		</div>		
    </div>
    
  </div> 
</div>

    <br>
    <br>
    <br>
    <br>

    <footer>
	<nav class="navbar fixed-bottom navbar-expand-lg navbar-dark bg-dark">
		<span class="navbar-text ">Εφαρμογή αναζήτησης πτήσεων χαμηλού κόστους &middot; Π.Μ.Σ. Ευφυείς Τεχνολογίες Διαδικτύου &copy; 2018-2019</span>
	</nav>
	</footer>


</body>
</html>
