@extends('layouts.frontend')

@section('content')
    <!-- Title page -->
	<section class="bg-img1 kit-overlay1" style="background-image: url(images/bg-06.jpg);">
		<div class="container size-h-3 p-tb-30 flex-col-c-c">
			<h2 class="t1-b-1 text-uppercase cl-0 txt-center m-b-25">
				{{ __('services.titleUper') }}
			</h2>

			<div class="flex-wr-c-c">
            <a href="{{route('accueil')}}" class="breadcrumb-item">
				{{ __('services.breadcrumbitem1') }}
				</a>

				<span class="breadcrumb-item">
					{{ __('services.breadcrumbitem2') }}
				</span>
			</div>
		</div>
	</section>

	<!-- Service -->
	<div class="bg-0 p-t-100 p-b-50">
		
		<div class="container">
			@if ($services->count() == 0)
			<div class="t1-b-1 text-uppercase txt-center m-b-25">
				<strong>{{ __('services.message') }}</strong>
			</div>
			@else
				<div class="row">
					@foreach ($services as $service)
						@if (app()->getLocale() == 'en')
							<div class="col-sm-6 col-md-3 p-b-42">
								<div>
									<a href="{{ route('service.single', $service->slug) }}" class="hov-img0 of-hidden">
										<img src="{{asset($service->featured)}}" alt="{{$service->name}}">
									</a>

									<div class="p-t-26">
										<a href="{{ route('service.single', $service->slug) }}" class="d-inline-block t1-m-1 cl-3 hov-link2 trans-02 m-b-7">
											{{$service->name}}
										</a>

										<p class="t1-s-2 cl-6 m-b-17">
											{{$service->extrait}}
										</p>

										<a href="{{ route('service.single', $service->slug) }}" class="t1-s-5 cl-11 text-uppercase hov-link1 trans-02">
											<i class="fa fa-long-arrow-right m-r-6"></i>
											{{ __('services.btn_link') }}
										</a>
									</div>
								</div>
							</div>
						@else
							<div class="col-sm-6 col-md-3 p-b-42">
								<div>
									<a href="{{ route('service.single', $service->slug) }}" class="hov-img0 of-hidden">
										<img src="{{asset($service->featured)}}" alt="{{$service->namefr}}">
									</a>

									<div class="p-t-26">
										<a href="{{ route('service.single', $service->slug) }}" class="d-inline-block t1-m-1 cl-3 hov-link2 trans-02 m-b-7">
											{{$service->namefr}}
										</a>

										<p class="t1-s-2 cl-6 m-b-17">
											{{$service->extraitfr}}
										</p>

										<a href="{{ route('service.single', $service->slug) }}" class="t1-s-5 cl-11 text-uppercase hov-link1 trans-02">
											<i class="fa fa-long-arrow-right m-r-6"></i>
											{{ __('services.btn_link') }}
										</a>
									</div>
								</div>
							</div>
						@endif
					@endforeach
				</div>
			@endif
		</div>
	</div>
@endsection
