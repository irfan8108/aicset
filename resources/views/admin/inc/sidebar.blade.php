sidebar wrapper -->
	<div class="sidebar-wrapper" data-simplebar="true">
		<div class="sidebar-header">
			<div>
				AICSET
				{{-- <img src="{{ asset('/img/logo2.png') }}" alt="logo icon"> --}}
			</div>
			<div>
				{{-- <h4 class="logo-text">Crypto</h4> --}}
			</div>
			<div class="toggle-icon ms-auto"><i class='bx bx-first-page'></i>
			</div>
		</div>
		<!--navigation-->
		<ul class="metismenu" id="menu">
			<li>
				<a href="{{ route('admin_dashboard') }}">
					<div class="parent-icon"><i class='bx bx-home'></i>
					</div>
					<div class="menu-title">Dashboard</div>
				</a>
			</li>

			{{-- <li>
				<a href="#">
					<div class="parent-icon"><i class="bx bx-wallet font-30"></i>
					</div>
					<div class="menu-title">Add Money</div>
				</a>
			</li> --}}
			{{-- <li>
				<a href="{{ route('admin.invoice') }}">
					<div class="parent-icon"><i class='bx bx-edit'></i>
					</div>
					<div class="menu-title">Generate Invoice</div>
				</a>
			</li> --}}

			{{-- <li>
				<a href="javascript:;" class="has-arrow">
					<div class="parent-icon"><i class="bx bxs-group"></i>
					</div>
					<div class="menu-title">Users</div>
				</a>
				<ul>
					<li> <a href="{{ route('users.create') }}"><i class="bx bx-right-arrow-alt"></i>Add User</a>
					</li>
					<li> <a href="{{ route('users.index') }}"><i class="bx bx-right-arrow-alt"></i>All Users</a>
					</li>
				</ul>
			</li> --}}

			{{-- <li class="menu-label">Items</li>
			<li>
				<a href="#">
					<div class="parent-icon"><i class='bx bx-briefcase-alt-2'></i>
					</div>
					<div class="menu-title">Add Stock</div>
				</a>
			</li> --}}
			<li>
				<a href="javascript:;" class="has-arrow">
					<div class="parent-icon"><i class='bx bx-grid-alt' ></i>
					</div>
					<div class="menu-title">Links</div>
				</a>
				<ul>
					<li> <a href="{{ route('link.create') }}"><i class="bx bx-right-arrow-alt"></i>Add Link</a>
					</li>
					<li> <a href="{{ route('link.index') }}"><i class="bx bx-right-arrow-alt"></i>All Links</a>
					</li>
				</ul>
			</li>
			<li>
				<a href="javascript:;" class="has-arrow">
					<div class="parent-icon"><i class='bx bx-book' ></i>
					</div>
					<div class="menu-title">Pages</div>
				</a>
				<ul>
					<li> <a href="{{ route('page.create') }}"><i class="bx bx-right-arrow-alt"></i>New Page</a>
					</li>
					<li> <a href="{{ route('page.index') }}"><i class="bx bx-right-arrow-alt"></i>All Pages</a>
					</li>
				</ul>
			</li>
			<li>
				<a href="javascript:;" class="has-arrow">
					<div class="parent-icon"><i class='bx bx-pen' ></i>
					</div>
					<div class="menu-title">News</div>
				</a>
				<ul>
					<li> <a href="{{ route('news.create') }}"><i class="bx bx-right-arrow-alt"></i>Add News</a>
					</li>
					<li> <a href="{{ route('news.index') }}"><i class="bx bx-right-arrow-alt"></i>All News</a>
					</li>
				</ul>
			</li>
			{{-- <li>
				<a href="{{ route('admin.orders') }}">
					<div class="parent-icon"><i class="bx bx-cart-alt"></i>
					</div>
					<div class="menu-title">Orders</div>
				</a>
			</li>
			<li>
				<a href="{{ route('admin.payments') }}">
					<div class="parent-icon"><i class="fadeIn animated bx bx-credit-card-front"></i>
					</div>
					<div class="menu-title">Payments</div>
				</a>
			</li>
			<li>
				<a href="{{ route('admin.order_details') }}">
					<div class="parent-icon"><i class="bx bx-right-arrow-alt"></i>
					</div>
					<div class="menu-title">Order Details</div>
				</a>
			</li> --}}
			<li class="menu-label">Others</li>
			<li>
				<a href="#" target="_blank">
					<div class="parent-icon"><i class='bx bx-headphone' ></i>
					</div>
					<div class="menu-title">Support</div>
				</a>
			</li>
		</ul>
		<!--end navigation-->
	</div>
<!--end sidebar wrapper 