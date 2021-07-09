<?php
include("../init.php");
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


<!-- nav -->
<?php include('nav.php')?>

<!-- Page Content -->
<section class="p-5" id="ourevents">
<div class="container-fluid py-3 bg-primary rounded-lg shadow-lg">
        <div class="mt-5 container" >
            <div class="row">
            <div class="mb-5 col-md-12">
                <center><h1 class="text-white">Events</h1></center>
            </div>
        </div>

          <div class="row">
          <div class="col-lg-4 mb-4">
          <div class="card shadow-lg rounded-lg">
            <img src="images/wedding.jpg" alt="" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title">Wedding Events</h5>
              <p class="card-text">A wedding planner is a professional who assists with the design, planning and management of a client's wedding. Weddings are significant events in people's lives and as such, couples are often willing to spend considerable amount of money to ensure that their weddings are well-organized</p>
                         
            </div>
           </div>
          </div>
        <div class="col-lg-4 mb-4">
        <div class="card shadow-lg rounded-lg">
            <img src="images/birthday.png" alt="" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title">Birthday Party Events</h5>
              <p class="card-text">Party Planners coordinate, organize, and execute all kinds of special events. They may work in a variety of fields, handling all aspects of weddings, birthday parties, anniversaries, or corporate gatherings</p>
                    
            </div>
            </div>
          </div>
          <div class="col-lg-4 mb-4">
          <div class="card shadow-lg rounded-lg">
            <img src="images/baby.jpg" alt="" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title">Baby Shower Events</h5>
              <p class="card-text">The purpose of a baby shower is for loved ones to shower the parents-to-be with gifts and needs for the baby. Showers are also celebrated with fun games, fun shower themes, gift-giving and most importantly, making memories.</p>
             
            </div>
           </div>
          </div>

          <div class="col-lg-4 mb-4">
            <div class="card shadow-lg rounded-lg">
              <img src="images/val.jpg" alt="val.jpg" class="card-img-top">
              <div class="card-body">
                <h5 class="card-title">Valentines Day Events</h5>
                <p class="card-text">Valentine's Day is celebrated on February 14. It is a festival of romantic love and many people give cards, letters, flowers or presents to their spouse or partner. They may also arrange a romantic meal in a restaurant or night in a hotel. Common symbols of Valentine's Day are hearts, red roses and Cupid.</p>
                      
              </div>
             </div>
            </div>

            <div class="col-lg-4 mb-4">
                <div class="card shadow-lg rounded-lg">
                  <img src="images/newyear.jpg" alt="" class="card-img-top">
                  <div class="card-body">
                    <h5 class="card-title">New Year Events</h5>
                    <p class="card-text">As a date in the Gregorian calendar of Christendom, New Year's Day liturgically marked the Feast of the Naming and Circumcision of Jesus, which is still observed as such in the Anglican Church and Lutheran Church. The Roman Catholic Church celebrates on this day the Solemnity of Mary, Mother of God.</p>
                               
                  </div>
                 </div>
                </div>

                <div class="col-lg-4 mb-4">
                    <div class="card shadow-lg rounded-lg">
                      <img src="images/christmas.png" alt="" class="card-img-top">
                      <div class="card-body">
                        <h5 class="card-title">Christmas Party Events</h5>
                        <p class="card-text">Kids get very excited about Christmas, and a Christmas party is a great way to reward students for working hard and achieving their goals at school. It also serves to help them make positive associations with school - that school can be a place for fun!</p>
                                     
                      </div>
                     </div>
                    </div>

            


        </div>
      </div>
    </div>
      </section>














<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../asset/jquery-3.5.1.slim.min.js" ></script>
    <script src="../asset/popper.min.js" ></script>
    <script src="../asset/bootstrap.min.js" ></script>
</body>
</html>