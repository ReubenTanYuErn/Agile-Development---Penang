<!DOCTYPE html>
<?php
include("includes/db.php");

function getPosts()
{
    $posts = array();
    $posts[0] = $_POST['id'];
    $posts[1] = $_POST['fname'];
    $posts[2] = $_POST['lname'];
    $posts[3] = $_POST['age'];
    return $posts;
}

if(isset($_POST['update']))
{
    $data = getPosts();
    $update_Query = "UPDATE `users` 
    SET `fname`='$data[1]',`lname`='$data[2]',`age`=$data[3] 
    WHERE `id` = $data[0]";
    
    try{
        $update_Result = mysqli_query($con, $update_Query);
        
        if($update_Result)
        {
            if(mysqli_affected_rows($con) > 0)
            {
                echo 'Data Updated';
            }else{
                echo 'Data Not Updated';
            }
        }
    } catch (Exception $ex) {
        echo 'Error Update '.$ex->getMessage();
    }
}
?>

<html>
    <body>
        <form action="firstPage.php?update" method="post" enctype="multipart/form-data">
            <table align="center" width="700" border="0" bgcolor="">
                <tr align="center">
                    <td colspan="7"><u><h2 style="font-family : Helvetica;font-size:45px;font-weight:bolder;">Update Information</u></h2></td><br/>
                </tr>

                <tr>
                    <td align="right"><b style="font-family : Helvetica;font-size:24px;">Name:</b></td>
                    <td><input type="text" name="name" size="60" required/></td>
                </tr>

                <tr>
                    <td align="right"><b style="font-family : Helvetica;font-size:24px;">Shopping Image:</b></td>
                    <td><input type="file" name="shopping_image" required/></td>

                </tr>

                <tr>
                    <td align="right"><b style="font-family : Helvetica;font-size:24px;">Description:</b></td>
                    <td><textarea type="text" rows="9" cols="60" name="desc"  ></textarea></td>
                </tr>

                <tr align="center">
                    <td colspan="7"><br/><input type="submit" style="background-color:#7B4A12; height:50px; font-size:25px;font-family:Helvetica;cursor:pointer;" name="update" value="Update" /></td>
                </tr>

            </table>

        </form>

    </body>
</html>
