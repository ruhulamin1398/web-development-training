<?php 


$sql = "SELECT * FROM Medicine";
$Medicines= $db->query($sql);

?>



<div class="container">
	<!-- @if (session('successMsg'))
	<div class="alert alert-dismissible alert-success">
		<button type="button" class="close" data-dismiss="alert">×</button>
		<strong>Well done!</strong> {{ session('successMsg') }}
	</div>
	@endif -->

<table class="table table-striped table-hover table-bordered ">
	<thead>
		<tr>
			<th scope="col">ID</th>
			<th scope="col">Medicine Name</th>
			<th scope="col">Comapny Name</th>
			<th scope="col">Price</th>
			<th scope="col" class="text-center">Action</th>
		</tr>
	</thead>
	<tbody>
	<?php
	
if ($Medicines->num_rows > 0) {
	while($Medicine = $Medicines->fetch_assoc()) {
	?>
		<tr>
			<th scope="row"><?php echo $Medicine['id']?> </th>
			<td><?php echo $Medicine['MedicineName']?> </td>
			<td> <?php echo $Medicine['CompanyName']?></td>
			<td> <?php echo $Medicine['Price']?></td>
			<td class="text-center"> 

			<!-- update area -->
			<form method="get"  action ="update.php"  id="edit<?php echo $Medicine['id']?>"   style="display:none; " >
			<input value="<?php echo $Medicine['id']?>" name = 'uid' />

			</form>




			<button   onclick="
				document.getElementById('edit<?php echo $Medicine['id']?>').submit();
				
				
	

			" class="btn btn-success btn-sm btn-raised" >
				<i class="fas fa-edit" aria-hidden="true">
				
				</i>
			</button>



<!-- Delete Area -->


	<form method="post"  action ="delete.php"  id="delete<?php echo $Medicine['id']?>"   style="display:none; " >
			<input value="<?php echo $Medicine['id']?>" name = 'uid' />

			</form>




			<button   onclick="
				document.getElementById('delete<?php echo $Medicine['id']?>').submit();
				
				
	

			" class="btn btn-danger btn-sm btn-raised" >
				<i class="fas fa-trash" aria-hidden="true">
				
				</i>
			</button>

		</td>
	</tr>
		<?php }} ?>

</tbody>
</table>

</div>

