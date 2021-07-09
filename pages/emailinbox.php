
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




<div class="container-fluid py-5">

<div class="row">
<div class="col-md-12 my-5">
        <center><h1>Contact Us Inbox</h1></center>
		</div>
</div>

	<div class="row">
		<div class="col-md-12 py-3 border shadow-lg rounded-lg">
         

        <div class="table-responsive-xl">
        <table class="table">
  <thead class="bg-info">
    <tr>
      <th scope="col">S.No</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Message</th>
    </tr>
  </thead>
  <tbody>
  <?php
  $i = 1;
include '../conn/conn.php';
try
{
	$sel=$con->prepare("select *from contactus");
	$sel->execute();
	$row=$sel->rowCount();
	if($row>0)
	{
		while($f=$sel->fetch(PDO::FETCH_ASSOC))
		{
			?>

    <tr>
      <th scope="row"><?php echo $i++ ?></th>
      <td><?php echo $f['name'];?></td>
      <td><?php echo $f['email'];?></td>
      <td><?php echo $f['message'];?></td>
    </tr>

    <?php
		}
	}
}
catch(PDOException $r)
{
	die('Error:'.$r->getMessage());
}


?>
    
    
  </tbody>
</table>
</div>


		</div>
	</div>
</div>















 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../asset/jquery-3.5.1.slim.min.js" ></script>
    <script src="../asset/popper.min.js" ></script>
    <script src="../asset/bootstrap.min.js" ></script>
</body>
</html>