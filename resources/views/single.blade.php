@extends('layouts.frontend')

@section('content')

    <!-- Title page -->
	<section class="bg-img1 kit-overlay1" style="background-image: url({{asset($post->featured)}});">
		<div class="container size-h-3 p-tb-30 flex-col-c-c">
			<h2 class="t1-b-1 text-uppercase cl-0 txt-center m-b-25">

                @if (app()->getLocale() == 'en')
                    {{$post->title}}
                @else
                    {{$post->titlefr}}
                @endif
			</h2>

			<div class="flex-wr-c-c">
				<a href="{{route('accueil')}}" class="breadcrumb-item">
					{{ __('actu.breadcrumbitem1') }}
				</a>

				<a href="{{route('news')}}" class="breadcrumb-item">
					{{ __('actu.breadcrumbitem2') }}
				</a>

				<span class="breadcrumb-item">
                    @if (app()->getLocale() == 'en')
                        {{$post->title}}
                    @else
                        {{$post->titlefr}}
                    @endif
				</span>
			</div>
		</div>
	</section>

	<!-- Content -->
	<div class="bg-0 p-t-100 p-b-70">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-sm-10 col-md-4 col-lg-3 p-b-30">
					<!-- Left bar -->
					@include('layouts.includes.left-bar')
				</div>

				<div class="col-sm-10 col-md-8 col-lg-9 p-b-30">
					<div class="p-l-50 p-l-15-sr991 p-l-0-sr767">
						<!-- News detail -->
						<div class="m-b-25">
							<img class="m-b-45 max-s-full" src="{{ $post->featured }}" alt="IMG">

							<h4 class="t1-b-3 cl-3 m-b-11">

                                @if (app()->getLocale() == 'en')
                                    {{$post->title}}
                                @else
                                    {{$post->titlefr}}
                                @endif
							</h4>

							<div class="flex-wr-s-c m-b-11">
								<div class="p-r-20">
									<i class="fs-14 cl-7 fa fa-calendar m-r-2"></i>

									<span class="t1-s-2 cl-7">
										{{ $post->created_at->toFormattedDateString() }}
									</span>
								</div>

								<div class="p-l-20 bo-l-1 bcl-12">
									<i class="fs-14 cl-7 fa fa-user m-r-2"></i>

									<a href="#" class="t1-s-2 cl-11 hov-link3">
										<strong>{{ $post->user->name }}</strong>
									</a>
								</div>
							</div>

                            @if (app()->getLocale() == 'en')
                                 {!! $post->content !!}
                            @else
                                {!! $post->contentfr !!}
                            @endif

							<div class="flex-wr-sb-c p-t-22">
								<div class="flex-s-s p-tb-8 m-r-30">
									<span class="fs-14 cl-5 m-r-9">
										<i class="fa fa-tags"></i>
									</span>

									<span class="size-w-0">
										@foreach ($post->tags as $tag)
                                        <a href="#" class="t1-s-5 text-uppercase cl-11 hov-link1">
											{{ $tag->tag }},
										</a>
                                        @endforeach
									</span>
								</div>

								<div class="flex-s-s p-tb-8">
									<span class="fs-14 cl-5 m-r-9">
										<i class="fa fa-share-alt-square"></i>
									</span>

									<span class="size-w-0">
										<a href="{{ $post->user->profile->facebook }}" class="t1-s-5 text-uppercase cl-11 hov-link1">
											Facebook,
										</a>

										<a href="{{ $post->user->profile->youtube }}" class="t1-s-5 text-uppercase cl-11 hov-link1">
											Youtube
										</a>
									</span>
								</div>
							</div>
						</div>

						<!-- Next Prev -->
						<div class="flex-wr-sb-c bo-tb-1 bcl-12 p-tb-13 m-b-46">
							@if (isset($previous))
								<a href="{{ route('post.single', $previous->slug) }}" class="flex-s-c t1-s-5 text-uppercase cl-5 hov-link2 trans-02 m-r-30">
									<i class="fa fa-angle-left fs-18 m-b-2 m-r-10"></i>
									{{ __('single.left') }}
								</a>
							@else
								<a class="flex-s-c t1-s-5 text-uppercase cl-5 hov-link2 trans-02 m-r-30">

								</a>
							@endif

							@if (isset($next))
								<a href="{{ route('post.single', $next->slug) }}" class="flex-s-c t1-s-5 text-uppercase cl-5 hov-link2 trans-02">
									{{ __('single.right') }}
									<i class="fa fa-angle-right fs-18 m-b-2 m-l-10"></i>
								</a>
							@else
								<a class="flex-s-c t1-s-5 text-uppercase cl-5 hov-link2 trans-02 m-r-30">

								</a>
							@endif
						</div>

						<!-- comment section deleted -->
					</div>
				</div>
			</div>
		</div>
    </div>

@endsection



@section('scripts')
    <script src="{{asset('vendor/isotope/isotope.pkgd.min.js')}}"></script>
@endsection
