
@extends('layouts.main')

@section('content')

@if($errors->any())

<div class="alert alert-danger">
	<ul>
	@foreach($errors->all() as $error)

		<li>{{ $error }}</li>

	@endforeach
	</ul>
</div>

@endif
<div class="container">
<div class="card">
	<div class="card-header">Add Data Customer</div>
	<div class="card-body">
		<form method="post" action="{{ route('customers.store') }}" enctype="multipart/form-data">
			@csrf
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Customer Name</label>
				<div class="col-sm-10">
					<input type="text" name="cust_name" class="form-control" autofocus required value="{{ old('cust_name') }}" />
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Customer Username</label>
				<div class="col-sm-10">
					<input type="text" name="cust_username" class="form-control" required value="{{ old('cust_username') }}" />
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Customer Password</label>
				<div class="col-sm-10">
					<input type="password" name="cust_password" class="form-control" required value="{{ old('cust_password') }}" />
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Place & Birth of Date</label>
				<div class="col-sm-10">
					<input type="text" name="cust_bod" class="form-control" required value="{{ old('cust_bod') }}" />
				</div>
			</div>
            <div class="row mb-3">
				<label class="col-sm-2 col-label-form">Customer Gender</label>
				<div class="col-sm-10">
					<select name="cust_gender" class="form-control">
						<option value="Male">Male</option>
						<option value="Female">Female</option>
					</select>
				</div>
			</div>

			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Address</label>
				<div class="col-sm-10">
                    <textarea class="form-control" rows="3" name="cust_address" required value="{{ old('cust_address') }}"></textarea>
				</div>
			</div>
	
			<div class="row mb-4">
				<label class="col-sm-2 col-label-form">ID Card</label>
				<div class="col-sm-10">
					<input type="file" name="cust_idcard" />
				</div>
			</div>

			<div class="btn-group text-center" role="group">
				<input type="submit" class="btn btn-primary" value="Add" />
				<a href="/customers" class="btn btn-warning"> Cancel </a>
			</div>

			<div class="text-center">
			</div>	
		</form>
	</div>
</div>
</div>
@endsection('content')