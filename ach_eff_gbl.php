<?php
$gbl = mysqli_connect("10.10.2.38", "root", "Rider>_<", "aio_iot_nami");
$gbl_ach = mysqli_query($gbl, "SELECT * FROM v_ach_gbl");
$gbl_eff = mysqli_query($gbl, "SELECT * FROM v_eff_gbl");
?>

<?php $i = 1; ?>
<?php foreach($gbl_ach as $row) : ?>
<span class="mx-auto p-5">Ach. <?php echo $row["ach"]; ?>%</span>
<?php endforeach; ?>
<?php foreach($gbl_eff as $row) : ?>
<span class="mx-auto p-5">Eff. <?php echo $row["eff"]; ?>%</span>
<?php endforeach; ?>