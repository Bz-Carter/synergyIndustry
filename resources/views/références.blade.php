@extends('layouts.frontend')

@section('content')
    <!-- Title page -->
	<section class="bg-img1 kit-overlay1" style="background-image: url(images/bg-08.jpg);">
		<div class="container size-h-3 p-tb-30 flex-col-c-c">
			<h2 class="t1-b-1 text-uppercase cl-0 txt-center m-b-25">
				{{ __('references.titleUper') }}
			</h2>

			<div class="flex-wr-c-c">
				<a href="{{route('accueil')}}" class="breadcrumb-item">
					{{ __('references.breadcrumbitem1') }}
				</a>

				<span class="breadcrumb-item">
					{{ __('references.breadcrumbitem2') }}
				</span>
			</div>
		</div>
	</section>

	<!-- Content -->
	<div class="bg-0 p-t-95 p-b-50">
		@if ($services->count() == 0)
			<div class="t1-b-1 text-uppercase txt-center m-b-25">
					<strong>{{ __('references.message') }}</strong>
			</div>

		@else

				<div class="p-rl-50 p-rl-15-sr1199">
					<div class="p-b-45">
						<div class="flex-wr-c-c filter-tope-group">
							<button class="t1-m-6 cl-16 hov-btn3 trans-02 p-rl-10 p-tb-3 m-all-5 active-2" data-filter="*">
								{{ __('references.btn_name') }}
							</button>
						  @foreach ($services as $service)
							<button class="t1-m-6 cl-16 hov-btn3 trans-02 p-rl-10 p-tb-3 m-all-5" data-filter=".{{$service->id}}">
                                @if (app()->getLocale() == 'en')
                                    {{$service->name}}
                                @else
                                    {{$service->namefr}}
                                @endif
							</button>
						  @endforeach
						</div>
					</div>
					<div class="row isotope-grid">
						@foreach ($projects as $project)
						<div class="col-sm-6 col-lg-4 p-b-45 isotope-item {{$project->service->id}}">
								<div class="flex-col-s-c">
									<div class="w-full pos-relative wrap-pic-w m-b-16">
										<img src="{{$project->image_01}}" alt="IMG">

										<div class="s-full ab-t-l flex-col-c-c hov-1 p-tb-30 p-rl-15">
											<a href="{{ route('project.single', $project->slug) }}" class="size-a-15 d-inline-flex flex-c-c bg-11 t1-s-2 text-uppercase cl-0 hov-btn2 trans-02 p-rl-10 hov-1-2">
												{{ __('references.a_name') }}
											</a>
										</div>
									</div>

									<a href="projects-detail-01.html" class="t1-m-1 cl-3 hov-link2 trans-02">
											{{$project->title}}
									</a>
								</div>
							</div>
						@endforeach
					</div>
				</div>
		@endif

	</div>
@endsection

@section('scripts')
    <script src="{{asset('vendor/isotope/isotope.pkgd.min.js')}}"></script>
@endsection


