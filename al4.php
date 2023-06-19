<?php
$koneksi = mysqli_connect("10.10.2.111", "iot_prod_etr", "P@ssw0rd123", "db_machine", 6447);
$al4_tank = mysqli_query($koneksi, "SELECT * FROM v_prep_tank_al4");
$al4_counter = mysqli_query($koneksi, "SELECT * FROM v_counter_al4");
$al4_filler_spd = mysqli_query($koneksi, "SELECT * FROM v_spd_machine_al4");
$al4_identity = mysqli_query($koneksi, "SELECT * FROM mst_prodidentity_al4");
?>

<table class="table table-borderless fs-6">
    <?php $i = 1; ?>
    <?php foreach($al4_identity as $row) : ?>
    <tr>
        <td><b>Lot. No.</b></td>
        <td><b><?php echo $row["lotno"]; ?></b></td>
    </tr>
    <tr>
        <td><b>Production Order</b></td>
        <td><b><?php echo $row["prod_order"]; ?></b></td>
    </tr>
    <?php endforeach; ?>
    <?php foreach($al4_counter as $row) : ?>
    <tr>
        <td><b>Counter Filler</b></td>
        <td><b><?php echo $row["counter"]; ?></b></td>
    </tr>
    <?php endforeach; ?>
    <?php foreach($al4_filler_spd as $row) : ?>
    <tr>
        <td><b>Filler Speed</b></td>
        <td><b><?php echo $row["filler_speed"]; ?></b></td>
    </tr>
    <?php endforeach; ?>
    <?php foreach($al4_tank as $row) : ?>
    <tr>
        <td><b>Level Vario Tank</b></td>
        <td><b><?php echo $row["lv_vario_tank"]; ?></b></td>
    </tr>
    <tr>
        <td><b>Blending Tank 1</b></td>
        <td><b><?php echo $row["lv_syrup_tank1"]; ?></b></td>
    </tr>
    <tr>
        <td><b>Blending Tank 2</b></td>
        <td><b><?php echo $row["lv_syrup_tank2"]; ?></b></td>
    </tr>
    <?php endforeach; ?>
</table>