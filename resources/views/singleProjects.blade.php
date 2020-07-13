@extends('layouts.frontend')

@section('content')

    	<!-- Title page -->
	<section class="bg-img1 kit-overlay1" style="background-image: url({{asset('images/bg-08.jpg')}});">
		<div class="container size-h-3 p-tb-30 flex-col-c-c">
			<h2 class="t1-b-1 text-uppercase cl-0 txt-center m-b-25">
				{{$project->title}}
			</h2>

			<div class="flex-wr-c-c">
				<a href="{{route('accueil')}}" class="breadcrumb-item">
					{{ __('references.breadcrumbitem1') }}
				</a>

				<a href="{{route('références')}}" class="breadcrumb-item">
					{{ __('references.breadcrumbitem2') }}
				</a>

				<span class="breadcrumb-item">
                    {{$project->title}}
				</span>
			</div>
		</div>
	</section>

    <!-- Content -->
    <section class="bg-0 p-t-100 p-b-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <img class="max-s-full m-b-35" src="{{ $project->image_01}}" alt="IMG">
                </div>

                <div class="col-md-6 p-b-20">
                    <img class="max-s-full m-b-30" src="{{ $project->image_02}}" alt="IMG">
                    <img class="max-s-full m-b-30" src="{{ $project->image_03}}" alt="IMG">
                </div>

                <div class="col-md-6 p-b-20">
                    <div class="p-l-35 m-b-30 p-l-0-sr991">
                        <h3 class="t1-b-3 cl-3 m-b-11 m-t--6">
                            {{$project->title}}
                        </h3>

                        <ul class="bo-b-1 bcl-12 p-b-16 m-b-24">
                            <li class="m-b-7">
                                <span class="t1-s-5 cl-3">
                                    Client:
                                </span>

                                <span class="t1-s-2 cl-6">
                                    {{$project->client}}
                                </span>
                            </li>

                            <li class="m-b-7">
                                <span class="t1-s-5 cl-3">
                                    Date:
                                </span>

                                <span class="t1-s-2 cl-6">
                                    {{$project->dateproject}}
                                </span>
                            </li>
                            @if (app()->getLocale() == 'en')
                                <li class="m-b-7">
                                    <span class="t1-s-5 cl-3">
                                        Type Project:
                                    </span>

                                    <span class="t1-s-2 cl-6">
                                        {{$project->service->name}}
                                    </span>
                                </li>
                            @else
                            <li class="m-b-7">
                                <span class="t1-s-5 cl-3">
                                    Type de Projet:
                                </span>

                                <span class="t1-s-2 cl-6">
                                    {{$project->service->namefr}}
                                </span>
                            </li>
                            @endif

                        </ul>
                        @if (app()->getLocale() == 'en')
                            <div class="bo-b-1 bcl-12 p-b-11 m-b-27">
                                <p class="t1-s-2 cl-6 m-b-12">
                                    {!! $project->about !!}
                                </p>
                            </div>
                        @else
                        <div class="bo-b-1 bcl-12 p-b-11 m-b-27">
                            <p class="t1-s-2 cl-6 m-b-12">
                                {!! $project->aboutfr !!}
                            </p>
                        </div>
                        @endif

                        <div>
                            <a href="#" class="fs-16 cl-5 hov-link2 trans-02 m-r-20">
                                <i class="fa fa-facebook-f"></i>
                            </a>

                            <a href="#" class="fs-16 cl-5 hov-link2 trans-02 m-r-20">
                                <i class="fa fa-twitter"></i>
                            </a>

                            <a href="#" class="fs-16 cl-5 hov-link2 trans-02 m-r-20">
                                <i class="fa fa-google-plus"></i>
                            </a>

                            <a href="#" class="fs-16 cl-5 hov-link2 trans-02 m-r-20">
                                <i class="fa fa-instagram"></i>
                            </a>

                            <a href="#" class="fs-16 cl-5 hov-link2 trans-02 m-r-20">
                                <i class="fa fa-linkedin"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Block5 -->
            <div class="block5 flex-wr-sb-c bo-t-1 bcl-14">
                @if ($prev)
                    <a href="{{ route('project.single', ['slug' => $prev->slug]) }}" class="block5-1 bg-img2" style="background-image: url('{{$prev->image_01}}');" title="{{$prev->title}}"></a>
                @else
                    <a></a>
                @endif

                <a href="{{route('références')}}" class="block5-2 flex-c-c bg-11 t1-m-7 text-uppercase cl-0 hov-btn1 trans-02">
                    <i class="fa fa-th fs-24 m-r-10"></i>
                    @lang('head.ref')
                </a>
                @if ($next)
                    <a href="{{ route('project.single', ['slug' => $next->slug]) }}" class="block5-3 bg-img2" style="background-image: url('{{$next->image_01}}');" title="{{ $next->title }}"></a>
                @else
                    <a></a>
                @endif
            </div>
        </div>
    </section>
@endsection

@section('scriptSingle')
    <script src="{{asset('vendor/isotope/isotope.pkgd.min.js')}}"></script>
@endsection
