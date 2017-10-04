<!DOCTYPE html>
<?php
include("includes/db.php");
?>


<html>


    <body>

        <form action="firstPage.php?insert_hotel" method="post" enctype="multipart/form-data">

            <table align="center" width="700" border="0" bgcolor="">

                <tr align="center">
                    <td colspan="7"><u><h2 style="font-family : Helvetica;font-size:45px;font-weight:bolder;">Insert Hotel Here</u></h2></td><br/>

                </tr>

                <tr>

                    <td align="right"><b style="font-family : Helvetica;font-size:24px;">Hotel Name:</b></td>
                    <td><input type="text" name="hotel_name" size="60" required/></td>

                </tr>

                <br/>

                <tr>
                    <td align="right"><b style="font-family : Helvetica;font-size:24px;">Hotel Image:</b></td>
                    <td><input type="file" name="hotel_image" required/></td>

                </tr>


                <tr>
                    <td align="right"><b style="font-family : Helvetica;font-size:24px;">About Hotel:</b></td>
                    <td><textarea type="text" rows="9" cols="60" name="hotel_desc"  ></textarea></td>
                </tr>




                <tr align="center">
                    <td colspan="7"><br/><input type="submit" style="background-color:#7B4A12; height:50px; font-size:30px;font-family:Helvetica;cursor:pointer;" name="insert_post" value="Insert Hotel" /></td>
                </tr>

            </table>

        </form>

    </body>
</html>


<?php
if (isset($_POST['insert_post'])) {

    $hotel_name = $_POST['hotel_name'];
    $hotel_desc = $_POST['hotel_desc'];





    $hotel_image = $_FILES['hotel_image']['name'];
    $hotel_image_tmp = $_FILES['hotel_image']['tmp_name'];

    move_uploaded_file($hotel_image_tmp, "hotel_images/$hotel_image");

    $insert_hotel = "insert into hotel(hotel_name,hotel_image,hotel_desc) values ('$hotel_name','$hotel_image','$hotel_desc')";

    $insert_hot = mysqli_query($con, $insert_hotel);

    if ($insert_hot) {

        echo "<script>alert('Hotel Has been inserted!')</script>";
        echo "<script>window.open('firstPage.php?insert_hotel','_self')</script>";
    }
}
?>


