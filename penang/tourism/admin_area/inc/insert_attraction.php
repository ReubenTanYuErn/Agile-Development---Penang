<!DOCTYPE html>
<?php
include("includes/db.php");
?>


<html>


    <body>

        <form action="firstPage.php?insert_attraction" method="post" enctype="multipart/form-data">

            <table align="center" width="700" border="0" bgcolor="">

                <tr align="center">
                    <td colspan="7"><u><h2 style="font-family : Helvetica;font-size:45px;font-weight:bolder;">Insert Attraction Here</u></h2></td><br/>

                </tr>

                <tr>

                    <td align="right"><b style="font-family : Helvetica;font-size:24px;">Attraction Name:</b></td>
                    <td><input type="text" name="attraction_name" size="60" required/></td>

                </tr>



                <tr>
                    <td align="right"><b style="font-family : Helvetica;font-size:24px;">Attraction Image:</b></td>
                    <td><input type="file" name="attraction_image" required/></td>

                </tr>




                <tr>
                    <td align="right"><b style="font-family : Helvetica;font-size:24px;">About Attraction:</b></td>
                    <td><textarea type="text" rows="9" cols="60" name="attraction_desc"  ></textarea></td>
                </tr>




                <tr align="center">
                    <td colspan="7"><br/><input type="submit" style="background-color:#7B4A12; height:50px; font-size:25px;font-family:Helvetica;cursor:pointer;" name="insert_post" value="Insert Attraction" /></td>
                </tr>

            </table>

        </form>

    </body>
</html>








<?php
if (isset($_POST['insert_post'])) { //if something is clicked it will operate,post method to execute the source
    //getting the text data from the fields
    $attraction_name = $_POST['attraction_name'];
    $attraction_desc = $_POST['attraction_desc'];



    //getting the image from the fields

    $attraction_image = $_FILES['attraction_image']['name'];
    $attraction_image_tmp = $_FILES['attraction_image']['tmp_name'];

    move_uploaded_file($attraction_image_tmp, "attraction_images/$attraction_image");

    $insert_restaurant = "insert into attraction(attraction_name,attraction_image,attraction_desc) values ('$attraction_name','$attraction_image','$attraction_desc')";

    $insert_res = mysqli_query($con, $insert_restaurant);

    if ($insert_res) {

        echo "<script>alert('Attraction been inserted!')</script>"; //to show message restaurant has been inserted
        echo "<script>window.open('firstPage.php?insert_attraction','_self')</script>"; //once refresh cannot duplicate data
    }
}
?>








