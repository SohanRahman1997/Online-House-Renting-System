		<!-- Start Navbar -->

		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container">
              <a class="navbar-brand" href="{{url('/')}}">Online House Renting System</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"  aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
              </button>

       <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">

               <li class="nav-item active">
                   <a class="nav-link" href="{{url('home')}}">Home<span class="sr-only">(current)</span></a>
               </li>
            </ul>

						<ul class="navbar-nav mr-auto">
               <li class="nav-item active">
                   <a class="nav-link" href="{{url('post')}}">Watch Post<span class="sr-only">(current)</span></a>
               </li>
            </ul>

						<ul class="navbar-nav mr-auto">
               <li class="nav-item active">
                   <a class="nav-link" href="{{url('#')}}">Payment<span class="sr-only">(current)</span></a>
               </li>

            </ul>

						<ul class="navbar-nav mr-auto">
               <li class="nav-item active">
                   <a class="nav-link" href="{{url('review')}}">Review<span class="sr-only">(current)</span></a>
               </li>

            </ul>

						<ul class="navbar-nav mr-auto">
               <li class="nav-item active">
                   <a class="nav-link" href="{{url('about')}}">About Us<span class="sr-only">(current)</span></a>
               </li>

            </ul>


						<ul class="navbar-nav ml-auto">
							@if (Auth::guest())
									<li class="nav-item active">
										<a class="nav-link" href="{{ route('login') }}">Login</a>
									</li>

									<li class="nav-item active">
										<a class="nav-link" href="{{ route('register') }}">Register</a>
									</li>
							@else
									<li class="dropdown">
											<a class="nav-link" href="{{url('/')}}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
													{{ Auth::user()->username }} <span class="caret"></span>
											</a>

											<ul class="dropdown-menu" role="menu">
													<li>
															<a href="{{ route('logout') }}"
																	onclick="event.preventDefault();
																					 document.getElementById('logout-form').submit();">
																	Logout
															</a>

															<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
																	{{ csrf_field() }}
															</form>
													</li>
											</ul>
									</li>
							@endif
						</ul>


  </div>
</div>
</nav>

<!-- End Navbar -->
