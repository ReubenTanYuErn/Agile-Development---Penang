<table align="center" width="1250" bgcolor="">

    <tr align="center">
        <td colspan="6"><u><h2 style="font-family : Helvetica;font-size:40px;font-weight:bolder;">View Customer Message</u></h2></td>
</tr>


<tr align="center" bgcolor="">
    <th style="font-family : Helvetica;font-size:26px;border:4px solid black;">Customer ID</th>
    <th style="font-family : Helvetica;font-size:26px;border:4px solid black;">Name</th>
    <th style="font-family : Helvetica;font-size:26px;border:4px solid black;">Email</th>
    <th style="font-family : Helvetica;font-size:26px;border:4px solid black;">Message</th>

</tr>

<?php
include("includes/db.php");

$get_con = "select * from contact";

$run_con = mysqli_query($con, $get_con);

$i = 0;

while ($row_con = mysqli_fetch_array($run_con)) {

    $contact_id = $row_con['contact_id'];
    $contact_name = $row_con['contact_name'];
    $contact_email = $row_con['contact_email'];
    $contact_comments = $row_con['contact_comments'];
    $i++;
    ?>

    <tr align="center" >
        <td style="font-family : Helvetica;font-size:23px;border:3px solid #7B4A12; "><?php echo $i; ?></td>
        <td style="font-family : Helvetica;font-size:23px;border:3px solid #7B4A12; "><?php echo $contact_name; ?></td>

        <td style="font-family : Helvetica;font-size:23px;border:3px solid #7B4A12; "><?php echo $contact_email; ?></td>

        <td style="font-family : Helvetica;font-size:23px;border:3px solid #7B4A12;text-align:center; "><?php echo $contact_comments; ?></td>

    </tr>

<?php } ?>


</table>





