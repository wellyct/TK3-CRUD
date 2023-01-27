@extends('layouts.main')

@section('content')

<div class="card">
	<div class="card-header">
		<div class="row">
			<div class="col col-md-6"><b>Staff Details</b></div>
			<div class="col col-md-6">
				<a href="{{ route('staffs.index') }}" class="btn btn-primary btn-sm float-end">View All</a>
			</div>
		</div>
	</div>
	<div class="card-body">
		<div class="row mb-3">
			<label class="col-sm-2 col-label-form"><b>Staff Name</b></label>
			<div class="col-sm-10">
				{{ $staff->staff_name }}
			</div>
		</div>
		<div class="row mb-3">
			<label class="col-sm-2 col-label-form"><b>Staff Username</b></label>
			<div class="col-sm-10">
				{{ $staff->staff_username }}
			</div>
		</div>
		<div class="row mb-3">
			<label class="col-sm-2 col-label-form"><b>Staff Password</b></label>
			<div class="col-sm-10">
				{{ $staff->staff_password }}
			</div>
		</div>

		<div class="row mb-3">
			<label class="col-sm-2 col-label-form"><b>Staff Gender</b></label>
			<div class="col-sm-10">
				{{ $staff->staff_gender }}
			</div>
		</div>
     

		<div class="text-center">
			<a href="{{ route('staffs.index') }}" class="btn btn-info">Back</a>
		</div>

	</div>
</div>

@endsection('content')