@extends('layouts.auth')
@section('content')
<div class="wrapper wrapper-login">
		<div class="container container-login animated fadeIn">
			<h3 class="text-center">{{ trans('auth.login_to_account') }}</h3>
			@include ('partials.errors')
			<form class="" action="{{route('login')}}" method="post">
              {{ csrf_field() }}
			<div class="login-form">
				<div class="form-group form-floating-label">
					<input value="{{ old('email') }}" id="email" name="email" type="text" class="form-control input-border-bottom" required>
					<label for="email" class="placeholder">{{ trans('auth.email') }}</label>
				</div> 
				<div class="form-group form-floating-label">
					<input id="password" name="password" type="password" class="form-control input-border-bottom" required>
					<label for="password" class="placeholder">{{ trans('auth.password') }}</label>
					<div class="show-password">
						<i class="flaticon-interface"></i>
					</div>
				</div>
				<div class="row form-sub m-0">
					<div class="custom-control custom-checkbox">
						<input type="checkbox" class="custom-control-input" id="rememberme">
						<label class="custom-control-label" for="rememberme">{{ trans('auth.button_remember') }}</label>
					</div>
					<a href="{{url('password/reset')}}" class="link float-right">{{ trans('auth.password_forget') }}</a>
				</div>
				<div class="form-action mb-3">
				 <button type="submit" class="btn btn-primary btn-rounded btn-login">{{ trans('auth.login') }}</button>
				</div>
				<div class="login-account">
					<span class="msg">{{ trans('auth.signup_no_account') }}</span>
					<a href="{{route('register')}}"  class="link">{{ trans('auth.signup') }}</a>
				</div>
			</form>
			</div>
		</div>
	</div>
@endsection
