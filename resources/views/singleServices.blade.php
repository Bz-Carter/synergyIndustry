@extends('layouts.frontend')

@section('content')
    <!-- Title page -->
	<section class="bg-img1 kit-overlay1" style="background-image: url({{asset($service->featured)}});">
		<div class="container size-h-3 p-tb-30 flex-col-c-c">
			<h2 class="t1-b-1 text-uppercase cl-0 txt-center m-b-25">
                @if (app()->getLocale() == 'en')
                    {{$service->name}}
                @else
                    {{$service->namefr}}
                @endif
			</h2>

			<div class="flex-wr-c-c">
				<a href="{{route('accueil')}}" class="breadcrumb-item">
					{{ __('inspctrlcnp.breadcrumbitem1') }}
				</a>

				<a href="{{route('ourservices')}}" class="breadcrumb-item">
					{{ __('inspctrlcnp.breadcrumbitem2') }}
				</a>

				<span class="breadcrumb-item">
                    @if (app()->getLocale() == 'en')
                        {{$service->name}}
                    @else
                        {{$service->namefr}}
                    @endif
				</span>
			</div>
		</div>
	</section>

	<!-- Content -->
	<section class="bg-0 p-t-100 p-b-5">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-lg-9 p-b-40">
					@if (app()->getLocale() == 'en')
						{!! $service->content !!}
					@else
						{!! $service->contentfr !!}
					@endif
				</div>
				<div class="col-md-4 col-lg-3 p-b-30">
					<!-- Rightbar -->
					<div class="p-b-60">
						<ul class="p-b-30">
							@foreach ($services as $service)
								<li class="m-b-5">
									<a href="{{ route('service.single', $service->slug) }}" class="flex-wr-s-c size-a-20 bg-12 t1-m-1 cl-3 hov-3 p-l-20 trans-02 {{ (request()->segment(2) == $service->slug) ? 'active-1' : '' }}">
										@if (app()->getLocale() == 'en')
											{{ $service->name }}
										@else
											{{ $service->namefr }}
										@endif
									</a>
								</li>	
							@endforeach
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
			</div>
		</div>
	</section>
@endsection
