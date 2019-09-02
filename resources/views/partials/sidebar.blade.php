		<!-- Sidebar -->
		<div class="sidebar">
			<div class="sidebar-background"></div>
			<div class="sidebar-wrapper scrollbar-inner">
				<div class="sidebar-content">
					<div class="user">
						<div class="avatar-sm float-left mr-2">
							<img src="{{asset('assets/img/logoproduct.svg')}}" alt="..." class="avatar-img rounded-circle">
						</div>
						<div class="info">
							<a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
								<span>
									<span class="user-level">{{auth()->user()->first_name}}</span>
									<span class="caret"></span>
								</span>
							</a>
							<div class="clearfix"></div>

							<div class="collapse in" id="collapseExample">
								<ul class="nav">
									<li>
										<a href="javascript:;">
											<span class="link-collapse">{{ trans('app.my_profile') }}</span>
										</a>
									</li>
									<li>
										<a href="javascript:;">
											<span class="link-collapse">{{ trans('app.edit_profile') }}</span>
										</a>
									</li>
									<li>
										<a href="javascript:;">
											<span class="link-collapse">{{ trans('app.settings') }}</span>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<ul class="nav">
						<li class="nav-item active">
							<a href="{{url('/')}}">
								<i class="fas fa-home"></i>
								<p>{{ trans('app.dashboard') }}</p>
							</a>
						</li>
						<li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
						</li>
						<li class="nav-item">
							<a  href="{{route('posts.index')}}">
								<i class="fas fa-layer-group"></i>
								<p>{{ trans('app.posts') }}</p>
							</a>
						</li>
						<li class="nav-item">
							<a data-toggle="collapse" href="javascript:;">
								<i class="fas fa-layer-group"></i>
								<p>{{ trans('app.contacts') }}</p>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- End Sidebar -->