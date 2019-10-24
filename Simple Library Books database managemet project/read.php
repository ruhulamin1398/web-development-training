
<?php  include('includes\header.php')  ?>

<?php 





$sql = "SELECT * FROM users";
$users= $db->query($sql);

?>



<div class="container">


<table class="table table-striped table-hover table-bordered ">
	<thead>
		<tr>
			<th scope="col">Id</th>
			<th scope="col">Reason</th>
			<th scope="col">Amount</th>
			<th scope="col" class="text-center">Action</th>
		</tr>
	</thead>
	<tbody>
	<?php
	$i=1;
	$sum=0;
if ($users->num_rows > 0) {
	while($user = $users->fetch_assoc()) {
	?>
		<tr>
			<th scope="row"><?php echo $i++;?> </th>
			<td><?php echo $user['bookName']?> </td>
			<td> <?php echo $user['amount']?></td>
			<td class="text-center"> 

			<!-- update area -->
			<form method="get"  action ="update.php"  id="edit<?php echo $user['id']?>"   style="display:none; " >
			<input value="<?php echo $user['id']?>" name = 'uid' />

			</form>




			<button   onclick="
				document.getElementById('edit<?php echo $user['id']?>').submit();
				
				
	

			" class="btn btn-success btn-sm btn-raised" >
				<i class="fas fa-edit" aria-hidden="true">
				
				</i>
			</button>



<!-- Delete Area -->



			<form method="POST"  action ="delete.php"  id="delete-form<?php echo $user['id']?>"   style="display:none; " >
			<input value="<?php echo $user['id']?>" name = 'uid' />

			</form>

			<button   onclick="if(confirm('are you sure to delete  <?php echo $user['bookName']?> ?')){
				document.getElementById('delete-form<?php echo $user['id']?>').submit();
				
				
			}
			else{
				event.preventDefault();

			}

			" class="btn btn-danger btn-sm btn-raised" >
				<i class="fa fa-trash" aria-hidden="true">
				
				</i>
			</button>
		</td>

	<?php 	$sum+=$user['amount']; ?>
	</tr>
		<?php }}  
?>

</tbody>

</table>
<div class="  btn border border-dark row mr-auto">

<?php echo "Total : " .$sum;  ?>
</div>
</div>





<?php  include('includes\footer.php')  ?>


