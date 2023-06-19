<?php
$oci3 = mysqli_connect("10.10.2.111", "iot_prod", "P@ssw0rd123", "db_machine", 6447);
$oci3_ach = mysqli_query($oci3, "SELECT * FROM v_ach_oci3");
$oci3_eff = mysqli_query($oci3, "SELECT * FROM v_eff_oci3");
?>

<?php $i = 1; ?>
<?php foreach($oci3_ach as $row) : ?>
<span class="mx-auto p-5">Ach. <?php echo $row["ach"]; ?>%</span>
<?php endforeach; ?>
<?php foreach($oci3_eff as $row) : ?>
<span class="mx-auto p-5">Eff. <?php echo $row["eff"]; ?>%</span>
<?php endforeach; ?>