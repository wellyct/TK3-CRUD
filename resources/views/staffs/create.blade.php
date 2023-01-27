
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
	<div class="card-header">Add Data Staff</div>
	<div class="card-body">
		<form method="post" action="{{ route('staffs.store') }}" enctype="multipart/form-data">
			@csrf
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Staff Name</label>
				<div class="col-sm-10">
					<input type="text" name="staff_name" class="form-control" autofocus required value="{{ old('staff_name') }}" />
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Staff Username</label>
				<div class="col-sm-10">
					<input type="text" name="staff_username" class="form-control" required value="{{ old('staff_username') }}" />
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Staff Password</label>
				<div class="col-sm-10">
					<input type="password" name="staff_password" class="form-control" required value="{{ old('staff_password') }}" />
				</div>
			</div>
			<div class="row mb-3">
                <label class="col-sm-2 col-label-form">Staff Gender</label>
				<div class="col-sm-10">
					<select name="staff_gender" class="form-control">
						<option value="Male">Male</option>
						<option value="Female">Female</option>
					</select>
				</div>
			</div>

			<div class="btn-group text-center" role="group">
				<input type="submit" class="btn btn-primary" value="Add" />
				<a href="/staffs" class="btn btn-warning"> Cancel </a>
			</div>

			<div class="text-center">
			</div>	
		</form>
	</div>
</div>
</div>
@endsection('content')