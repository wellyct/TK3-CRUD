@extends('layouts.main')

@section('content')

<div class="card">
	<div class="card-header">Edit Data Customer</div>
	<div class="card-body">
		<form method="post" action="{{ route('customers.update', $customer->id) }}" enctype="multipart/form-data">
			@csrf
			@method('PUT')
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Customer Name</label>
				<div class="col-sm-10">
					<input type="text" name="cust_name" class="form-control" value="{{ $customer->cust_name }}" />
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Customer Username</label>
				<div class="col-sm-10">
					<input type="text" name="cust_username" class="form-control" value="{{ $customer->cust_username  }}" />
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Customer Password</label>
				<div class="col-sm-10">
					<input type="text" name="cust_password" class="form-control" value="{{ $customer->cust_password }}" />
				</div>
			</div>

			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Place & Birth of Date</label>
				<div class="col-sm-10">
					<input type="text" name="cust_bod" class="form-control" value="{{ $customer->cust_bod }}" />
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
                    <textarea class="form-control" rows="3" name="cust_address" value="{{ $customer->cust_address }}"></textarea>
				</div>
			</div>

			<div class="row mb-4">
				<label class="col-sm-2 col-label-form">ID Card Image</label>
				<div class="col-sm-10">
					<input type="file" name="cust_idcard" />
					<br />
					<img src="{{ asset('img/customer/' . $customer->cust_idcard) }}" width="100" class="img-thumbnail" />
					<input type="hidden" name="hidden_customer_image" value="{{ $customer->cust_idcard }}" />
				</div>
			</div>

			<div class="text-center">
				<input type="hidden" name="hidden_id" value="{{ $customer->id }}" />
				<input type="submit" class="btn btn-primary" value="Edit" />
                <a href="{{ route('customers.index') }}" class="btn btn-warning">Cancel</a>
			</div>	

		</form>
	</div>
</div>

<script>
    document.getElementsByName('cust_gender')[0].value = "{{ $customer->cust_gender }}";
</script>

@endsection('content')
