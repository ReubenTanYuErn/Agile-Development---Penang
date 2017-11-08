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
                        <img src="images1/hotelslideshow1.jpg" style="width:1295px; height:697px; margin: auto;">

                    </div>

                    <div class="item">
                        <img src="images1/hotelslideshow2.jpg" style="width:1295px; height:697px; margin: auto;">

                    </div>

                    <div class="item">
                        <img src="images1/hotelslideshow3.jpg"  style="width:1295px; height:697px; margin: auto;">

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



        <!----------------------HOTEL SLIDESHOW FINISH----------------------------------------->


        <div class="row">
            <div class="col-sm-7">
                <div class="well"  style = "margin:10px;padding:10px;background-color:#F5F5DC;"> 

                    <h2 style="text-align:justify;color:blue;">Best Hotels in Penang </h2>

                    <p style="text-align:justify;color:blue;font-size: 18px;">Most Popular Penang Hotels<p>



                    <p style="font-style: normal; font-weight:bold; text-align:justify; color:black; font-size: 19px;">The best hotels in Penang are well-deserved winners for their laidback, carefree atmosphere, comprehensive onsite facilities and unexpected extra in-room amenities. Some selections ooze urban sophistication, while others are rich with heritage appeal, but no matter which you choose, you are practically guaranteed a comfortable and relaxing stay. A must-visit destination in Malaysia, Penang’s Georgetown is filled with old world charm and lots of quirky character. Our list of the most popular Penang hotels is diverse in style and budget levels so that you can easily choose the best hotel for you, be it a business, family, luxury, beach or budget. Most of these properties are situated close to Gurney Drive, a seaside promenade that’s popular for its deluge of hawker delights and exciting restaurants that come alive after the sunset, giving the unique experience of dining by the sea. No matter which hotel you choose, we’re sure you will be thoroughly satisfied with their great value-for-money deals, well placed locations and fantastic service and facilities.


                    </p>
                </div>
            </div>






            <div class="col-sm-5">
                <div class="panel panel-default">
				<div class="panel-heading" style=" font-style: normal; font-weight:bold; font-size: 20px; text-align:center;color : blue;">TOP 10 Hotel Locations</div>
				<div class="well" id="map" style = "margin:10px;padding:250px;background-color:#F5F5DC;">
				
				<script src="Agile_10Hotels.js"></script>
	
				<script async defer 
						src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDGzxJMTW5HyjMxtlhKi0wQ7HxHYeP8iKc&callback=initMap"></script>
                </div>
            </div>
        </div>


        <!---------To insert hotel from admin panel done--------------------------->



        <div class="col-sm-7">
            <div class="well"  style = "margin:10px;padding:10px;background-color:#F5F5DC;"> 

                <?php getHot(); ?>
            </div>
        </div>

    </div>

    <!---------Finish insert hotel from admin panel done--------------------------->



    <!-----FOOTER START----------------------------------------------------->

    <div class="row" >


        <div class="col-sm-12">

            <div class="footer1" style="background-color: #ffe6b3; height:420px; font-style: normal; font-weight:bold; text-align:justify; color:black; font-size: 34px;padding-top:50px;padding-left:100px;font-family:Helvetica;">

                <p>SEND US YOUR FEEDBACK <span class="glyphicon glyphicon-envelope"></span></p>

                <p style="font-style: normal; font-weight:bold; text-align:justify; color:black; font-size: 17px;font-family:Helvetica;">Help us keep this website up-to-date by sending us your comments and suggestions</p> 

                <br/>
                <table>

                    <tr>

                        <td>
                            <p style="font-style: normal; font-weight:bold; text-align:justify; color:black; font-size: 18px;font-family:Helvetica;">Privacy Guidelines | Terms of Use | About Us | Contact Us</p> 

                            <p style="font-style: normal; font-weight:bold; text-align:justify; color:black; font-size: 18px;font-family:Helvetica;">© 2016 Penang.Com. All rights reserved. the Penang.Com logo, Hotels.com </br>logo are trademarks or registered trademarks of Hotels.com.All other trademarks are property of their respective owners.
                            </p> 
                        </td>


                        <td>
                            <ul style="font-style: normal; font-weight:bold; float:right;color:black; font-size: 18px;font-family:Helvetica;padding-left:240px;list-style-type : none;
                                list-style-position:  inside;
                                margin-top:0px;
                                margin-bottom:0px;
                                margin-right:0px;
                                float:right;
                                display : inline;"><br/><br/>


                                <li><a href="https://www.facebook.com/penangglobal.tourism/" target="_blank"><img src="images1/fb.png" width="50" height="50"/>
                                    </a>
                                    <a href="https://twitter.com/VisitPenang" target="_blank"><img src="images1/twitter.png" width="55" height="60"/></a>
                                    <a href="https://www.instagram.com/visitpenang/?hl=en" target="_blank"><img src="images1/ins1.png" width="50" height="50"/></a>
                                    <a href="https://plus.google.com/collection/YWXZPB" target="_blank"><img src="images1/googleplus.png" width="50" height="50"/></a>
                                    <a href="https://www.youtube.com/results?search_query=penang+tourism" target="_blank"><img src="images1/you2.png" width="50" height="50"/></a>


                                </li>


                            </ul> 


                        </td>


                    </tr>

                </table>








            </div>





        </div>


    </div>



    <!-----FOOTER END----------------------------------------------------->	


    <br><br>




</body>


</html>