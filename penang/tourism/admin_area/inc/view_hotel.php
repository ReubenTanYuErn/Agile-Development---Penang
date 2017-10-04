<table align="center" width="1250" bgcolor="">

    <tr align="center">
        <td colspan="6"><u><h2 style="font-family : Helvetica;font-size:40px;font-weight:bolder;">View All Hotel Here</u></h2></td>
</tr>


<tr align="center" bgcolor="">
    <th style="font-family : Helvetica;font-size:26px;border:4px solid black;">Hotel ID</th>
    <th style="font-family : Helvetica;font-size:26px;border:4px solid black;">Name</th>
    <th style="font-family : Helvetica;font-size:26px;border:4px solid black;">Image</th>
    <th style="font-family : Helvetica;font-size:26px;border:4px solid black;">Description</th>

</tr>

<?php
include("includes/db.php");

$get_hot = "select * from hotel";

$run_hot = mysqli_query($con, $get_hot);

$i = 0;

while ($row_hot = mysqli_fetch_array($run_hot)) {

    $hot_id = $row_hot['hotel_id'];
    $hot_name = $row_hot['hotel_name'];
    $hot_image = $row_hot['hotel_image'];
    $hot_desc = $row_hot['hotel_desc'];
    $i++;
    ?>

    <tr align="center" >
        <td style="font-family : Helvetica;font-size:23px;border:3px solid #7B4A12; "><?php echo $i; ?></td>
        <td style="font-family : Helvetica;font-size:23px;border:3px solid #7B4A12; "><?php echo $hot_name; ?></td>

        <td style="font-family : Helvetica;font-size:23px;border:3px solid #7B4A12; "><img src="hotel_images/<?php echo $hot_image; ?>" width="150" height="150"</td>

        <td style="font-family : Helvetica;font-size:23px;border:3px solid #7B4A12;text-align:justify; "><?php echo $hot_desc; ?></td>

    </tr>

<?php } ?>


</table>





