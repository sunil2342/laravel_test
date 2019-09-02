@extends('layouts.auth')
@section('content')
<div class="wrapper wrapper-login">
		<div class="container container-login animated fadeIn">
			<h4 class="text-center"><strong>{{ trans('auth.register_create_account') }}</strong></h3>
			@include ('partials.errors')
			<form action="{{route('register')}}" method="post">
              {{ csrf_field() }}
			<div class="login-form">
				<div class="form-group form-floating-label">
					<input value="{{ old('first_name') }}" id="first_name" name="first_name" type="text" class="form-control input-border-bottom" required>
					<label for="first_name" class="placeholder">{{ trans('auth.register_firstname') }}</label>
				</div>
				<div class="form-group form-floating-label">
					<input value="{{ old('middle_name') }}" id="middle_name" name="middle_name" type="text" class="form-control input-border-bottom" required>
					<label for="middle_name" class="placeholder">{{ trans('auth.register_middlename') }}</label>
				</div>
				<div class="form-group form-floating-label">
					<input value="{{ old('last_name') }}"  id="last_name" name="last_name" type="text" class="form-control input-border-bottom" required>
					<label for="last_name" class="placeholder">{{ trans('auth.register_lastname') }}</label>
				</div>
				<div class="form-group form-floating-label">
					<input value="{{ old('email') }}"  id="email" name="email" type="email" class="form-control input-border-bottom" required>
					<label for="email" class="placeholder">{{ trans('auth.register_email') }}</label>
				</div>
				<div class="form-group form-floating-label">
					<input  id="password" name="password" type="password" class="form-control input-border-bottom" required>
					<label for="password" class="placeholder">{{ trans('auth.register_password') }}</label>
					<div class="show-password">
						<i class="flaticon-interface"></i>
					</div>
				</div>
				<div class="form-group form-floating-label">
					<input  id="password_confirmation" name="password_confirmation" type="password" class="form-control input-border-bottom" required>
					<label for="password_confirmation" class="placeholder">{{ trans('auth.register_password_confirmation') }}</label>
					<div class="show-password">
						<i class="flaticon-interface"></i>
					</div>
				</div>
				<div class="row form-sub m-0">
					<div class="custom-control custom-checkbox">
						<input type="checkbox" class="custom-control-input" name="agree" id="agree">
						<label class="custom-control-label" for="agree">{{ trans('auth.register_terms_conditions') }}</label>
					</div>
				</div>
				<div class="form-action">
					<a href="{{route('login')}}"  class="btn btn-danger btn-rounded btn-login mr-3">{{ trans('auth.login') }}</a>
					<button type="submit" class="btn btn-primary btn-rounded btn-login">{{ trans('auth.register_action') }}</button>
				</div>
			</div>
		</form>	
		</div>
	</div>
@endsection
