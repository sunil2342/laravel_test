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
						<h4 class="page-title">{{ trans('post.posts') }} <a href="{{route('posts.create')}}"><i class="fa fa-plus" aria-hidden="true"></i></a></h4>
					</div>
                    <div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-body">
                                <?php $i = 1; ?>
                                    @if(count($posts)>0)
									<table class="table table-striped mt-3">
										<thead>
											<tr>
												<th scope="col">#</th>
												<th scope="col">{{trans('post.title')}}</th>
												<th scope="col">{{trans('post.description')}}</th>
											</tr>
										</thead>
										<tbody>
                                            @foreach($posts as $post)
											<tr>
												<td>{{$i}}</td>
												<td>{{$post->title}}</td>
												<td>{!!$post->description!!}</td>
											</tr>
                                            <?php $i++; ?>
                                            @endforeach
										</tbody>
									</table>
									{{ $posts->links() }}
                                    @else
                                    <p class="text-center">{{trans('app.no_data_to_show')}}</p>
                                    @endif		
								</div>
							</div>
						</div>
                        </div>
				</div>
			</div>
		</div>
@endsection
