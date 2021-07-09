<?php
if(isset($_POST['book']))
{
	include '../conn/conn.php';
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $event=$_POST['event'];
    $location=$_POST['location'];
    $address=$_POST['address'];
    
	
	try
	{
		$ins=$con->prepare("insert into booked set name=:name,email=:email,phone=:phone,event=:event,location=:location,address=:address");
        $ins->bindParam(':name',$name);
        $ins->bindParam(':email',$email);
        $ins->bindParam(':phone',$phone);
        $ins->bindParam(':event',$event);
        $ins->bindParam(':location',$location);
        $ins->bindParam(':address',$address);
		if($ins->execute())
		{
			echo"<script>alert('Congratulation! Your Event has been Booked successfully. Our Team Will Contact You Soon');</script>";
			echo"<script>window.location.replace('../');</script>";
		}
		else
		{
            echo"<script>alert('Booking Failed. Try Again.');</script>";
            echo"<script>window.location.replace('book.php');</script>";
		
		}
	}
	catch(PDOException $e)
	{
		die('Error:'.$e->getMessage());
	}
}

?>







<!-- header -->
<?php include('includes1/header.php'); ?>


<!-- nav -->
<?php include('includes1/nav.php'); ?>



         
<div class="container-fluid p-5">
	<div class="row">
    
		<div class="col-md-12 my-5">
        <center><h1>Book Events</h1></center>
		</div>
         
        <div class="col-md-3">
        </div>

		<div class="col-md-6 p-5 rounded-lg shadow-lg">
        <form action="#" method="post">
                       
                        <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="name" class="form-control" name="name" placeholder="Name" required>
                         </div>

                         <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" name="email" placeholder="Email" required>
                    </div>

                        <div class="form-group">
                        <label for="phone">Phone:</label>
                        <input type="number" class="form-control" name="phone" placeholder="Phone" required>
                    </div>

                        <div class="form-group">
                        <label for="event">Event:</label>
                        <select class="custom-select" name="event" id="validationCustom04" required>
                        <option value="">Choose...</option>
                        <option value="babyshower">Baby Shower (Naming Ceremony) Events</option>
                        <option value="birthday">Birthday Party Events</option>
                        <option value="christmas">Christmas Party Events</option>
                        <option value="newyear">New Year Events</option>
                        <option value="valentines">Valentines Day Events</option>
                        <option value="wedding">Wedding Reception Events</option>
                        <option value="wedding">Wedding Engagement Events</option>
                        <option value="wedding">Wedding Haldi Events</option>
                        <option value="wedding">Wedding Mehandi Events</option>
                        
                        
                         </select>
                    </div>

                    <div class="form-group">
                        <label for="location">Location:</label>
                        <select class="custom-select" name="location" id="validationCustom04" required>
                        <option value="">Choose...</option>
                        <option value="Bengaluru">Bengaluru</option>
                        <option value="Hyderabad">Hyderabad</option>
                        <option value="Mysuru">Mysuru</option>
                        <option value="Chennai">Chennai</option>
                        <option value="Gulbarga">Gulbarga</option>
						<option value="Mangalore">Mangalore</option>
						<option value="Udupi">Udupi</option>
						<option value="Kochi">Kochi</option>
						<option value="Goa">Goa</option>
                         </select>
                        </div>

                        <div class="form-group">
                        <label for="address">Address:</label>
                        <textarea  class="form-control" name="address" placeholder="Address" required></textarea>
                        </div>



                       <center> <button name="book" class="btn btn-primary">Book Event</button></center>
                    </form>
		</div>
        <div class="col-md-3">
        </div>
	</div>
</div> 
        








<!-- Footer -->
<?php include('includes1/footer.php'); ?>