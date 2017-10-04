<table align="center" width="1250" bgcolor="">

    <tr align="center">
        <td colspan="6"><u><h2 style="font-family : Helvetica;font-size:40px;font-weight:bolder;">View All Shopping Here</u></h2></td>
    </tr>


<tr align="center" bgcolor="">
    <th style="font-family : Helvetica;font-size:26px;border:4px solid black;">Shopping ID</th>
    <th style="font-family : Helvetica;font-size:26px;border:4px solid black;">Name</th>
    <th style="font-family : Helvetica;font-size:26px;border:4px solid black;">Image</th>
    <th style="font-family : Helvetica;font-size:26px;border:4px solid black;">Description</th>

</tr>

<?php
include("includes/db.php");

$get_shop = "select * from shopping";

$run_shop = mysqli_query($con, $get_shop);

$i = 0;

while ($row_shop = mysqli_fetch_array($run_shop)) {

    $shop_id = $row_shop['shopping_id'];
    $shop_name = $row_shop['shopping_name'];
    $shop_image = $row_shop['shopping_image'];
    $shop_desc = $row_shop['shopping_desc'];
    $i++;
    ?>

    <tr align="center" >
        <td style="font-family : Helvetica;font-size:22px;border:3px solid #7B4A12; "><?php echo $i; ?></td>
        <td style="font-family : Helvetica;font-size:22px;border:3px solid #7B4A12; "><?php echo $shop_name; ?></td>

        <td style="font-family : Helvetica;font-size:22px;border:3px solid #7B4A12; "><img src="shopping_images/<?php echo $shop_image; ?>" width="150" height="150"</td>

        <td style="font-family : Helvetica;font-size:22px;border:3px solid #7B4A12;text-align:justify; "><?php echo $shop_desc; ?></td>

    </tr>

<?php } ?>


</table>





