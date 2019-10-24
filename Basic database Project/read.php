<?php 


$sql = "SELECT * FROM student";
$student= $db->query($sql);

?>



<div class="container">


<table class="table table-striped table-hover table-bordered ">
	<thead>
		<tr>
			<th scope="col">ID</th>
			<th scope="col">Name</th>
			<th scope="col">Class</th>
			<th scope="col"> Phone_number </th>
			<th scope="col">Address</th>
			

			<th scope="col" class="text-center">Action</th>
		</tr>
	</thead>
	<tbody>
	<?php
	
if ($student->num_rows > 0) {
	while($student = $student->fetch_assoc()) {
	?>
		<tr>
			<th scope="row"><?php echo $student['ID']?> </th>
			<td><?php echo $student['Name']?> </td>
			<td> <?php echo $student['Class']?></td>
			<td> <?php echo $student['Phone_number']?></td>
			<td> <?php echo $student['Address']?></td>
			


			<td class="text-center"> 

			<!-- update area -->
			<form method="get"  action ="update.php"  id="edit<?php echo $student['ID']?>"   style="display:none; " >
			<input value="<?php echo $student['ID']?>" name = 'uid' />

			</form>




			<button   onclick="
				document.getElementById('edit<?php echo $student['ID']?>').submit();
				
				
	

			" class="btn btn-success btn-sm btn-raised" >
				<i class="fas fa-edit" aria-hidden="true">
				
				</i>
			</button>	


			<!-- update area -->
			<form method="get"  action ="delete.php"  ID="delete<?php echo $student['ID']?>"   style="display:none; " >
			<input value="<?php echo $student['ID']?>" name = 'uid' />

			</form>




			<button   onclick="
				document.getElementById('delete<?php echo $student['ID']?>').submit();
				
				
	

			" class="btn btn-success btn-sm btn-raised" >
				<i class="fa fa-trash" aria-hidden="true">
				
				</i>
			</button>



<!-- Delete Area -->


			
		</td>
	</tr>
		<?php }} ?>

</tbody>
</table>

</div>

