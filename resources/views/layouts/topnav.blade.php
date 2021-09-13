<!-- TOP NAV BAR -->
<nav class="top-bar navbar-fixed-top" role="navigation">
		<div class="logo-area">
				<a href="#" id="btn-nav-sidebar-minified" class="btn btn-link btn-nav-sidebar-minified pull-left"><i class="icon ion-arrow-swap"></i></a>
				<a class="btn btn-link btn-off-canvas pull-left"><i class="icon ion-navicon"></i></a>
				<div class="logo pull-left">
						<a href="{{ url('/home') }}">
								<img src="assets/img/dashboard-logo.png" alt="Logo" />
						</a>
				</div>
		</div>
		<div class="top-bar-right pull-right">
				<div class="action-group hidden-xs hidden-sm">
						<ul>
								<!-- skins -->
								<li class="action-item skins">
										<form id="style-switcher">
												<div class="btn-group open">
														<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
																<i class="icon ion-ios-gear-outline"></i>
														</a>
														<div class="arrow"></div>
														<ul class="dropdown-menu" role="menu">
																<li>
																		<p><strong>Dark Side Nav</strong></p>
																		<button type="button" class="btn-skin nav-dark full-dark" data-skin="assets/css/skins/full-dark.css"></button>
																		<button type="button" class="btn-skin nav-dark green" data-skin="assets/css/skins/green.css"></button>
																		<button type="button" class="btn-skin nav-dark blue" data-skin="assets/css/skins/blue.css"></button>
																		<button type="button" class="btn-skin nav-dark darkorange" data-skin="assets/css/skins/darkorange.css"></button>
																		<button type="button" class="btn-skin nav-dark seagreen" data-skin="assets/css/skins/seagreen.css"></button>
																</li>
																<li>
																		<p><strong>Light Side Nav</strong></p>
																		<button type="button" class="btn-skin nav-light full-white" data-skin="assets/css/skins/full-white.css"></button>
																		<button type="button" class="btn-skin nav-light green green-light-nav" data-skin="assets/css/skins/green-light-nav.css"></button>
																		<button type="button" class="btn-skin nav-light blue blue-light-nav" data-skin="assets/css/skins/blue-light-nav.css"></button>
																		<button type="button" class="btn-skin nav-light darkorange darkorange-light-nav" data-skin="assets/css/skins/darkorange-light-nav.css"></button>
																		<button type="button" class="btn-skin nav-light seagreen seagreen-light-nav" data-skin="assets/css/skins/seagreen-light-nav.css"></button>
																</li>
																<li>
																		<label class="fancy-checkbox">
																				<input type="checkbox" id="fixed-top-nav" checked="checked"><span>Fixed Top Navigation</span></label>
																</li>
																<li data-toggle="popover" data-placement="top" data-container="body" data-content="If checked, try expanding <strong>Pages</strong> menu item on left sidebar. Disabled on minified sidebar."
																	data-trigger="hover">
																		<label class="fancy-checkbox">
																				<input type="checkbox" id="fixed-left-nav"><span>Fixed Left Navigation</span></label>
																</li>
																<li class="menu-item-footer"><a href="#" title="Reset Style" class="reset-style">Reset Style</a></li>
														</ul>
												</div>
										</form>
								</li>
								<!-- end skins -->
						</ul>
				</div>
				@guest
				@if (Route::has('login'))
				<li class="nav-item">
						<a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
				</li>
				@endif

				@if (Route::has('register'))
				<li class="nav-item">
						<a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
				</li>
				@endif
				@else
				<div class="logged-user">
						<div class="btn-group">

								<a href="#" class="btn btn-link dropdown-toggle" data-toggle="dropdown">
										<img class="rounded-circle w-10" src="{{ Auth::user()->profile->profileImage() }}" alt="{{ Auth::user()->username }}" /><span class="name">{{ Auth::user()->username }} <!-- <i class="icon ion-ios-arrow-down"></i> --></span>
								</a>
								<ul class="dropdown-menu" role="menu">

										<li>
												<a href="/profile/{{ Auth::user()->id }}/edit">
														<i class="icon ion-ios-person"></i>
														<span class="text">Profile</span>
												</a>
										</li>
										<li>
												<a href="{{ route('logout') }}" onclick="event.preventDefault();
																	 document.getElementById('logout-form').submit();">
														<i class="icon ion-power"></i>
														<span class="text">{{ __('Logout') }}</span>
												</a>
												<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
														@csrf
												</form>
										</li>

								</ul>
						</div>
				</div>
				@endguest
		</div>
</nav>
<!-- END TOP NAV BAR -->
