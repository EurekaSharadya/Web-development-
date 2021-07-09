<?php
include("init.php");
protect_page(); 
?>
<!DOCTYPE html>
<html>
	<head>
		<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
		
		<link rel="stylesheet" href="../asset/style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../asset/bootstrap.min.css">

		<title>Crystal Palace Event Management Admin Panel</title>
	</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container">
      <a class="navbar-brand" href="index.php">Event Management Admin</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item ">
            <a class="nav-link" href="#">Home
                  <span class="sr-only">(current)</span>
                </a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="pages/ourevents.php">Our Events</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/bookedevents.php">Booked Events</a>
          </li>
		  <li class="nav-item">
            <a class="nav-link" href="pages/emailinbox.php">Contact Us Inbox</a>
          </li>
          <div class="log_out pl-5">
					<a href="logout.php"><button type="button" class="btn_logout">Log Out</button></a>
				</div>
        </ul>
      </div>
    </div>
  </nav>

            <div class="container-fluid py-5">
            <div class="row">
<div class="col-md-12 my-5">
        <center><h1>WelCome Event Management Admin Panel</h1></center>
		</div>
</div>



<div class="row">
		<div class="col-md-12">
			<div class="carousel slide rounded-lg shadow-lg"  id="carousel-958479">
				<ol class="carousel-indicators">
					<li data-slide-to="0" data-target="#carousel-958479" class="active">
					</li>
					<li data-slide-to="1" data-target="#carousel-958479">
					</li>
					<li data-slide-to="2" data-target="#carousel-958479">
					</li>
				</ol>
				<div class="carousel-inner"  >
					<div class="carousel-item active">
						<img class="d-block w-100" height="400px" alt="Carousel Bootstrap First" src="https://images.unsplash.com/photo-1547619378-933802c1fd76?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1026&q=80" />
						
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" height="400px" alt="Carousel Bootstrap Second" src="https://images.unsplash.com/photo-1547845178-f8fc8f77f873?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1056&q=80" />
						
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" height="400px" alt="Carousel Bootstrap Third" src="https://images.unsplash.com/photo-1605464315542-bda3e2f4e605?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80" />
						
					</div>
				</div> <a class="carousel-control-prev" href="#carousel-958479" data-slide="prev"><span class="carousel-control-prev-icon"></span> <span class="sr-only">Previous</span></a> <a class="carousel-control-next" href="#carousel-958479" data-slide="next"><span class="carousel-control-next-icon"></span> <span class="sr-only">Next</span></a>
			</div>
		</div>
	</div>



























            </div>


           
  

























			 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="asset/jquery-3.5.1.slim.min.js" ></script>
    <script src="asset/popper.min.js" ></script>
    <script src="asset/bootstrap.min.js" ></script>
</body>
</html>