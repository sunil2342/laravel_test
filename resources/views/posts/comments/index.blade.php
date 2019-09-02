@extends('layouts.skeleton')
@section('content')
<div class="main-panel">
			<div class="content">
			@if(session()->get('error'))
					<div class="col-lg-12">
					<div class="alert alert-danger">
					{{session()->get('error')}}
					</div></div>
					@endif
				<div class="page-inner">
					<div class="page-header">
						<h4 class="page-title">{{ trans('comment.comments') }}</h4>
					</div>
			</div>
		</div>
@endsection
