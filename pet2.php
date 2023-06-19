<?php
$koneksi = mysqli_connect("10.10.2.38", "root", "Rider>_<", "aio_iot_pet");
$pet_tank = mysqli_query($koneksi, "SELECT * FROM v_preparasi_pet");
$pet_counter = mysqli_query($koneksi, "SELECT * FROM v_counter_pet");
$pet_identity = mysqli_query($koneksi, "SELECT * FROM mst_prodidentity_pet");
?>

<table class="table table-borderless fs-6">
    <?php $i = 1; ?>
    <?php foreach($pet_identity as $row) : ?>
    <tr>
        <td><b>Lot. No.</b></td>
        <td><b><?php echo $row["lotno"]; ?></b></td>
    </tr>
    <tr>
        <td><b>Production Order</b></td>
        <td><b><?php echo $row["prod_order"]; ?></b></td>
    </tr>
    <?php endforeach; ?>
    <?php foreach($pet_counter as $row) : ?>
    <tr>
        <td><b>Counter Filler</b></td>
        <td><b><?php echo $row["counter_filler"]; ?></b></td>
    </tr>
    <tr>
        <td><b>Filler Speed</b></td>
        <td><b><?php echo $row["machine_speed"]; ?></b></td>
    </tr>
    <?php endforeach; ?>
    <?php foreach($pet_tank as $row) : ?>
    <tr>
        <td><b>Level Tanki T21</b></td>
        <td><b><?php echo $row["LIAT21"]; ?></b></td>
    </tr>
    <?php endforeach; ?>
    <tr>
        <td><br></td>
        <td></td>
    </tr>
</table>