<?php
$al4 = mysqli_connect("10.10.2.111", "iot_prod", "P@ssw0rd123", "db_machine", 6447);
$al4_ach = mysqli_query($al4, "SELECT * FROM v_ach_al4");
$al4_eff = mysqli_query($al4, "SELECT * FROM v_eff_al4");
?>

<?php foreach($al4_ach as $row) : ?>
<span class="mx-auto p-5">Ach. <?php echo $row["ach"]; ?>%</span>
<?php endforeach; ?>
<?php foreach($al4_eff as $row) : ?>
<span class="mx-auto p-5">Eff. <?php echo $row["eff"]; ?>%</span>
<?php endforeach; ?>