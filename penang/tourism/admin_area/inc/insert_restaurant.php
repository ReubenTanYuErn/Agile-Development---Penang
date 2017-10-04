<!DOCTYPE html>
<?php
include("includes/db.php");
?>

<form action="firstPage.php?insert_restaurant" method="post" enctype="multipart/form-data">


    <table align="center" width="700" border="0" bgcolor="">

        <tr align="center">
            <td colspan="7"><u><h2 style="font-family : Helvetica;font-size:45px;font-weight:bolder;">Insert Restaurant Here</u></h2></td><br/>

        </tr>

        <tr>

            <td align="right"><b style="font-family : Helvetica;font-size:24px;">Restaurant Name:</b></td>
            <td><input type="text" name="restaurant_name" size="60" required/></td>

        </tr>



        <tr>
            <td align="right"><b style="font-family : Helvetica;font-size:24px;">Restaurant Image:</b></td>
            <td><input type="file" name="restaurant_image" required/></td>

        </tr>



        <tr>
            <td align="right"><b style="font-family : Helvetica;font-size:24px;">About Restaurant:</b></td>
            <td><textarea type="text" rows="9" cols="60" name="restaurant_desc"  ></textarea></td>
        </tr>




        <tr align="center">
            <td colspan="7"><br/><input type="submit" style="background-color:#7B4A12; height:50px; font-size:25px;font-family:Helvetica;cursor:pointer;" name="insert_post" value="Insert Restaurant" /></td>
        </tr>

    </table>

</form>



<?php
if (isset($_POST['insert_post'])) { //if something is clicked it will operate,post method to execute the source
    //getting the text data from the fields
    $restaurant_name = $_POST['restaurant_name'];
    $restaurant_desc = $_POST['restaurant_desc'];



    //getting the image from the fields

    $restaurant_image = $_FILES['restaurant_image']['name'];
    $restaurant_image_tmp = $_FILES['restaurant_image']['tmp_name'];

    move_uploaded_file($restaurant_image_tmp, "restaurant_images/$restaurant_image");

    $insert_restaurant = "insert into restaurant(restaurant_name,restaurant_image,restaurant_desc) values ('$restaurant_name','$restaurant_image','$restaurant_desc')";

    $insert_res = mysqli_query($con, $insert_restaurant);

    if ($insert_res) {

        echo "<script>alert('Restaurant been inserted!')</script>"; //to show message restaurant has been inserted
        echo "<script>window.open('firstPage.php?insert_restaurant','_self')</script>"; //once refresh cannot duplicate data
    }
}
?>


