@extends('admin.layout')

@section('content')	
<div class="form login">
	<div class="heading"><i class="fa fa-lock"></i> Login</div>
	<form id="login">
		{{ csrf_field() }}
		<fieldset>
			<div class="field-group">
				<input class="form-control required" type="text" name="username" id="username" autocomplete="off" data-field-type="text" data-field-name="Username">
				<span class="bar"></span>
				<label for="username">Username</label>
			</div>
		</fieldset>
		<fieldset>
			<div class="field-group">
				<input class="form-control required" type="password" name="password" id="password" autocomplete="off" data-field-type="text" data-field-name="Password">
				<span class="bar"></span>
				<label for="password">Password</label>
			</div>
		</fieldset>
		<fieldset>
			<div class="field-group">
				<a class="button element-block btn-login">
					Login						
				</a>					
			</div>
		</fieldset>
	</form>
</div>
@endsection

@section('script')
<script type="text/javascript" src="{{ asset('admin/js/authentication.js') }}"></script>
@endsection