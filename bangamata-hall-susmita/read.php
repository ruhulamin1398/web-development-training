<?php 


$sql = "SELECT * FROM girls";
$girls= $db->query($sql);

?>



<div class="container">


<table class="table table-striped table-hover table-bordered ">
	<thead>
		<tr>
			<th scope="col">Id</th>
			<th scope="col">First</th>
			<th scope="col">Last</th>
			<th scope="col"> Reg No </th>
			<th scope="col">Hometown</th>
			<th scope="col">Department</th>
			<th scope="col"> Phone No</th>

			<th scope="col" class="text-center">Action</th>
		</tr>
	</thead>
	<tbody>
	<?php
	
if ($girls->num_rows > 0) {
	while($girl = $girls->fetch_assoc()) {
	?>
		<tr>
			<th scope="row"><?php echo $girl['Id']?> </th>
			<td><?php echo $girl['Firstname']?> </td>
			<td> <?php echo $girl['Lastname']?></td>
			<td> <?php echo $girl['Reg_No']?></td>
			<td> <?php echo $girl['Hometown']?></td>
			<td> <?php echo $girl['Department']?></td>
			<td> <?php echo $girl['Phone_no']?></td>


			<td class="text-center"> 

			<!-- update area -->
			<form method="get"  action ="update.php"  id="edit<?php echo $girl['Id']?>"   style="display:none; " >
			<input value="<?php echo $girl['Id']?>" name = 'uid' />

			</form>




			<button   onclick="
				document.getElementById('edit<?php echo $girl['Id']?>').submit();
				
				
	

			" class="btn btn-success btn-sm btn-raised" >
				<i class="fas fa-edit" aria-hidden="true">
				
				</i>
			</button>	


			<!-- update area -->
			<form method="get"  action ="delete.php"  id="delete<?php echo $girl['Id']?>"   style="display:none; " >
			<input value="<?php echo $girl['Id']?>" name = 'uid' />

			</form>




			<button   onclick="
				document.getElementById('delete<?php echo $girl['Id']?>').submit();
				
				
	

			" class="btn btn-success btn-sm btn-raised" >
				<i class="fas fa-edit" aria-hidden="true">
				
				</i>
			</button>



<!-- Delete Area -->


			

			<button   onclick="
			 bhdfh gh fdh d
				
	<?php 	
    $uid= $girl['Id'];

    $sql= "DELETE FROM users WHERE id =$uid ";

    $db->query($sql);
		
	?>

			" class="btn btn-danger btn-sm btn-raised" >
				<i class="fa fa-trash" aria-hidden="true">
				
				</i>
			</button>
		</td>
	</tr>
		<?php }} ?>

</tbody>
</table>

</div>

