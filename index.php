<?php
if(isset($_POST['submit']))
{
	include 'conn/conn.php';
    $name=$_POST['name'];
    $email=$_POST['email'];
    $message=$_POST['message'];
    
	
	try
	{
		$ins=$con->prepare("insert into contactus set name=:name,email=:email,message=:message");
        $ins->bindParam(':name',$name);
        $ins->bindParam(':email',$email);
        $ins->bindParam(':message',$message);
		if($ins->execute())
		{
			echo"<script>alert('Thank You - Our Team Will Contact You Soon');</script>";
			echo"<script>window.location.replace('index.php');</script>";
		}
		else
		{
            echo"<script>alert('Failed. Try Again.');</script>";
            echo"<script>window.location.replace('index.php');</script>";
		
		}
	}
	catch(PDOException $e)
	{
		die('Error:'.$e->getMessage());
	}
}

?>

<!doctype html>
<html lang="en">
  <?php include('includes/header.php')?>
  <body>
    
      
      
      <div class="container-fluid">
        <div class="row">

            <div class="col-md-12">
                <div class="row">

                    <div class="col-md-12">
                     <!-- Navigation -->
                     <?php include('includes/nav.php')?>
  
  <header>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <!-- Slide One - Set the background image for this slide in the line below -->
        <div class="carousel-item active" style="background-image: url('images/bsb.jpg')">
          <div class="carousel-caption d-none d-md-block">
            <h2 class="display-4"></h2>
            <p class="lead"></p>
          </div>
        </div>
        <!-- Slide Two - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('images/bb.jpg')">
          <div class="carousel-caption d-none d-md-block">
            <h2 class="display-4"></h2>
            <p class="lead"></p>
          </div>
        </div>
        <!-- Slide Three - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('images/cb.jpg')">
          <div class="carousel-caption d-none d-md-block">
            <h2 class="display-4"></h2>
            <p class="lead"></p>
          </div>
        </div>
        <!-- Slide four - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('images/nb.jpg')">
          <div class="carousel-caption d-none d-md-block">
            <h2 class="display-4"></h2>
            <p class="lead"></p>
          </div>
        </div>
        <!-- Slide five - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('images/do.jpg')">
          <div class="carousel-caption d-none d-md-block">
            <h2 class="display-4"></h2>
            <p class="lead"></p>
          </div>
        </div>
        <!-- Slide six - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('images/sc.jpg')">
          <div class="carousel-caption d-none d-md-block">
            <h2 class="display-4"></h2>
            <p class="lead"></p>
          </div>
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
  </header>
 
                    </div>


                </div>
            </div>

        </div>
    </div>
      
      
      
      
      

    <!-- Page Content -->
    <section class="p-5" id="gallery">
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
            <center> <a href="events/wedding.php" class="btn btn-outline-success btn-lg">View Events</a></center>
             
            </div>
           </div>
          </div>
        <div class="col-lg-4 mb-4">
        <div class="card shadow-lg rounded-lg">
            <img src="images/birthday.png" alt="" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title">Birthday Party Events</h5>
              <p class="card-text">Party Planners coordinate, organize, and execute all kinds of special events. They may work in a variety of fields, handling all aspects of weddings, birthday parties, anniversaries, or corporate gatherings</p>
             <center><a href="events/birthdayparty.php" class="btn btn-outline-success btn-lg">View Events</a></center>              
            </div>
            </div>
          </div>
          <div class="col-lg-4 mb-4">
          <div class="card shadow-lg rounded-lg">
            <img src="images/baby.jpg" alt="" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title">Baby Shower Events</h5>
              <p class="card-text">The purpose of a baby shower is for loved ones to shower the parents-to-be with gifts and needs for the baby. Showers are also celebrated with fun games, fun shower themes, gift-giving and most importantly, making memories.</p>
             <center><a href="events/babyshower.php" class="btn btn-outline-success btn-lg">View Events</a></center>              
            </div>
           </div>
          </div>

          <div class="col-lg-4 mb-4">
            <div class="card shadow-lg rounded-lg">
              <img src="images/sdf.jpg" alt="val.jpg" class="card-img-top">
              <div class="card-body">
                <h5 class="card-title">Valentines Day Events</h5>
                <p class="card-text">Valentine's Day is celebrated on February 14. It is a festival of romantic love and many people give cards, letters, flowers or presents to their spouse or partner. They may also arrange a romantic meal in a restaurant or night in a hotel. Common symbols of Valentine's Day are hearts, red roses and Cupid.</p>
               <center><a href="events/valentinesday.php" class="btn btn-outline-success btn-lg">View Events</a></center>              
              </div>
             </div>
            </div>

            <div class="col-lg-4 mb-4">
                <div class="card shadow-lg rounded-lg">
                  <img src="images/newyear.jpg" alt="" class="card-img-top">
                  <div class="card-body">
                    <h5 class="card-title">New Year Events</h5>
                    <p class="card-text">As a date in the Gregorian calendar of Christendom, New Year's Day liturgically marked the Feast of the Naming and Circumcision of Jesus, which is still observed as such in the Anglican Church and Lutheran Church. The Roman Catholic Church celebrates on this day the Solemnity of Mary, Mother of God.</p>
                   <center><a href="events/newyear.php" class="btn btn-outline-success btn-lg">View Events</a></center>              
                  </div>
                 </div>
                </div>

                <div class="col-lg-4 mb-4">
                    <div class="card shadow-lg rounded-lg">
                      <img src="images/christmas.png" alt="" class="card-img-top">
                      <div class="card-body">
                        <h5 class="card-title">Christmas Party Events</h5>
                        <p class="card-text">Kids get very excited about Christmas, and a Christmas party is a great way to reward students for working hard and achieving their goals at school. It also serves to help them make positive associations with school - that school can be a place for fun!</p>
                       <center><a href="events/christmas.php" class="btn btn-outline-success btn-lg">View Events</a></center>              
                      </div>
                     </div>
                    </div>

            


        </div>
      </div>
    </div>
      </section>
      
      
      
      
      
      
      
      <section id="ourlo">
          <div class="container-fluid p-3 bg-success rounded-lg shadow-lg">
        <div class="mt-5 container">

            <div class="row">
                <div class="mb-5 col-md-12">
                    <center><h1>Our Locations</h1></center>
                </div>
                <div class="col-md-12">
                    <div class="card mb-3 shadow-lg rounded-lg" style="max-width: 100%;">
                        <div class="row no-gutters">
                          <div class="col-md-4">
                          <img src="images/photo_2020-12-01_12-28-38.jpg" width="100%" alt="">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <h5 class="card-title">Bengaluru</h5>
                              <p class="card-text">Bengaluru (also called Bangalore) is the capital of India's southern Karnataka state. The center of India's high-tech industry, the city is also known for its parks and nightlife. By Cubbon Park, Vidhana Soudha is a Neo-Dravidian legislative building. Former royal residences include 19th-century Bangalore Palace, modeled after England’s Windsor Castle, and Tipu Sultan’s Summer Palace, an 18th-century teak structure</p>
                              <p class="card-text"><small class="text-muted"></small></p>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="card mb-3 shadow-lg rounded-lg" style="max-width: 100%;">
                        <div class="row no-gutters">
                          <div class="col-md-4">
                          <img src="images/hydrabad2.jpg" width="100%" alt="">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <h5 class="card-title">Hyderabad</h5>
                              <p class="card-text">Hyderabad is the capital of southern India's Telangana state. A major center for the technology industry, it's home to many upscale restaurants and shops. Its historic sites include Golconda Fort, a former diamond-trading center that was once the Qutb Shahi dynastic capital. The Charminar, a 16th-century mosque whose 4 arches support towering minarets, is an old city landmark near the long-standing Laad Bazaar.</p>
                              <p class="card-text"><small class="text-muted"></small></p>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="card mb-3 shadow-lg rounded-lg" style="max-width: 100%;">
                        <div class="row no-gutters">
                          <div class="col-md-4">
                          <img src="images/p3.jpg" width="100%" alt="">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <h5 class="card-title">Mysuru</h5>
                              <p class="card-text">Mysore (or Mysuru), a city in India's southwestern Karnataka state, was the capital of the Kingdom of Mysore from 1399 to 1947. In its center is opulent Mysore Palace, seat of the former ruling Wodeyar dynasty. The palace blends Hindu, Islamic, Gothic and Rajput styles. Mysore is also home to the centuries-old Devaraja Market, filled with spices, silk and sandalwood.</p>
                              <p class="card-text"><small class="text-muted"></small></p>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="card mb-3 shadow-lg rounded-lg" style="max-width: 100%;">
                        <div class="row no-gutters">
                          <div class="col-md-4">
                          <img src="images/p4.jpg" width="100%" alt="">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <h5 class="card-title">Chennai</h5>
                              <p class="card-text">Chennai, on the Bay of Bengal in eastern India, is the capital of the state of Tamil Nadu. The city is home to Fort St. George, built in 1644 and now a museum showcasing the city’s roots as a British military garrison and East India Company trading outpost, when it was called Madras. Religious sites include Kapaleeshwarar Temple, adorned with carved and painted gods, and St. Mary’s, a 17th-century Anglican church.</p>
                              <p class="card-text"><small class="text-muted"></small></p>
                            </div>
                          </div>
                        </div>
                      </div>
					  
					  
					  <div class="card mb-3 shadow-lg rounded-lg" style="max-width: 100%;">
                        <div class="row no-gutters">
                          <div class="col-md-4">
                          <img src="images/gulbarga.jpg" width="100%" alt="">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <h5 class="card-title">Gulbarga</h5>
                              <p class="card-text">Gulbarga, also known as Kalaburagi, is a city in the Indian state of Karnataka. It is the administrative headquarters of Gulbarga district and is the largest city in the Hyderabad-Karnataka region of North Karnataka. Gulbarga is 623 km north of the state capital city of Bangalore and 220 km from Hyderabad.</p>
                              <p class="card-text"><small class="text-muted"></small></p>
                            </div>
                          </div>
                        </div>
                      </div>
					  
					  
					  <div class="card mb-3 shadow-lg rounded-lg" style="max-width: 100%;">
                        <div class="row no-gutters">
                          <div class="col-md-4">
                          <img src="images/mn.jpg" width="100%" alt="">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <h5 class="card-title">Mangalore</h5>
                              <p class="card-text">Mangalore (or Mangaluru) is an Arabian Sea port and a major commercial center in the Indian state of Karnataka. It's home to the Kadri Manjunath Temple, known for its bronze statues, and the 9th-century Mangaladevi Temple. Its Catholic sites include Milagres Church, dating to the 17th century, and St. Aloysious Chapel, which features interior paintings. Tannirbhavi Beach is popular for its sunset views.</p>
                              <p class="card-text"><small class="text-muted"></small></p>
                            </div>
                          </div>
                        </div>
                      </div>
					  
					  
					  
					   <div class="card mb-3 shadow-lg rounded-lg" style="max-width: 100%;">
                        <div class="row no-gutters">
                          <div class="col-md-4">
                          <img src="images/photo_2020-12-01_11-17-06.jpg" width="100%" alt="">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <h5 class="card-title">udupi</h5>
                              <p class="card-text">Udupi, otherwise spelt Udipi and also known as Odipu, is a city in the Indian state of Karnataka. Udupi is situated about 55 km north of the educational, commercial & industrial hub Mangalore and about 422 km west of state capital Bangalore by road.</p>
                              <p class="card-text"><small class="text-muted"></small></p>
                            </div>
                          </div>
                        </div>
                      </div>
					  
					  
					   <div class="card mb-3 shadow-lg rounded-lg" style="max-width: 100%;">
                        <div class="row no-gutters">
                          <div class="col-md-4">
                          <img src="images/kochi.jpg" width="100%" alt="">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <h5 class="card-title">kochi</h5>
                              <p class="card-text">Kochi, also known as Cochin, is a major port city on the south-west coast of India bordering the Laccadive Sea a part of the Arabian Sea. It is part of the district of Ernakulam in the state of Kerala and is often referred to as Ernakulam. Kochi is the most densely populated city in Kerala. As of 2011, it has a corporation limit population of 677,381 within an area of 94.88 km² and a total urban population of more than of 2.1 million within an area of 440 km², making it the largest and the most populous metropolitan area in Kerala. Kochi city is also part of the Greater Cochin region and is classified as a Tier-II city by the Government of India</p>
                              <p class="card-text"><small class="text-muted"></small></p>
                            </div>
                          </div>
                        </div>
                      </div>
					  
					  
					   <div class="card mb-3 shadow-lg rounded-lg" style="max-width: 100%;">
                        <div class="row no-gutters">
                          <div class="col-md-4">
                          <img src="images/goa.jpg" width="100%" alt="">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <h5 class="card-title">goa</h5>
                              <p class="card-text">Goa is a state on the southwestern coast of India within the region known as the Konkan, and geographically separated from the Deccan highlands by the Western Ghats. It is surrounded by the Indian states of Maharashtra to the north and Karnataka to the east and south, with the Arabian Sea forming its western coast..</p>
                              <p class="card-text"><small class="text-muted"></small></p>
                            </div>
                          </div>
                        </div>
                      </div>
					  
					  
					  




                </div>
            </div>
        </div>
    </div>

      </section>
      
      
      <section id="contact">
   


        <div class="container-fluid mt-5 rounded-lg shadow-lg bg-info p-3">
            <div class="row">

                <div class="mb-5 col-md-12">
                    <center><h1 class="text-white">Contact Us</h1></center>
                </div>

            
                <div class="col-md-4">

                </div>
                <div class="shadow-lg rounded-lg col-md-4 border py-5">
                    <div>
                    <form  action="#" method="post">
                       
                        <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="name" class="form-control" name="name" placeholder="Name" required>
                         </div>

                         <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" name="email" placeholder="Email" required>
                     </div>

                        <div class="form-group">
                        <label for="message">Message:</label>
                        <textarea  class="form-control" name="message" placeholder="Message" required></textarea>
                        </div>

                        <button name="submit" class="btn btn-primary">Submit</button>
                    </form>
                    </div>
                    
                </div>
                <div class="col-md-4">
                    
                </div>
            </div>
        </div>

      </section>




      
      <!-- Footer -->
      <?php include('includes/footer.php')?>
      
      
      

    
  </body>
</html>


