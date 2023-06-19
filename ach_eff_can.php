<?php
$can = mysqli_connect("10.10.2.38", "root", "Rider>_<", "aio_iot_can");
$can_ach = mysqli_query($can, "SELECT * FROM v_ach_can");
$can_eff = mysqli_query($can, "SELECT * FROM v_eff_can");
?>

<?php foreach($can_ach as $row) : ?>
<span class="mx-auto p-5">Ach. <?php echo $row["ach"]; ?>%</span>
<?php endforeach; ?>
<?php foreach($can_eff as $row) : ?>
<span class="mx-auto p-5">Eff. <?php echo $row["eff"]; ?>%</span>
<?php endforeach; ?>