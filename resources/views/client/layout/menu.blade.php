<header id="header" class="header-effect-shrink"
			data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyChangeLogo': true, 'stickyStartAt': 120, 'stickyHeaderContainerHeight': 85}">
			<div class="header-body border-top-0">
				<div class="header-top header-top-default header-top-borders border-bottom-0">
					<div class="container">
						<div class="header-row">
							<div class="header-column justify-content-between">
								<div class="header-row">
									<nav class="header-nav-top w-100 w-md-50pct w-xl-100pct">
										<ul class="nav nav-pills d-inline-flex custom-header-top-nav-background pe-5">
											<li class="nav-item py-2 d-inline-flex z-index-1">
												<span class="d-flex align-items-center p-0">
													<span>
														<img width="25"
															src="{{ asset('business/img/demos/business-consulting-3/icons/phone.svg') }}"
															alt="Phone Icon" data-icon
															data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-light'}" />
													</span>
													<a class="text-color-light text-decoration-none font-weight-semibold text-3-5 ms-2"
														href="tel:+88{{ $company->phone }}" data-cursor-effect-hover="plus"
														data-cursor-effect-hover-color="light">+88{{ $company->phone }}</a>
												</span>
												<span
													class="font-weight-normal align-items-center px-0 d-none d-xl-flex ms-3">
													<span>
														<img width="25"
															src="{{ asset('business/img/demos/business-consulting-3/icons/email.svg') }}"
															alt="Email Icon" data-icon
															data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-light'}" />
													</span>
													<a class="text-color-light text-decoration-none font-weight-semibold text-3-5 ms-2"
														href="mailto:{{ $company->email }}"
														data-cursor-effect-hover="plus"
														data-cursor-effect-hover-color="light">{{ $company->email }}</a>
												</span>
											</li>
										</ul>
									</nav>
									<div class="d-flex align-items-center w-100">
										<ul class="ps-0 ms-auto mb-0">
											<li
												class="nav-item font-weight-semibold text-1 text-lg-2 text-color-dark d-none d-md-flex justify-content-end me-3">
												{{ $company->operation_hour_1 }}
											</li>
										</ul>
										<ul
											class="social-icons social-icons-clean social-icons-icon-dark social-icons-big m-0 ms-lg-2">
											<li class="social-icons-instagram">
												<a href="@if ($company->instagram)
                                                    http://{{ $company->instagram }}
                                                @endif" target="_blank" class="text-4"
													title="Instagram" data-cursor-effect-hover="fit"><i
														class="fab fa-instagram"></i></a>
											</li>
											<li class="social-icons-twitter">
												<a href="@if ($company->twitter)
                                                    http://{{ $company->twitter }}
                                                @endif" target="_blank" class="text-4"
													title="Twitter" data-cursor-effect-hover="fit"><i
														class="fab fa-twitter"></i></a>
											</li>
											<li class="social-icons-facebook">
												<a href="@if ($company->facebook)
                                                    http://{{ $company->facebook }}
                                                @endif" target="_blank" class="text-4"
													title="Facebook" data-cursor-effect-hover="fit"><i
														class="fab fa-facebook-f"></i></a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="header-container container" style="height: 117px;">
					<div class="header-row">
						<div class="header-column">
							<div class="header-row">
								<div class="header-logo">
									<a href="index.html">

										<img src="@if ($company->logo)
                                            {{ asset('images/logo/'.$company->logo) }}
                                        @endif" alt="Business Consulting" width="162"
											height="85">

									</a>
								</div>
							</div>
						</div>
						<div class="header-column justify-content-end w-100">
							<div class="header-row">
								<div class="header-nav header-nav-links order-2 order-lg-1">
									<div
										class="header-nav-main header-nav-main-square header-nav-main-text-capitalize header-nav-main-effect-1 header-nav-main-sub-effect-1">
										<nav class="collapse">
											<ul class="nav nav-pills" id="mainNav">
												@if (Auth::guard('web')->user())
													<li> <a href="{{ route('dashboard') }}">Dashboard</a></li>
												@endif
												<li>
													<a class="nav-link {{ request()->is('/') ? 'active' : '' }}" id="nav_text" href="{{ route('client.home') }}">
														Home
													</a>
												</li>
												<li>
													<a class="nav-link {{ request()->is('about-page') ? 'active' : '' }}"" id="nav_text" href="{{ route('client.about-page') }}">
														About Us
													</a>
												</li>
												<li class="dropdown" >
													<a class="nav-link dropdown-toggle {{ request()->is('service-page/*') ? 'active' : '' }}" id="nav_text"
														href="{{ route('service-page.index') }}">
														Services
													</a>
													<ul class="dropdown-menu">
                                                        @foreach ($services as $service)
                                                            <li>
                                                                <a href="@if ($service->service_details)
                                                                    {{ route('service-page.show',$service->service_details->id) }}
                                                                
                                                                @endif" id="nav_text"
                                                                    class="dropdown-item">{{ $service->title }}</a>
                                                            </li>
                                                        @endforeach
														
													</ul>
												</li>
												<li class="dropdown" >
													<a class="nav-link dropdown-toggle {{ request()->is('setup-page/*') ? 'active' : '' }}" id="nav_text"
														href="{{ route('setup-page.index') }}">
														Business Setup
													</a>
													<ul class="dropdown-menu">
                                                        @foreach ($setups as $setup)
                                                            <li>
                                                                <a href="@if ($setup->setup_details)
                                                                    {{ route('setup-page.show',$setup->setup_details->id) }}
                                                                
                                                                @endif" id="nav_text"
                                                                    class="dropdown-item">{{ $setup->title }}</a>
                                                            </li>
                                                        @endforeach
														
													</ul>
												</li>

												

												<li>
													<a class="nav-link {{ request()->is('blog-page/*') ? 'active' : '' }}" id="nav_text" href="{{ route('blog-page.index') }}">
														Blog
													</a>
												</li>
												<li class="d-lg-none">
													<a class="nav-link {{ request()->is('contact-page') ? 'active' : '' }}" id="nav_text" href="{{ route('client.contact-page') }}">
														Contact Us
													</a>
												</li>
											</ul>
										</nav>
									</div>
								</div>
							</div>
						</div>
						<div
							class="header-column header-column-search justify-content-end align-items-center d-flex w-auto flex-row">
							<a href="{{ route('client.contact-page') }}"
								class="btn btn-dark custom-btn-style-1 font-weight-semibold text-3-5 btn-px-3 py-2 ws-nowrap ms-4 d-none d-lg-block"
								data-cursor-effect-hover="plus" data-cursor-effect-hover-color="light"><span>Contact
									Us</span></a>
							<div class="header-nav-features header-nav-features-no-border">
								<div class="header-nav-feature header-nav-features-search d-inline-flex">
									<a href="" class="header-nav-features-toggle text-decoration-none"
										data-focus="headerSearch" aria-label="Search">
										<i
											class="icons icon-magnifier header-nav-top-icon text-3-5 text-color-dark text-color-hover-primary font-weight-semibold top-3"></i>
									</a>
									<div class="header-nav-features-dropdown header-nav-features-dropdown-mobile-fixed border-radius-0"
										id="headerTopSearchDropdown">
										<form role="search" action="" method="get">
											<div class="simple-search input-group">
												<input class="form-control text-1" id="headerSearch" name="q"
													type="search" value="" placeholder="Search...">
												<button class="btn" type="submit" aria-label="Search">
													<i
														class="icons icon-magnifier header-nav-top-icon text-color-dark text-color-hover-primary top-2"></i>
												</button>
											</div>
										</form>
									</div>
								</div>
							</div>
							<button class="btn header-btn-collapse-nav" data-bs-toggle="collapse"
								data-bs-target=".header-nav-main nav">
								<i class="fas fa-bars"></i>
							</button>
						</div>
					</div>
				</div>

			</div>
		</header>