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
		
		    <link href="hotelstyle.css" rel="stylesheet">
		
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

            



        <!----------------------HOTEL SLIDESHOW FINISH----------------------------------------->


        <div class="row">
            <div class="col-sm-7">
                <div class="well"  style = "margin:10px;padding:10px;background-color:#F5F5DC;"> 

                   

		



                    <h2 style="text-align:justify;color:black;">Money Changers</h2>

                    <p style="text-align:justify;color:blue;font-size: 18px;">Finding out that you have insufficent funds for your stay here in Penang? Fret not as Penang has many stations where tourist can exchange their currency to continue enjoying their stay here. <p>

					<ol style="font-style: normal; font-weight:bold; text-align:justify; color:black; font-size: 19px;">
						<li>
							Suria Muhabat Sdn Bhd<br>
							Unit No. 170-B1-40 Plaza Gurney,
							Persiaran Gurney,
							10250 George Town, Pulau Pinang.<br>
							Phone: 04 218 9257	
						</li>
						
						<li>
							R Trader Money Changer (M) Sdn Bhd<br>
							188, Ground Floor, Sunrise Tower, Persiaran Gurney, 10250 George Town, Penang.<br>
							Phone: 04 2273 222
						</li>
						
						<li>
							Suria Muhabat Sdn Bhd<br>
							Unit LG-92-D, Lower Ground Floor,
							Queensbay Mall,
							100, Persiaran Bayan Indah,
							11900 Bayan Lepas, Penang.<br>
							Phone: 04 638 0057
						</li>
						
						<li>
							M Mohamed Kassim Forex<br>
							47-49 Pitt Street
							10200 George Town, Penang<br>
							Phone: 04 261 0242
						</li>

						<li>
							International Mega Forex<br>
							Pitt Street
							10200 George Town, Penang<br>
							Phone: 04 261 1526
						</li>
						
						<li>
							Dean Forex (M) Sdn Bhd<br>
							CII-1-04 Arked Penang 1 Komtar
							Penang Road
							10000 Penang<br>
							Phone: 04 262 2424
						</li>
						
						<li>
							Navrose Trading Sdn Bhd<br>
							6A Beach Street
							10300 Penang<br>
							Phone: 04 261 2894
						</li>

						<li>
							Haja Shareef K.P.M Abdul Kader<br>
							200 Beach Street
							10300 George Town, Penang<br>
							Phone: 04 264 3203
						</li>
						
						<li>
							Rahimas Forex Sdn Bhd<br>
							517 Chulia Street
							10200 George Town, Penang<br>
							Phone: 04 262 6268
						</li>

						<li>
							Best Mart Forex<br>
							53 Pitt Street
							10200 George Town, Penang<br>
							Phone: 04 261 2149
						</li>


						<li>
							Shadani Mesra Sdn Bhd<br>
							417E Chulia Street
							10200 Penang<br>
							Phone: 04 261 7284
						</li>

						<li>
							Evertrust Gems Paradise<br>
							1F-143 Persiaran Bayan Indah
							Queensbay Mall
							11900 Bayan Lepas, Penang<br>
							Phone: 04 641 5555
						</li>
					</ol>

                </div>


        </div>




            <div class="col-sm-5">
                <div class="panel panel-default">
				<div class="panel-heading" style=" font-style: normal; font-weight:bold; font-size: 20px; text-align:center;color : blue;">Money Changers</div>
				<div class="well" id="map" style = "margin:10px;padding:250px;background-color:#F5F5DC;">
				
				<script src="Agile_MoneyChangers.js"></script>
	
				<script async defer 
						src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDGzxJMTW5HyjMxtlhKi0wQ7HxHYeP8iKc&callback=initMap"></script>
                </div>
            </div>
        </div>


       \

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