<?php 


$sql = "SELECT * FROM students";
$students= $db->query($sql);

?>



<div class="container">


	<table class="table table-striped table-hover table-bordered ">
		<thead>
			<tr>
				<th scope="col">Id</th>
				<th scope="col">Student_Name</th>
				<th scope="col">Fathers_Name</th>
				<th scope="col">Mothers_name</th>
				<th scope="col">Present_Address</th>
				<th scope="col">Phone_Number</th>
				<th scope="col" class="text-center">Action</th>
			</tr>
		</thead>
		<tbody>
			<?php
	

	while($student = $students->fetch_assoc()) {
	?>
			<tr>
				<th scope="row"><?php echo $student['id']?> </th>
				<td><?php echo $student['student_name']?> </td>
				<td><?php echo $student['fathers_name']?> </td>
				<td><?php echo $student['mothers_name']?> </td>
				<td><?php echo $student['present_address']?> </td>
				<td><?php echo $student['phone_number']?> </td>

				<td class="text-center">

					<!-- update area -->
					<form method="get" action="update.php" id="edit<?php echo $student['id']?>" style="display:none; ">
						<input value="<?php echo $student['id']?>" name='uid' />

					</form>
					<button onclick="
				document.getElementById('edit<?php echo $student['id']?>').submit();

			" class="btn btn-success btn-sm btn-raised">
						<i class="fas fa-edit" aria-hidden="true">

						</i>
					</button>



					<!-- Delete Area -->
					<form method="post" action="delete.php" id="delete<?php echo $student['id']?>" style="display:none; ">
						<input value="<?php echo $student['id']?>" name='uid' />

					</form>
					<button onclick="
				document.getElementById('delete<?php echo $student['id']?>').submit();

			" class="btn btn-danger btn-sm btn-raised">
						<i class="fas fa-trash" aria-hidden="true">

						</i>
					</button>





				</td>
			</tr>
			<?php } ?>

		</tbody>
	</table>

</div>