@extends('layouts.auth')
@section('content')
<div class="wrapper wrapper-login">
		<div class="container container-login animated fadeIn">
			<h3 class="text-center">{{ trans('auth.password_reset_title') }}</h3>
			@include ('partials.errors')
            @if (session('status'))
                      <div class="alert alert-success">
                          {{ session('status') }}
                      </div>
                  @endif
			<form class="" action="{{url('password/email')}}" method="post">
              {{ csrf_field() }}
			<div class="login-form">
				<div class="form-group form-floating-label">
					<input id="email" name="email" type="text" class="form-control input-border-bottom" required>
					<label for="email" class="placeholder">{{ trans('auth.password_reset_email') }}</label>
				</div> 
				<div class="form-action mb-3">
				 <button type="submit" class="btn btn-primary btn-rounded">{{ trans('auth.password_reset_send_link') }}</button>
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
