<?php
$koneksi = mysqli_connect("10.10.2.38", "root", "Rider>_<", "aio_iot_nami");
$gbl_tank = mysqli_query($koneksi, "SELECT * FROM v_preparasi_gbl");
$gbl_counter = mysqli_query($koneksi, "SELECT * FROM v_counter_gbl");
$gbl_identity = mysqli_query($koneksi, "SELECT * FROM mst_prodidentity_gbl");
?>

<table class="table table-borderless fs-6">
    <?php $i = 1; ?>
    <?php foreach($gbl_identity as $row) : ?>
    <tr>
        <td><b>Lot. No.</b></td>
        <td><b><?php echo $row["lotno"]; ?></b></td>
    </tr>
    <tr>
        <td><b>Production Order</b></td>
        <td><b><?php echo $row["prod_order"]; ?></b></td>
    </tr>
    <?php endforeach; ?>
    <?php foreach($gbl_counter as $row) : ?>
    <tr>
        <td><b>Counter Filler</b></td>
        <td><b><?php echo $row["counter_filler"]; ?></b></td>
    </tr>
    <tr>
        <td><b>Filler Speed</b></td>
        <td><b><?php echo $row["filler_speed"]; ?></b></td>
    </tr>
    <?php endforeach; ?>
    <?php foreach($gbl_tank as $row) : ?>
    <tr>
        <td><b>Level Tanki T15</b></td>
        <td><b><?php echo $row["level_T15"]; ?></b></td>
    </tr>
    <tr>
        <td><b>Level Tanki T16</b></td>
        <td><b><?php echo $row["level_T16"]; ?></b></td>
    </tr>
    <?php endforeach; ?>
</table>