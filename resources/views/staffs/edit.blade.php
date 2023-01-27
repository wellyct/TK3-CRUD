@extends('layouts.main')

@section('content')

<div class="card">
	<div class="card-header">Edit Data Staff</div>
	<div class="card-body">
		<form method="post" action="{{ route('staffs.update', $staff->id) }}" enctype="multipart/form-data">
			@csrf
			@method('PUT')
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Staff Name</label>
				<div class="col-sm-10">
					<input type="text" name="staff_name" class="form-control" value="{{ $staff->staff_name }}" />
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Staff Username</label>
				<div class="col-sm-10">
					<input type="text" name="staff_username" class="form-control" value="{{ $staff->staff_username  }}" />
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Staff Password</label>
				<div class="col-sm-10">
					<input type="text" name="staff_password" class="form-control" value="{{ $staff->staff_password }}" />
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
			
			<div class="text-center">
				<input type="hidden" name="hidden_id" value="{{ $staff->id }}" />
				<input type="submit" class="btn btn-primary" value="Edit" />
                <a href="{{ route('staffs.index') }}" class="btn btn-warning">Cancel</a>
			</div>	

		</form>
	</div>
</div>

<script>
    document.getElementsByName('staff_gender')[0].value = "{{ $staff->staff_gender }}";
</script>

@endsection('content')
