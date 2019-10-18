<?php 


$sql = "SELECT * FROM users";
$users= $db->query($sql);

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
			<th scope="col">Id</th>
			<th scope="col">First</th>
			<th scope="col">Last</th>
			<th scope="col"> Reg_No </th>
			<th scope="col">Hometown</th>
			<th scope="col">Department</th>
			<th scope="col"> Phone_no</th>

			<th scope="col" class="text-center">Action</th>
		</tr>
	</thead>
	<tbody>
	<?php
	
if ($users->num_rows > 0) {
	while($user = $users->fetch_assoc()) {
	?>
		<tr>
			<th scope="row"><?php echo $user['Id']?> </th>
			<td><?php echo $user['Firstname']?> </td>
			<td> <?php echo $user['Lastname']?></td>
			<td> <?php echo $user['Reg_No']?></td>
			<td> <?php echo $user['Hometown']?></td>
			<td> <?php echo $user['Department']?></td>
			<td> <?php echo $user['Phone_no']?></td>


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

			<button   onclick="if(confirm('are you sure to delete  <?php echo $user['firstname']?> ?')){
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
	</tr>
		<?php }} ?>

</tbody>
</table>

</div>


<!--

 <!doctype html>

<div class="container">
	 @if (session('successMsg'))
	<div class="alert alert-dismissible alert-success">
		<button type="button" class="close" data-dismiss="alert">×</button>
		<strong>Well done!</strong> {{ session('successMsg') }}
	</div>
	@endif 

<table class="table table-striped table-hover table-bordered ">
	<thead>
		<tr>
			<th scope="col">Id</th>
			<th scope="col">First</th>
			<th scope="col">Last</th>
			<th scope="col" class="text-center">Action</th>
		</tr>
	</thead>
	<tbody>
		@foreach($students as $student)
		<tr>
			<th scope="row">{{$student->id}} </th>
			<td>{{ $student->first_name}} </td>
			<td> {{$student->last_name}} </td>
			<td class="text-center"> <a href="{{ route('edit',  $student->id )}} " class="btn btn-primary btn-raised btn-sm">
				<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
			</a>

			<form method="POST"  action ="{{ route('destroy',  $student->id )}} "  id="delete-form-{{ $student->id }}"   style="display:none; " >

			</form>




			<button   onclick="if(confirm('are you sure to delete this')){
				document.getElementById('delete-form-{{ $student->id }}').submit();

			}
			else{
				event.preventDefault();

			}

			" class="btn btn-danger btn-sm btn-raised" >
				<i class="fa fa-trash" aria-hidden="true">
				
				</i>
			</button>
		</td>
	</tr>
	@endforeach
</tbody>
</table>
{{$students->links()}} 

</div>
@endsection

-->