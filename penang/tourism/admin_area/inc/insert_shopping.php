<!DOCTYPE html>
<?php
include("includes/db.php");
?>


<html>


    <body>

        <form action="firstPage.php?insert_shopping" method="post" enctype="multipart/form-data">

            <table align="center" width="700" border="0" bgcolor="">

                <tr align="center">
                    <td colspan="7"><u><h2 style="font-family : Helvetica;font-size:45px;font-weight:bolder;">Insert Shopping Here</u></h2></td><br/>

                </tr>

                <tr>

                    <td align="right"><b style="font-family : Helvetica;font-size:24px;">Shopping Name:</b></td>
                    <td><input type="text" name="shopping_name" size="60" required/></td>

                </tr>



                <tr>
                    <td align="right"><b style="font-family : Helvetica;font-size:24px;">Shopping Image:</b></td>
                    <td><input type="file" name="shopping_image" required/></td>

                </tr>




                <tr>
                    <td align="right"><b style="font-family : Helvetica;font-size:24px;">About Shopping:</b></td>
                    <td><textarea type="text" rows="9" cols="60" name="shopping_desc"  ></textarea></td>
                </tr>




                <tr align="center">
                    <td colspan="7"><br/><input type="submit" style="background-color:#7B4A12; height:50px; font-size:25px;font-family:Helvetica;cursor:pointer;" name="insert_post" value="Insert Shopping" /></td>
                </tr>

            </table>

        </form>

    </body>
</html>


<?php
if (isset($_POST['insert_post'])) { 

    $shopping_name = $_POST['shopping_name'];
    $shopping_desc = $_POST['shopping_desc'];
    $shopping_image = $_FILES['shopping_image']['name'];
    $shopping_image_tmp = $_FILES['shopping_image']['tmp_name'];

    move_uploaded_file($shopping_image_tmp, "shopping_images/$shopping_image");

    $insert_shopping = "insert into shopping(shopping_name,shopping_image,shopping_desc) values ('$shopping_name','$shopping_image','$shopping_desc')";

    $insert_shop = mysqli_query($con, $insert_shopping);

    if ($insert_shop) {

        echo "<script>alert('Shopping has been inserted!')</script>"; 
        echo "<script>window.open('firstPage.php?insert_shopping','_self')</script>"; 
    }
}
?>
