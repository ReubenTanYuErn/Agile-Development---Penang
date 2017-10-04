<table align="center" width="1250" bgcolor="">

    <tr align="center">
        <td colspan="6"><u><h2 style="font-family : Helvetica;font-size:40px;font-weight:bolder;">View All Restaurant Here</u></h2></td>
    </tr>


<tr align="center" bgcolor="">
    <th style="font-family : Helvetica;font-size:26px;border:4px solid black;">Restaurant ID</th>
    <th style="font-family : Helvetica;font-size:26px;border:4px solid black;">Name</th>
    <th style="font-family : Helvetica;font-size:26px;border:4px solid black;">Image</th>
    <th style="font-family : Helvetica;font-size:26px;border:4px solid black;">Description</th>

</tr>

<?php
include("includes/db.php");

$get_res = "select * from restaurant";

$run_res = mysqli_query($con, $get_res);

$i = 0;

while ($row_res = mysqli_fetch_array($run_res)) {

    $res_id = $row_res['restaurant_id'];
    $res_name = $row_res['restaurant_name'];
    $res_image = $row_res['restaurant_image'];
    $res_desc = $row_res['restaurant_desc'];
    $i++;
    ?>

    <tr align="center" >
        <td style="font-family : Helvetica;font-size:22px;border:3px solid #7B4A12; "><?php echo $i; ?></td>
        <td style="font-family : Helvetica;font-size:22px;border:3px solid #7B4A12; "><?php echo $res_name; ?></td>

        <td style="font-family : Helvetica;font-size:22px;border:3px solid #7B4A12; "><img src="restaurant_images/<?php echo $res_image; ?>" width="150" height="150"</td>

        <td style="font-family : Helvetica;font-size:22px;border:3px solid #7B4A12;text-align:justify; "><?php echo $res_desc; ?></td>

    </tr>

<?php } ?>


</table>





