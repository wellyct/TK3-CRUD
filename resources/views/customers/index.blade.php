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
			<div class="col col-md-6"><b>Customer Data</b></div>
			<div class="col col-md-6">
				<a href="{{ route('customers.create') }}" class="btn btn-success btn-sm float-end">Add</a>
			</div>
		</div>
	</div>
	<div class="card-body">
		<table class="table table-bordered">
			<tr>
				<th>Name</th>
				<th>Username</th>
				<th>Password</th>
				<th>TTL	</th>
				<th>Gender</th>
				<th>Address</th>
				<th>ID Card</th>
				<th>Action</th>
            </tr>
			@if(count($data) > 0)

				@foreach($data as $row)

					<tr>
						<td>{{ $row->cust_name }}</td>
						<td>{{ $row->cust_username }}</td>
						<td>{{ $row->cust_password }}</td>
						<td>{{ $row->cust_bod }}</td>
						<td>{{ $row->cust_gender }}</td>
						<td>{{ $row->cust_address }}</td>
						<td><img src="{{ asset('img/customer/' . $row->cust_idcard) }}" width="75" class="img-thumbnail rounded" /></td>
						<td>
							<form method="post" action="{{ route('customers.destroy', $row->id) }}">
								@csrf
								@method('DELETE')
								<a href="{{ route('customers.show', $row->id) }}" class="btn btn-primary btn-sm">View</a>
								<a href="{{ route('customers.edit', $row->id) }}" class="btn btn-warning btn-sm">Edit</a>
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
<!-- </div> -->

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
