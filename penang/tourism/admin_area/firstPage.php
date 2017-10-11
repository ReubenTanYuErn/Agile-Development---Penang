<?php

include 'inc/session/session_validate.php';  
include("includes/db.php");	 

?>


<html>

<head>
<title>Penang Tourism Admin</title>
<link rel="stylesheet"  href="styles/adminNewCSS.css" media="all" />


<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


<?php
if(isset($_GET['insert_hotel'])){
?>	
	<title>Inserting Hotel</title>
<?php 
} 
?>

<?php
if(isset($_GET['view_hotel'])){
?>	
	<title>View Hotel</title>

<?php 
} 
?>




<?php
if(isset($_GET['insert_restaurant'])){
?>	
	<title>Inserting Restaurant</title>	

<?php 
} 
?>

<?php
if(isset($_GET['view_restaurant'])){
?>	
			<title>View Restaurant</title>
			
<?php 
} 
?>




<?php
if(isset($_GET['insert_shopping'])){
?>	
	<title>Inserting Shopping</title>	

<?php 
} 
?>

<?php
if(isset($_GET['view_shopping'])){
?>	
			<title>View Shopping</title>
			
<?php 
} 
?>


<?php
if(isset($_GET['insert_attraction'])){
?>	
	<title>Inserting Attraction</title>	

<?php 
} 
?>

<?php
if(isset($_GET['view_attraction'])){
?>	
			<title>View Attraction</title>
			
<?php 
} 
?>


<?php
if(isset($_GET['view_contact'])){
?>	
			<title>View Contact</title>
			
<?php 
} 
?>
	

	<?php
	if(isset($_GET['update'])){
	?>	
	<title>Update</title>
			
<?php 
} 
?>







</head>

<body>
		
		<div id="header">
			
			<div class="logo"><a href="#">PENANG<span>.COM</span></a></div>
		</div>
		
		
		<div id="container">
			
			<div class="sidebar">
					
					<ul id="nav">
								<li><a href ="firstPage.php?insert_hotel">Inserting Hotel</a></li>
								<li><a href ="firstPage.php?view_hotel">View Hotel</a></li>
								<li><a href ="firstPage.php?insert_restaurant">Inserting Restaurant</a></li>
								<li><a href ="firstPage.php?view_restaurant">View Restaurant</a></li>
								<li><a href ="firstPage.php?insert_shopping">Inserting Shopping</a></li>
								<li><a href ="firstPage.php?view_shopping">View Shopping</a></li>
								<li><a href ="firstPage.php?insert_attraction">Inserting Attraction</a></li>
								<li><a href ="firstPage.php?view_attraction">View Attraction</a></li>
								<li><a href ="firstPage.php?view_contact">View Contact</a></li>
								<li><a href ="firstPage.php?update">Update/a></li>
								<li><a href ="register.php">Register</a></li>
								<li><a href ="logout.php">Admin Logout</a></li>
					</ul>
				
			</div>
			
			<div class="content">
					
					
					
					<div id="box">
					
							
							
						
							<h2 style="color:red;text-align:center;"><?php echo @$_GET['logged_in']; ?></h2>
							<?php
							
								if(isset($_GET['insert_hotel'])){
									include ("inc/insert_hotel.php");
								}
								
								if(isset($_GET['view_hotel'])){
									include ("inc/view_hotel.php");
								}
								
								
								if(isset($_GET['insert_restaurant'])){
									include ("inc/insert_restaurant.php");
								}
								
								if(isset($_GET['view_restaurant'])){
									include ("inc/view_restaurant.php");
								}
								
								if(isset($_GET['insert_shopping'])){
									include ("inc/insert_shopping.php");
								}
								
								if(isset($_GET['view_shopping'])){
									include ("inc/view_shopping.php");
								}
								
								
								if(isset($_GET['insert_attraction'])){
									include ("inc/insert_attraction.php");
								}
								
								if(isset($_GET['view_attraction'])){
									include ("inc/view_attraction.php");
								}
								
								
								
								if(isset($_GET['view_contact'])){
									include ("inc/view_contact.php");
								}
								
						
								if(isset($_GET['update'])){
									include ("inc/update.php");
								}
							?>

						
							
							
					
					
					
					</div>
			
			</div>
			
			
		
		
		</div>
		
		
</body>

</html>
