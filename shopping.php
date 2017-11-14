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




        <div id="myCarousel" class="carousel slide" data-ride="carousel">

            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>


            <div class="slideshow">
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="images1/shopping1.jpg" style="width:1295px; height:697px; margin: auto;">

                    </div>

                    <div class="item">
                        <img src="images1/shopping2.jpg" style="width:1295px; height:697px; margin: auto;">

                    </div>

                    <div class="item">
                        <img src="images1/shopping4.jpg" style="width:1295px; height:697px; margin: auto;">

                    </div>
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>






        <div class="row">
            <div class="col-sm-7">
                <div class="well"  style = "margin:10px;padding:10px;background-color:#F5F5DC;"> 

                    <h2 style="text-align:justify;color:blue;">Penang Shopping</h2>

                    <p style="text-align:justify;color:blue;font-size: 18px;">Where To Shop And What To Buy In Penang<p>



                    <p style="font-style: normal; font-weight:bold; text-align:justify; color:black; font-size: 19px;">During its heydays as a duty-free island, Penang drew multitudes of people hungry for shopping adventures. Although Langkawi has taken over the duty-free status once held by penang, the island has not lost its lustre. From shopping malls to night markets and antique shops to cultural areas, Penang has the whole gamut of commodities for sale. During the annual nationwide shopping festivals in August, Penang becomes a massive hub of commercial excitement as locals and tourists flock to cash in on the shopping boom. Bargaining is the culture here. When it comes to shops and stalls, do your best to haggle for the best price. There's no price that can't be lowered down with the proper know-how and bargaining. And if the price doesn't suit you, always look around elsewhere! 
                    </p>
                </div>
            </div>






            <div class="col-sm-5">
                
				<div class="panel panel-default">
				<div class="panel-heading" style=" font-style: normal; font-weight:bold; font-size: 20px; text-align:center;color : blue;">TOP 10 Shopping Locations</div>
				<div class="well" id="map" style = "margin:10px;padding:250px;background-color:#F5F5DC;">
				<script src="Agile_10Shoppings.js"></script>
	
				<script async defer 
						src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDGzxJMTW5HyjMxtlhKi0wQ7HxHYeP8iKc&callback=initMap"></script>
				</div>
                </div>
            </div>
        </div>


        <!---------To insert shopping from admin panel done--------------------------->



        <div class="col-sm-7">
            <div class="well"  style = "margin:10px;padding:10px;background-color:#F5F5DC;"> 

                <?php getShop(); ?>
            </div>
        </div>

    </div>

    <!---------Finish insert shopping from admin panel done--------------------------->


    <br><br>

    <?php
    include "footer.php"
    ?>




</body>


</html>