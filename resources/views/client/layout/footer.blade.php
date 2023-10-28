<footer id="footer" class="border-top-0 m-0 lazyload"
		data-bg-src="{{ asset('business/img/demos/business-consulting-3/backgrounds/background-4.jpg')}}"
		style="background-size: cover; background-position: center; background-repeat: no-repeat;">
		<div class="container pt-3">
			<div class="row justify-content-between align-items-center py-5 mb-3">

				<div class="row pt-3 mt-5">
					<div class="col-lg-3 mb-4 col-md-6  mb-lg-0">

						<a href="{{ route('client.home') }}" class="text-decoration-none">
							<img src="@if ($company->logo)
                                {{ asset('images/logo/'.$company->logo)}}
                            @endif" class="img-fluid mb-4" width="123" height="33"
								alt="" />
						</a>
						<p class="text-3-5">Cras a elit sit amet leo accumsan volutpat. Suspendisse
							hendreriast ehicula
							leo, vel efficitur fel. </p>
						<ul
							class="social-icons social-icons-clean social-icons-clean-with-border social-icons-medium social-icons-icon-light">
							<li class="social-icons-facebook"><a href="@if ($company->facebook)
                                http://{{ $company->facebook }}
                            @endif" target="_blank" title="Facebook" data-cursor-effect-hover="fit"><i class="fab fa-facebook-f"></i></a>
							</li>
							<li class="social-icons-twitter mx-2"><a href="@if ($company->twitter)
                                http://{{ $company->twitter }}
                            @endif" target="_blank"
									title="Twitter" data-cursor-effect-hover="fit"><i class="fab fa-twitter"></i></a>
							</li>
							<li class="social-icons-instagram">
                                <a href="@if ($company->instagram)
                                    http://{{ $company->instagram }}
                                @endif" target="_blank" class="text-4"
                                    title="Instagram" data-cursor-effect-hover="fit"><i
                                        class="fab fa-instagram"></i></a>
                            </li>
						</ul>
					</div>


					<div class="col-lg-2 col-md-6 col-sm-12 mx-auto">
						<h4 class="font-weight-bold text-5">Services</h4>
						<ul class="list list-icons list-icons-sm">
                            @foreach ($services as $service)
                                    
                                <li>
                                    <i class="fas fa-angle-right text-color-default"></i>
                                    <a href="@if ($service->service_details)
                                        {{ route('service-page.show',$service->service_details->id) }}
                                    
                                    @endif" class="link-hover-style-1 ms-1">
                                    {{ $service->title }}</a>
                                </li>
                            @endforeach
							
						</ul>
					</div>
					<div class="col-lg-2 col-md-6 col-sm-6">
						<h4 class="font-weight-bold text-5">Useful Links</h4>
						<ul class="list list-icons list-icons-sm">
							<li>
								<i class="fas fa-angle-right text-color-default"></i>
								<a href="{{ route('client.contact-page') }}" class="link-hover-style-1 ms-1">
									Contact Us</a>
							</li>
							<li>
								<i class="fas fa-angle-right text-color-default"></i>
								<a href="{{ route('service-page.index') }}" class="link-hover-style-1 ms-1"> Our
									Services</a>
							</li>
						</ul>
					</div>
					<div class="col-lg-3 mb-4 mb-lg-0 col-md-6 col-sm-6">
						<h4 class="font-weight-bold text-5">Contact Us</h4>
						<ul class="list list-icons list-icons-lg">
							<li class="d-flex px-0 mb-1">
								<img width="25" src="{{ asset('business/img/demos/business-consulting-3/icons/phone.svg')}}" alt="Phone Icon"
									data-icon
									data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-light'}" />
								<a href="tel:{{ $company->phone }}"
									class="text-color-light font-weight-semibold text-3-4 ms-2">+88{{ $company->phone }}
								</a>
							</li>
							<li class="d-flex px-0 my-3">
								<img width="25" src="{{ asset('business/img/demos/business-consulting-3/icons/email.svg')}}" alt="Email Icon"
									data-icon
									data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-light'}" />
								<a href="{{ $company->email }}"
									class="text-color-light font-weight-semibold text-3-4 ms-2">{{ $company->email }}</a>
							</li>
							<li class="d-flex font-weight-semibold text-color-light px-0 mb-1">
								<img width="25" src="{{ asset('business/img/demos/business-consulting-3/icons/map-pin.svg')}}" alt="Location"
									data-icon
									data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-light me-2'}" />
								{{ $company->address }}
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="footer-copyright container bg-transparent">
				<div class="row pb-5">
					<div class="col-lg-12 text-center m-0">
						<hr class="bg-color-light opacity-1 mt-5 mb-4">
						<p class="text-3-4"> Business Consulting. © 2023. All Rights Reserved</p>
					</div>
				</div>
			</div>
	</footer>
	</div>

	<!-- Vendor -->
	<script src="{{ asset('business/vendor/plugins/js/plugins.min.js') }}"></script>

	<!-- Theme Base, Components and Settings -->
	<script src="{{ asset('business/js/theme.js') }}"></script>

	<!-- Current Page Vendor and Views -->
	<script src="{{ asset('business/js/views/view.contact.js') }}"></script>

	<!-- Theme Custom -->
	<script src="{{ asset('business/js/custom.js') }}"></script>

	<!-- Theme Initialization Files -->
	<script src="{{ asset('business/js/theme.init.js') }}"></script>


</body>

</html>