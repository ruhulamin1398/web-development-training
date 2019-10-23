<?php 


$sql = "SELECT * FROM students";
$students= $db->query($sql);

?>



<div class="container">


<table class="table table-striped table-hover table-bordered ">
	<thead>
		<tr>
			<th scope="col">Id</th>
			<th scope="col">First</th>
			<th scope="col">Last</th>
			<th scope="col"> Rollno </th>
			<th scope="col"> Phoneno</th>
			<th scope="col">Class</th>
			<th scope="col">Hometown</th>

			<th scope="col" class="text-center">Action</th>
		</tr>
	</thead>
	<tbody>
	<?php
	$i =1 ; {
	while($student = $students->fetch_assoc()) {
	?>
		<tr>
			<th scope="row"><?php echo $i++?> </th>
			<td><?php echo $student['Firstname']?> </td>
			<td> <?php echo $student['Lastname']?></td>
			<td> <?php echo $student['Class']?></td>
			<td> <?php echo $student['Rollno']?></td>
			<td> <?php echo $student['Phoneno']?></td>
			<td> <?php echo $student['Hometown']?></td>


			<td class="text-center"> 

			<!-- update area -->
			<form method="get"  action ="update.php"  id="edit<?php echo $student['Id']?>"   style="display:none; " >
			<input value="<?php echo $student['Id']?>" name = 'uid' />

			</form>




			<button   onclick="
				document.getElementById('edit<?php echo $student['Id']?>').submit();
				
				
	

			" class="btn btn-success btn-sm btn-raised" >
				<i class="fas fa-edit" aria-hidden="true">
				
				</i>
			</button>	
			




			
<!-- Delete Area -->




			<form method="get"  action ="delete.php"  id="delete<?php echo $student['Id']?>"   style="display:none; " >
			<input value="<?php echo $student['Id']?>" name = 'uid' />
			</form>
			
			<button   onclick="
				document.getElementById('delete<?php echo $student['Id']?>').submit();
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

