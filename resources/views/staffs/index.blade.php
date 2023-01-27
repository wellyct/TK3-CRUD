@extends('layouts.main')

@section('content')

@if($message = Session::get('success'))
<div class="alert alert-success">
	{{ $message }}
</div>
@endif

<div class="container">
<div class="card">
	<div class="card-header">
		<div class="row">
			<div class="col col-md-6"><b>Staff Data</b></div>
			<div class="col col-md-6">
				<a href="{{ route('staffs.create') }}" class="btn btn-success btn-sm float-end">Add</a>
			</div>
		</div>
	</div>
	<div class="card-body">
		<table class="table table-bordered">
			<tr>
				<th>Staff Name</th>
				<th>Staff Username</th>
				<th>Staff Password</th>
				<th>Staff Gender</th>
				<th>Action</th>
            </tr>
			@if(count($data) > 0)

				@foreach($data as $row)

					<tr>
						<td>{{ $row->staff_name }}</td>
						<td>{{ $row->staff_username }}</td>
						<td>{{ $row->staff_password }}</td>
						<td>{{ $row->staff_gender }}</td>
						<td>
							<form method="post" action="{{ route('staffs.destroy', $row->id) }}">
								@csrf
								@method('DELETE')
								<a href="{{ route('staffs.show', $row->id) }}" class="btn btn-primary btn-sm">View</a>
								<a href="{{ route('staffs.edit', $row->id) }}" class="btn btn-warning btn-sm">Edit</a>
								<input type="submit" class="btn btn-danger btn-sm" value="Delete" />
							</form>
							
						</td>
					</tr>

				@endforeach

			@else
				<tr>
					<td colspan="5" class="text-center">No Data Found</td>
				</tr>
			@endif
		</table>
		{!! $data->links() !!}
	</div>
</div>	
</div>

@endsection
