<!DOCTYPE html>
<?php
include("includes/db.php");

function getPosts()
{
    //expect data to get are 1 id, 1 name, 1 image and 1 description
    $posts = array();
    $posts[0] = $_POST['id'];
    $posts[1] = $_POST['name'];
    $posts[2] = $_FILES['image'];
    $posts[3] = $_POST['description'];
    return $posts;
}

//Update the information
if(isset($_POST['update']))
{
    $data = getPosts();
    $update_Query = "UPDATE `users` 
    SET `name`='$data[1]',`image`='$data[2]',`desciption`=$data[3] 
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
                    <td><input type="text" name="name" size="60" id="name" required/></td>
                </tr>

                <tr>
                    <td align="right"><b style="font-family : Helvetica;font-size:24px;">Image:</b></td>
                    <td><input type="file" name="shopping_image" id="image"/></td>

                </tr>

                <tr>
                    <td align="right"><b style="font-family : Helvetica;font-size:24px;">Description:</b></td>
                    <td><textarea type="text" rows="9" cols="60" name="desc"  id="desc"></textarea></td>
                </tr>

                <tr>
                    <td colspan="7"><br/><input type="submit" style="background-color:#7B4A12; height:50px; font-size:25px;font-family:Helvetica;cursor:pointer;" name="update" value="Search" /></td>
                    <td colspan="7"><br/><input type="submit" style="background-color:#7B4A12; height:50px; font-size:25px;font-family:Helvetica;cursor:pointer;" name="update" value="Update" /></td>
                </tr>

            </table>

        </form>

    </body>
</html>
