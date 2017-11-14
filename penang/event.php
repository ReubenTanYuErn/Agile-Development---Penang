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
                        <img src="images1/event1.jpg" style="width:1295px; height:697px; margin: auto;">

                    </div>

                    <div class="item">
                        <img src="images1/event2.jpg" style="width:1295px; height:697px; margin: auto;">

                    </div>

                    <div class="item">
                        <img src="images1/event3.jpg" style="width:1295px; height:697px; margin: auto;">

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

                    <h2 style="text-align:justify;color:blue;">Penang Events</h2>

                    <p style="text-align:justify;color:blue;font-size: 18px;">Penang Events and Festival in 2017<p>



                    <p style="font-style: normal; font-weight:bold; text-align:justify; color:black; font-size: 19px;">Penang has a whole host of exciting festivals and events lined up throughout the year. Just like any other state in Malaysia, Penangites celebrate all the major religious festivals, namely Hari Raya Aidilfitri and Hari Raya Aidiladha (Muslims), Chinese New Year and Wesak Day (Buddhists), and Deepavali and Thaipusam (Hindus).Penang, having such a large Chinese population, often plays host to many colourful Chinese events and festivals, which are not normally celebrated widely in other parts of the country.Certain festivals are unique to Penang, such as the International Dragon Boat Festival, where participants from across the world take part in an annual Chinese dragon boat race, and the Penang Festival, a yearly jamboree celebrating the island's colourful heritage.
                    </p>
                </div>
            </div>




            <!---------Event Calender--------------------------->

            <div class="col-sm-5">
                
				<div class="panel panel-default">
				<div class="panel-heading" style=" font-style: normal; font-weight:bold; font-size: 20px; text-align:center;color : blue;">Event Calender</div>
				<div class="well" id="map" style = "margin:2px;padding:0px;background-color:#F5F5DC;">
				<iframe src="https://calendar.google.com/calendar/embed?title=Penang%20Tourism%20Event%20Calender%20&amp;height=400&amp;wkst=1&amp;bgcolor=%23ffcc99&amp;src=j7plobvlt60o7pfpisjvp93iks%40group.calendar.google.com&amp;color=%232952A3&amp;ctz=Asia%2FKuala_Lumpur" style="border-width:0" width="540" height="400" frameborder="0" scrolling="no"></iframe>
				</div>
                </div>
            </div>
        </div>


        <!---------To insert shopping from admin panel done--------------------------->



        <div class="col-sm-7">
            <div class="well"  style = "margin:10px;padding:10px;background-color:#F5F5DC;"> 

                <?php getEvent(); ?>
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
