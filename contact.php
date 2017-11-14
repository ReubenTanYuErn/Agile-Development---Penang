<!DOCTYPE html>

<?php
include("tourism/functions/functions.php");
session_start();
?>

<html lang="en">


    <head>

        <title>Prince of Wales Island</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <link rel="stylesheet"  href="PenangTourism.css" media="all" />
    </head>


    <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">



        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index3.php">PENANG.COM</a>
                </div>

                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                 <li><a href="hotel.php">HOTEL</a></li>
                <li><a href="restaurant.php">RESTAURANT</a></li>
                <li><a href="shopping.php">SHOPPING</a></li>
				<li><a href="attraction.php">ATTRACTION</a></li>
				<li><a href="event.php">EVENTS</a></li>
                <li><a href="contact.php">CONTACT</a></li>

                    </ul>
                </div>
            </div>


        </nav>



        <!-- Contact Information Start -->
        <br/><br/><br/><br/><br/>
        <div id="contact" class="container">
            <h2 class="text-center">Contact</h2>
            <p class="text-center"><em>We love our visitors!</em></p>

            <div class="row">

                <div class="col-md-4">
                    <p style="text-align:justify;color:black;font-size: 18px;">Visitors? Drop a note.</p>
                    <p style="text-align:justify;color:black;font-size: 16px;"><span class="glyphicon glyphicon-map-marker"></span>Penang, Malaysia</p>
                    <p style="text-align:justify;color:black;font-size: 16px;"><span class="glyphicon glyphicon-phone"></span>Phone: +06 045436780</p>
                    <p style="text-align:justify;color:black;font-size: 16px;"><span class="glyphicon glyphicon-envelope"></span>Email: Penang@mail.com</p>
                </div>
                <div class="col-md-8">

                    <form action="contact.php" method="post" enctype="multipart/form-data">
                        <div class="row">


                            <div class="col-sm-6 form-group">
                                <input type="text"   name="contact_name" size="40"  placeholder="Name"required/>
                            </div>
                            <div class="col-sm-6 form-group">
                                <input type="text" name="contact_email" size="40" placeholder="Email"  required/>
                            </div>
                        </div>
                        <textarea type="text" rows="4" cols="93" name="contact_comments"  placeholder="Message" ></textarea>

                        <br>

                        <div class="row">
                            <div class="col-md-12 form-group">  
                                <input type="submit" style="background-color:#1a1100;color:white; height:48px;width:100px;float:right;font-size:18px;font-family:Helvetica;cursor:pointer;" name="insert_post" value="Send" />


                            </div>
                        </div>

                    </form>

                </div>
            </div>
            <br><br><br><br><br><br><br><br><br><br><br><br>


        </div>

        <!-- Contact Information End -->


        <!-----FOOTER START----------------------------------------------------->


        <?php
        include "footer.php"
        ?>


        <!-----FOOTER END----------------------------------------------------->	

    </body>


</html>



<?php
if (isset($_POST['insert_post'])) {


    $contact_name = $_POST['contact_name'];
    $contact_email = $_POST['contact_email'];
    $contact_comments = $_POST['contact_comments'];


    $insert_contact = "insert into contact(contact_name,contact_email ,contact_comments) values ('$contact_name','$contact_email ','$contact_comments')";

    $insert_con = mysqli_query($con, $insert_contact);

    if ($insert_con) {

        echo "<script>alert('Message Delivered!')</script>";
    }
}
?>




