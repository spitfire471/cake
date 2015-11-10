<table border=1 style="width:100%">
	<tr>
	<th>Marka</th>
	<th>Model</th>
	<th>Rik</th>
	<th>Color</th>
	<th>Registration number</th>
	<th>Owner</th>
	<th>Owner phone</th>
	<th>Owner address</th>
	<th></th>
	
	</tr>
	<tr>
<?php
foreach ($vehicles as $vehicle) { ?>

	<td> <?php echo $vehicle->marka; ?> </td>
	<td> <?php echo $vehicle->model; ?> </td>
	<td> <?php echo $vehicle->rik; ?> </td>
	<td> <?php echo $vehicle->color; ?> </td>
	<td> <?php echo $vehicle->registration_number; ?> </td>
	<td> <?php echo $vehicle->owner; ?> </td>
	<td> <?php echo $vehicle->owner_phone; ?> </td>
	<td> <?php echo $vehicle->owner_address; ?> </td>
</tr>	
<?php }
?>
</tr>	
</table>