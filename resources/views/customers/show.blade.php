@extends('layouts.main')

@section('content')

<div class="card">
	<div class="card-header">
		<div class="row">
			<div class="col col-md-6"><b>Customer Details</b></div>
			<div class="col col-md-6">
				<a href="{{ route('customers.index') }}" class="btn btn-primary btn-sm float-end">View All</a>
			</div>
		</div>
	</div>
	<div class="card-body">
		<div class="row mb-3">
			<label class="col-sm-2 col-label-form"><b>Customer Name</b></label>
			<div class="col-sm-10">
				{{ $customer->cust_name }}
			</div>
		</div>
		<div class="row mb-3">
			<label class="col-sm-2 col-label-form"><b>Customer Username</b></label>
			<div class="col-sm-10">
				{{ $customer->cust_username }}
			</div>
		</div>
		<div class="row mb-3">
			<label class="col-sm-2 col-label-form"><b>Customer Password</b></label>
			<div class="col-sm-10">
				{{ $customer->cust_password }}
			</div>
		</div>
		<div class="row mb-3">
			<label class="col-sm-2 col-label-form"><b>Place & Birth of Date</b></label>
			<div class="col-sm-10">
				{{ $customer->cust_bod }}
			</div>
		</div>
		<div class="row mb-3">
			<label class="col-sm-2 col-label-form"><b>Gender</b></label>
			<div class="col-sm-10">
				{{ $customer->cust_gender }}
			</div>
		</div>
		<div class="row mb-3">
			<label class="col-sm-2 col-label-form"><b>Address</b></label>
			<div class="col-sm-10">
				{{ $customer->cust_address}}
			</div>
		</div>
        
		<div class="row mb-4">
			<label class="col-sm-2 col-label-form"><b>ID Card</b></label>
			<div class="col-sm-10">
				<img src="{{ asset('img/customer/' .  $customer->cust_idcard) }}" width="200" class="img-thumbnail" />
			</div>
		</div>
		<div class="text-center">
			<a href="{{ route('customers.index') }}" class="btn btn-info">Back</a>
		</div>

	</div>
</div>

@endsection('content')