@extends('layouts.skeleton')
@section('content')
<div class="main-panel">
			<div class="content">
			@include ('partials.errors')
			@if(session()->get('success'))
					<div class="col-lg-12">
					<div class="alert alert-success">
					{{session()->get('success')}}
					</div></div>
					@endif
				<div class="page-inner">
					<div class="page-header">
						<h4 class="page-title">{{ trans('post.posts') }}</h4>
					</div>
					<div class="row">
						<div class="col-md-12">
						<form class="" action="{{route('posts.store')}}" method="post">
                           {{ csrf_field() }}
							<div class="card">
								<div class="card-body">
									<div class="form-group">
										<label for="title">{{trans('post.post_title')}}</label>
										<input type="text" name="title"  class="form-control" id="title" placeholder="{{trans('post.title_placeholder')}}">
									</div>
									<div class="form-group">
										<label for="comment">{{trans('post.post_description')}}</label>
										<textarea class="form-control" name="description" id="description" rows="5">

										</textarea>
									</div>

								</div>
								<div class="card-action">
									<button class="btn btn-success">Submit</button>
									<button class="btn btn-danger">Cancel</button>
								</div>
							</div>
							</div>
						</div>
						
					</div>
			</div>
		</div>
@endsection
