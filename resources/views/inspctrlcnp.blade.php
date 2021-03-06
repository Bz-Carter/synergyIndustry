@extends('layouts.frontend')

@section('content')
    <!-- Title page -->
	<section class="bg-img1 kit-overlay1" style="background-image: url({{asset('images/bg-06.jpg')}});">
		<div class="container size-h-3 p-tb-30 flex-col-c-c">
			<h2 class="t1-b-1 text-uppercase cl-0 txt-center m-b-25">
				{{ __('inspctrlcnp.titleUper') }}
			</h2>

			<div class="flex-wr-c-c">
				<a href="{{route('accueil')}}" class="breadcrumb-item">
					{{ __('inspctrlcnp.breadcrumbitem1') }}
				</a>

				<a href="{{route('services')}}" class="breadcrumb-item">
					{{ __('inspctrlcnp.breadcrumbitem2') }}
				</a>

				<span class="breadcrumb-item">
					{{ __('inspctrlcnp.breadcrumbitem3') }}
				</span>
			</div>
		</div>
	</section>

	<!-- Content -->
	<section class="bg-0 p-t-100 p-b-5">
		<div class="container">
			<div class="row">
				

				<div class="col-md-4 col-lg-3 p-b-40">
					<!-- Rightbar -->
					<div class="p-b-60">
						<ul class="p-b-30">
							<li class="m-b-5">
								<a href="{{route('services.inspctrlcnp')}}" class="flex-wr-s-c size-a-20 bg-12 t1-m-1 cl-3 hov-3 p-l-20 trans-02 active-1">
									{{ __('inspctrlcnp.rightbar_elem1') }}
								</a>
							</li>

							<li class="m-b-5">
								<a href="{{route('services.ingénerie')}}" class="flex-wr-s-c size-a-20 bg-12 t1-m-1 cl-3 hov-3 p-l-20 trans-02">
									{{ __('inspctrlcnp.rightbar_elem2') }}
								</a>
							</li>

							<li class="m-b-5">
								<a href="{{route('services.expertisehq')}}" class="flex-wr-s-c size-a-20 bg-12 t1-m-1 cl-3 hov-3 p-l-20 trans-02">
									{{ __('inspctrlcnp.rightbar_elem3') }}
								</a>
							</li>

							<li class="m-b-5">
								<a href="{{route('services.ctrlqltprodae')}}" class="flex-wr-s-c size-a-20 bg-12 t1-m-1 cl-3 hov-3 p-l-20 trans-02">
									{{ __('inspctrlcnp.rightbar_elem4') }}
								</a>
							</li>
						</ul>

						<div class="bg-11 p-all-30">
							<p class="t1-m-1 cl-0 m-b-13">
								{{ __('inspctrlcnp.rightbar_elem5') }}
							</p>

							<p class="t1-s-2 cl-15 m-b-25">
								{{ __('inspctrlcnp.rightbar_elem6') }}
							</p>

							<a href="{{route('contactUs')}}" class="d-inline-flex flex-c-c size-a-1 bg-0 t1-s-2 cl-6 text-uppercase hov-btn1 trans-02 p-rl-10">
								<i class="fa fa-phone-square m-r-6"></i>
								Contacts
							</a>
						</div>
					</div>
				</div>

				<div class="col-md-8 col-lg-9 p-b-40">
					<div class="row p-r-35 p-r-0-sr991">
						<div class="col-12 p-b-25">
							<div>
								<img class="max-s-full m-b-30" src="{{asset('images/services-detail-05.jpg')}}" alt="IMG">

								<div class="p-b-14">
									<h3 class="t1-m-5 cl-3 m-b-13">
										{{ __('inspctrlcnp.title') }}
									</h3>

									@lang('inspctrlcnp.content')

								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-12 col-lg-12 p-b-40">
						<div class="row p-r-35 p-r-0-sr991">


							<div class="col-sm-6 col-lg-3 p-b-25">
								<div>
									<img class="max-s-full m-b-30" src="{{asset('images/services-detail-06.jpg')}}" alt="IMG">

									<div class="p-b-14">
										<h3 class="t1-m-5 cl-3 m-b-13">
											{{ __('inspctrlcnp.title2') }}
										</h3>

										@lang('inspctrlcnp.content2')

									</div>
								</div>
							</div>

							<div class="col-sm-6 col-lg-3 p-b-25">
								<div>
									<img class="max-s-full m-b-30" src="{{asset('images/services-detail-07.jpg')}}" alt="IMG">

									<div class="p-b-14">
										<h3 class="t1-m-5 cl-3 m-b-13">
											{{ __('inspctrlcnp.title3') }}
										</h3>

										@lang('inspctrlcnp.content3')
									</div>
								</div>
							</div>

							<div class="col-sm-6 col-lg-3 p-b-25">
								<div>
									<img class="max-s-full m-b-30" src="{{asset('images/services-detail-09.jpg')}}" alt="IMG">

									<div class="p-b-14">
										<h3 class="t1-m-5 cl-3 m-b-13">
												<strong>{{ __('inspctrlcnp.title4') }}</strong>
										</h3>

										@lang('inspctrlcnp.content4')

									</div>
								</div>
							</div>
							<div class="col-sm-6 col-lg-3 p-b-25">
								<div>
									<img class="max-s-full m-b-30" src="{{asset('images/services-detail-08.jpg')}}" alt="IMG">

									<div class="p-b-14">
										<h3 class="t1-m-5 cl-3 m-b-13">
											{{ __('inspctrlcnp.title5') }}
										</h3>

										@lang('inspctrlcnp.content5')

									</div>
								</div>
							</div>
						</div>
				</div>

			</div>
		</div>
	</section>
@endsection
