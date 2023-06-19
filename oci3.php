<?php
$koneksi = mysqli_connect("10.10.2.111", "iot_prod_etr", "P@ssw0rd123", "db_machine", 6447);
$oci3_tank = mysqli_query($koneksi, "SELECT * FROM v_prep_tank_oci3");
$oci3_counter = mysqli_query($koneksi, "SELECT * FROM v_counter_oci3");
$oci3_identity = mysqli_query($koneksi, "SELECT * FROM mst_prodidentity_oc3");
?>

<table class="table table-borderless fs-6">
    <?php $i = 1; ?>
    <?php foreach($oci3_identity as $row) : ?>
    <tr>
        <td><b>Lot. No.</b></td>
        <td><b><?php echo $row["lotno"]; ?></b></td>
    </tr>
    <tr>
        <td><b>Production Order</b></td>
        <td><b><?php echo $row["prod_order"]; ?></b></td>
    </tr>
    <?php endforeach; ?>
    <?php foreach($oci3_counter as $row) : ?>
    <tr>
        <td><b>Counter Filler</b></td>
        <td><b><?php echo $row["count_filler"]; ?></b></td>
    </tr>
    <tr>
        <td><b>Filler Speed</b></td>
        <td><b><?php echo $row["filler_speed"]; ?></b></td>
    </tr>
    <?php endforeach; ?>
    <?php foreach($oci3_tank as $row) : ?>
    <tr>
        <td><b>Volume Tank 21</b></td>
        <td><b><?php echo $row["level_T21"]; ?></b></td>
    </tr>
    <tr>
        <td><b>Volume Tank 22</b></td>
        <td><b><?php echo $row["level_T22"]; ?></b></td>
    </tr>
    <tr>
        <td><b>Volume Tank 23</b></td>
        <td><b><?php echo $row["level_T23"]; ?></b></td>
    </tr>
    <?php endforeach; ?>
</table>