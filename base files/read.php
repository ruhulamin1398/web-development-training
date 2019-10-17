<!doctype html>

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
<!-- {{$students->links()}} -->

</div>
@endsection