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

        <!-- Heading Start -->

        <?php
        include "heading.php"
        ?>

        <!-- Heading End -->


        <div class="row">
            <div class="col-sm-7">
                <div class="well"  style = "margin:10px;padding:10px;background-color:#F5F5DC;"> <!-- automatically it is 12sm the length -->

                    <h2 style="text-align:justify;color:blue;">Penang - Malaysia</h2>

                    <p style="text-align:justify;color:blue;font-size: 18px;">Penang Tourist Information<p>




                    <p style="font-style: normal; font-weight:bold; text-align:justify; color:black; font-size: 19px;">Penang – a world renowned exotic holiday destination – was known, once upon a time, as Pulau Pinang or the “Isle of the Betel Nut”. Listed as a UNESCO World Cultural Heritage Site in 2008, this virgin paradise has no shortage of cultural sights and natural scenery. Nicknamed the Pearl of the Orient, Penang is famous for its soft sandy beaches and is fondly regarded as the food capital of Malaysia. Some of the most interesting sites of Penang include the sandy beaches of Tanjung Bungah, the landscape from the summit of Penang Hill and the vipers in the Snake Temple. The quaint nooks and crannies of Georgetown and the Tropical Spice Garden – the only spice garden in South East Asia – as well as Penang’s many flea markets, pasar malams’, KOMTAR and modern shopping malls also merit a visit.
                    </p>
                </div>
            </div>

            <div class="col-sm-5">
               <div class="panel panel-default">
				<div class="panel-heading" style=" font-style: normal; font-weight:bold; font-size: 20px; text-align:center;color : blue;">Penang Money Changers</div>
				<div class="well" id="map" style = "margin:10px;padding:250px;background-color:#F5F5DC;">
				<script src="Agile_MoneyChangers.js"></script>
	
				<script async defer 
						src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDGzxJMTW5HyjMxtlhKi0wQ7HxHYeP8iKc&callback=initMap"></script>
				</div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <!---About Penang and Hotel Booking Finish------------------------------>

        <div class="row">


            <div class="col-sm-12" style=" font-style: normal; font-weight:bolder; text-align:center;">
                <p style=" font-size: 40px;color:black;"> Best Hotels in Penang  

                    <a href="hotel.php">
                        <span class="glyphicon glyphicon-circle-arrow-right"style="size:50px;"></span>
                    </a>

                <p style=" font-style: normal; font-weight:bolder; font-size: 17px; text-align:center;color:black;"><a href="hotel.php" style="text-decoration:none;"> see all hotels... </a></p>

                </p>
            </div>


        </div>


        <!--HOTEL START INDEX PAGE-------------------------------------------->

        <?php
        include "index3Hotel.php"
        ?>

        <!--HOTEL FINISH INDEX PAGE-------------------------------------------->




        <!--RESTAURANT START INDEX PAGE-------------------------------------------->

        <br><br>

        <div class="row">


            <div class="col-sm-12" style=" font-style: normal; font-weight:bolder; text-align:center;">
                <p style=" font-size: 40px;color:black;"> Best Restaurants in Penang  

                    <a href="restaurant.php">
                        <span class="glyphicon glyphicon-circle-arrow-right"style="size:50px;"></span>
                    </a>

                <p style=" font-style: normal; font-weight:bolder; font-size: 17px; text-align:center;color:black;"><a href="restaurant.php" style="text-decoration:none;"> see all restaurant... </a></p>

                </p>
            </div>


        </div>


        <?php
		        include "index3Restaurant.php"

        ?>


        <!-----RESTAURANT FINISH INDEX PAGE------------------------------------>


        <!-----SHOPPING START INDEX PAGE------------------------------------>

        <br><br>

        <div class="row">


            <div class="col-sm-12" style=" font-style: normal; font-weight:bolder; text-align:center;">
                <p style=" font-size: 40px;color:black;"> Best Shopping in Penang  

                    <a href="shopping.php">
                        <span class="glyphicon glyphicon-circle-arrow-right"style="size:50px;"></span>
                    </a>

                <p style=" font-style: normal; font-weight:bolder; font-size: 17px; text-align:center;color:black;"><a href="shopping.php" style="text-decoration:none;"> see all shopping... </a></p>

                </p>
            </div>


        </div>



        <?php
        include "index3Shopping.php"
        ?>


        <br/><br/><br/>

        <!-----SHOPPING FINISH INDEX PAGE------------------------------------>

        <!-----FOOTER START----------------------------------------------------->


        <?php
        include "footer.php"
        ?>


        <!-----FOOTER END----------------------------------------------------->	

    </body>




</html>