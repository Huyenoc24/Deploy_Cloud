<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
<!-- menu -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
	  <a class="navbar-brand" href="#"></a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"><img src="/img/logopng.png" alt=""></span>
	  </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                  <a class="nav-link" href="#"> Home <span class="glyphicon glyphicon-home sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="Login.php"> <span class="glyphicon glyphicon-user"></span>Login</a>
              </li>
              <li class="nav-item dropdown">
                  <a class="nav-link" href="#" id="navbarDropdown">
                      List Product
                  </a>
                  <div class="dropdown-content">
                      <a class="dropdown-item" href="#">Model toys</a>
                      <a class="dropdown-item" href="#">Wooden toys</a>
					  <a class="dropdown-item" href="#">Dolls, stuffed animals</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Something else here</a>
                  </div>
              </li>
          </ul>
          
          <form class="form-inline my-2 my-lg-0">
              <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
      </div>
  </div>
</nav>
<!-- end menu -->
<!-- slide -->
<div id="carouselExampleIndicators" class="carousel slide mt-1" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="https://as2.ftcdn.net/jpg/02/40/32/97/500_F_240329749_L64FoWNUo01VP3UOAN1M7vjfWcXKVNig.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://www.middleweb.com/wp-content/uploads/2014/11/TMNT-advert-570.png" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://image.shutterstock.com/image-vector/santas-toy-shop-metal-sign-260nw-1836142672.jpg" alt="Third slide">
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
<!-- end slide -->
<!-- list product -->
<div class="container">
	<div class="row mt-5">
		<h2 class="list-product-title">New product</h2>
		<div class="list-product-subtitle">
			<p>List product description</p>
		</div>
		<div class="product-group">
			<div class="row">
				<div class="col-md-3 col-sm-6 col-12">
					<div class="card card-product mb-3">
					  <img class="card-img-top" src="/img/03_92.jpg" alt="Card image cap">
					  <div class="card-body">
					    <h5 class="card-title">LEGO CLASSIC 10696</h5>
					    <p class="card-text">Creative Middle Classic Brick Box (484 Details)</p>
					    <a href="#" class="btn btn-primary">Detail</a>
					  </div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-12">
					<div class="card card-product mb-3">
					  <img class="card-img-top" src="img/e3690_2_1.jpg" alt="Card image cap">
					  <div class="card-body">
					    <h5 class="card-title">Baby Anna Baby Doll E3690</h5>
					    <p class="card-text">Baby Anna can interact with babies and make baby sounds when playing with them.</p>
					    <a href="#" class="btn btn-primary">Detail</a>
					  </div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-12">
					<div class="card card-product mb-3">
					  <img class="card-img-top" src="/img/f1667_1_.jpg" alt="Card image cap">
					  <div class="card-body">
					    <h5 class="card-title">6 inch Mech Strike series Black Panther model</h5>
					    <p class="card-text">Brand: AVENGERS
						</p>
					    <a href="#" class="btn btn-primary">Detail</a>
					  </div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-12">
					<div class="card card-product mb-3">
					  <img class="card-img-top" src="/img/cow.jpg" alt="Card image cap">
					  <div class="card-body">
					    <h5 class="card-title">Stuffed cow</h5>
					    <p class="card-text">Super cute, super cute, cuddly teddy bear, Plush teddy bear, plush toy</p>
					    <a href="#" class="btn btn-primary">Detail</a>
					  </div>
					</div>
				</div>				
			</div>
		</div>
	</div>
</div>
<!-- end list product -->
<!-- Load jquery before load bootstrap js -->
<script src="jquery-3.3.1.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>