<?php
$pet = mysqli_connect("10.10.2.38", "root", "Rider>_<", "aio_iot_pet");
$pet_ach = mysqli_query($pet, "SELECT * FROM v_ach_pet");
$pet_eff = mysqli_query($pet, "SELECT * FROM v_eff_pet");
?>

<?php foreach($pet_ach as $row) : ?>
<span class="mx-auto p-5">Ach. <?php echo $row["ach"]; ?>%</span>
<?php endforeach; ?>
<?php foreach($pet_eff as $row) : ?>
<span class="mx-auto p-5">Eff. <?php echo $row["eff"]; ?>%</span>
<?php endforeach; ?>