<?php

$con = mysqli_connect("localhost", "root", "", "penang"); //to make connection to database


if (mysqli_connect_errno()) {

    echo "The connection was not established : " . mysqli_connect_error();
}

//getting the user ip address
function getIp() {
    $ip = $_SERVER['REMOTE_ADDR'];

    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }

    return $ip;
}

//function to update hotel from admin page to web
function updateHot($new_hotel_name,$new_hotel_image,$new_hotel_desc){
	$nhn = $_POST['new_hotel_name'];
	$nhp = $_POST['new_hotel_image'];
	$nhd = $_POST['new_hotel_desc'];
	
	if(!empty($nhn)){
		mysql_query($con,"UPDATE 'hotel_name' SET='$nhn'") or die (mysqli_error($con));
	}
	
	
	if(!empty($nhp)){
		mysql_query($con,"UPDATE 'hotel_image' SET='$nhp") or die (mysqli_error($con));
	}
	
	
	if(!empty($nhd)){
		mysql_query($con,"UPDATE 'hotel_desc' SET='$nhd'") or die (mysqli_error($con));
	}
}

//function to enter hotel from admin page to web 
function getHot() {

    if (!isset($_GET['hotel'])) {

        global $con;

        $get_hot = "select * from hotel order by RAND() LIMIT 0,100";

        $run_hot = mysqli_query($con, $get_hot);

        while ($row_hot = mysqli_fetch_array($run_hot)) {



            $hot_id = $row_hot['hotel_id'];
            $hot_name = $row_hot['hotel_name'];
            $hot_image = $row_hot['hotel_image'];
            $hot_desc = $row_hot['hotel_desc'];

            echo "
			
			<div id='single_product'>
			
				<p style='font-style: normal; font-weight:bold; text-align:justify; color:black; font-size: 28px;'> $hot_name</p>
				
				
				
				<img src='tourism/admin_area/hotel_images/$hot_image' width='775' height='570' />
				
				
					<p style='font-style: normal; font-weight:bold; text-align:justify; color:black; font-size: 18px;'>
					 $hot_desc  </p>
			
				
			</div>
		
		
		";
        }
    }
}

//function to update restaurant from admin page to web
function updateRes($new_restaurant_name,$new_restaurant_image,$new_restaurant_desc){
	$nrn=$new_restaurant_name;
	$nrp=$new_restaurant_image;
	$nrd=$new_restaurant_desc;
	
	if(!empty($nrn)){
		mysql_query($con,"UPDATE 'restaurant_name' SET='$nrn'") or die (mysqli_error($con));
	}
	
	
	if(!empty($nrp)){
		mysql_query($con,"UPDATE 'restaurant_image' SET='$nrp") or die (mysqli_error($con));
	}
	
	
	if(!empty($nrd)){
		mysql_query($con,"UPDATE 'restaurant_desc'  SET='$nrd'") or die (mysqli_error($con));
	}
}

//function to enter restaurant from admin page to web
function getRes() {

    if (!isset($_GET['restaurant'])) {

        global $con;

        $get_res = "select * from restaurant order by RAND() LIMIT 0,100";

        $run_res = mysqli_query($con, $get_res);

        while ($row_res = mysqli_fetch_array($run_res)) {



            $res_id = $row_res['restaurant_id'];
            $res_name = $row_res['restaurant_name'];
            $res_image = $row_res['restaurant_image'];
            $res_desc = $row_res['restaurant_desc'];

            echo "
			
			<div id='single_product'>
			
				
				
				
				<p style='font-style: normal; font-weight:bold; text-align:justify; color:black; font-size: 28px;'> $res_name</p>
				
				
				
				<img src='tourism/admin_area/restaurant_images/$res_image' width='775' height='570' />
				
				
					
					
					<p style='font-style: normal; font-weight:bold; text-align:justify; color:black; font-size: 18px;'>
					  $res_desc  </p>
				
			</div>
		
		
		";
        }
    }
}

//////////////////////////////////////////////////////////////////////////////////////////

