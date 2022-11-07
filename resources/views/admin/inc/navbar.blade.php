		<div class="authentication-header"></div>
		<header class="login-header shadow">
			<nav class="navbar navbar-expand-lg navbar-light bg-white rounded fixed-top rounded-0 shadow-sm">
				<div class="container-fluid">
					<a class="navbar-brand nav-img" href="{{ route('home') }}">
						{{-- <img src="{{ asset('admin/assets/images/logo-img.png') }}" width="140" alt="" /> --}}
						<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/81/National_emblem_of_Bangladesh.svg/1200px-National_emblem_of_Bangladesh.svg.png" width="110px">
					</a>
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent1">
						<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
							<li class="nav-item"> <a class="nav-link active" aria-current="page" href="#"><i class='bx bx-home-alt me-1'></i>Home</a>
							</li>
							<li class="nav-item"> <a class="nav-link" href="#"><i class='bx bx-user me-1'></i>About</a>
							</li>
							<li class="nav-item"> <a class="nav-link" href="#"><i class='bx bx-category-alt me-1'></i>Features</a>
							</li>
							<li class="nav-item"> <a class="nav-link" href="#"><i class='bx bx-microphone me-1'></i>Contact</a>
							<li class="nav-item"> <a class="nav-link" href="{{ route('logout') }}"><i class='bx bx-microphone me-1'></i>logout</a>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</header>

{{-- @push('styles') --}}
	<style type="text/css">
		.nav-img img{
			position: absolute;
			top: 12px;
			left: 12px;
			width: 80px;
		}
		@media (max-width: 800px){
			.nav-img img{
				display: none;
			}
		}
		.authentication-header {
		    position: absolute;
		    /*background: #8833ff;*/
		    background-color: #FFF;
		    height: 100%;
		    z-index: -2;
		}
	</style>
{{-- @endpush --}}