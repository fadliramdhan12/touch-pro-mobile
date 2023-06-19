<?php
$koneksi = mysqli_connect("10.10.2.38", "root", "Rider>_<", "aio_iot_can");
$can_counter = mysqli_query($koneksi, "SELECT * FROM v_counter_can");
$can_identity = mysqli_query($koneksi, "SELECT * FROM mst_prodidentity_can");
?>

<table class="table table-borderless fs-6">
    <?php $i = 1; ?>
    <?php foreach($can_identity as $row) : ?>
    <tr>
        <td><b>Lot. No.</b></td>
        <td><b><?php echo $row["lotno"]; ?></b></td>
    </tr>
    <tr>
        <td><b>Production Order</b></td>
        <td><b><?php echo $row["prod_order"]; ?></b></td>
    </tr>
    <?php endforeach; ?>
    <?php foreach($can_counter as $row) : ?>
    <tr>
        <td><b>Counter Can</b></td>
        <td><b><?php echo $row["counter_can"]; ?></b></td>
    </tr>
    <tr>
        <td><b>Counter Cap</b></td>
        <td><b><?php echo $row["counter_cap"]; ?></b></td>
    </tr>
    <tr>
        <td><b>Filler Speed</b></td>
        <td><b><?php echo $row["speed_filler"]; ?></b></td>
    </tr>
    <tr>
        <td><b>Level Filler Tank</b></td>
        <td><b><?php echo $row["level_filler_tank"]; ?></b></td>
    </tr>
    <tr>
        <td><b>Level Syrup Tank C1</b></td>
        <td><b><?php echo $row["level_syrup_tank_c1"]; ?></b></td>
    </tr>
    <tr>
        <td><b>Level Syrup Tank C2</b></td>
        <td><b><?php echo $row["level_syrup_tank_c2"]; ?></b></td>
    </tr>
    <?php endforeach; ?>
</table>