//function to update shopping from admin page to web
function updateShop($new_shopping_name,$new_shopping_image,$new_shopping_desc){
	$nsn=$new_shopping_name
	$nsp=$new_shopping_image;
	$nsd=$new_shopping_desc;
	
	if(!empty($nsn)){
		mysql_query($con,"UPDATE 'shopping_name' SET='$nsn'") or die (mysqli_error($con));
	}
	
	
	if(!empty($nsp)){
		mysql_query($con,"UPDATE 'shopping_image' SET='$nsp") or die (mysqli_error($con));
	}
	
	
	if(!empty($nsd)){
		mysql_query($con,"UPDATE 'shopping_desc'  SET='$nsd'") or die (mysqli_error($con));
	}
}


//function to enter shopping from admin page to web 
function getShop() {

    if (!isset($_GET['shopping'])) {

        global $con;

        $get_shop = "select * from shopping order by RAND() LIMIT 0,100";

        $run_shop = mysqli_query($con, $get_shop);

        while ($row_shop = mysqli_fetch_array($run_shop)) {



            $shop_id = $row_shop['shopping_id'];
            $shop_name = $row_shop['shopping_name'];
            $shop_image = $row_shop['shopping_image'];
            $shop_desc = $row_shop['shopping_desc'];

            echo "
			
			<div id='single_product'>
			
				
				
				<p style='font-style: normal; font-weight:bold; text-align:justify; color:black; font-size: 28px;'> $shop_name</p>
				
				
				
				
				<img src='tourism/admin_area/shopping_images/$shop_image' width='775' height='570' />
				
				
				
					
					<p style='font-style: normal; font-weight:bold; text-align:justify; color:black; font-size: 18px;'>
					  $shop_desc </p>
			
			</div>
		
		
		";
        }
    }
}

//////////////////////////////////////////////////////////////////////////////////////////

// function to enter event from admin page to web 
function getEvent(){ 
 if (!isset($_GET['event'])) {

        global $con;

        $get_event = "select * from event order by RAND() LIMIT 0,100";

        $run_event = mysqli_query($con, $get_event);

        while ($row_event = mysqli_fetch_array($run_event)) {



            $event_id = $row_event['event_id'];
            $event_name = $row_event['event_name'];
            $event_image = $row_event['event_image'];
            $event_desc = $row_event['event_desc'];

            echo "
			
			<div id='single_product'>
			
				
				
				<p style='font-style: normal; font-weight:bold; text-align:justify; color:black; font-size: 28px;'> $event_name</p>
				
				
				
				
				<img src='tourism/admin_area/event_images/$event_image' width='775' height='570' />
				
				
				
					
					<p style='font-style: normal; font-weight:bold; text-align:justify; color:black; font-size: 18px;'>
					  $event_desc </p>
			
			</div>
		
		
		";
        }
    }
}	
	




//////////////////////////////////////////////////////////////////////////////////////////
//function to enter attraction from admin page to web 
function getAttraction() {

    if (!isset($_GET['attraction'])) {

        global $con;

        $get_attrct = "select * from attraction order by RAND() LIMIT 0,100";

        $run_attrct = mysqli_query($con, $get_attrct);

        while ($row_attrct = mysqli_fetch_array($run_attrct)) {



            $attrct_id = $row_attrct['attraction_id'];
            $attrct_name = $row_attrct['attraction_name'];
            $attrct_image = $row_attrct['attraction_image'];
            $attrct_desc = $row_attrct['attraction_desc'];

            echo "
			
			<div id='single_product'>
			
				
				
				<p style='font-style: normal; font-weight:bold; text-align:justify; color:black; font-size: 28px;'> $attrct_name</p>
				
				
				
				
				<img src='tourism/admin_area/attraction_images/$attrct_image' width='775' height='570' />
				
				
				
					
					<p style='font-style: normal; font-weight:bold; text-align:justify; color:black; font-size: 18px;'>
					  $attrct_desc </p>
			
			</div>
		
		
		";
        }
    }
	
}
//////////////////////////////////////////////////////////////////////////////////////////


?>
