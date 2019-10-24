<?php 
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

if( isset($_POST['search']) ){

	$MedicineName=test_input($_POST['MedicineName']);

	$sql = "SELECT * FROM Medicine where MedicineName = '$MedicineName' " ;
	$Medicines= $db->query($sql);
}
else{

	$sql = "SELECT * FROM Medicine";
	$Medicines= $db->query($sql);
}

?>

<div style="
height:80vh;
background:url('img/bg5.jpg');
background-size:cover;
background-repeat:no-repeat;

">

<div class="container">


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

</div>