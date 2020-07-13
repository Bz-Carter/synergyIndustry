@extends('layouts.frontend')

@section('content')
    	<!-- Title page -->
	<section class="bg-img1 kit-overlay1" style="background-image: url({{asset('images/bg-07.jpg')}});">
		<div class="container size-h-3 p-tb-30 flex-col-c-c">
			<h2 class="t1-b-1 text-uppercase cl-0 txt-center m-b-25">
				{{ __('actu.titleUper') }}
			</h2>

			<div class="flex-wr-c-c">
				<a href="{{route('accueil')}}" class="breadcrumb-item">
					{{ __('actu.breadcrumbitem1') }}
				</a>

				<span class="breadcrumb-item">
					{{ __('actu.breadcrumbitem2') }}
				</span>
			</div>
		</div>
	</section>

	<!-- Content -->
	<div class="bg-12 p-t-100 p-b-70">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-sm-10 col-md-4 col-lg-3 p-b-30">
					<!-- Left bar -->
					@include('layouts.includes.left-bar')
				</div>
				@if ($posts->count() == 0)

					<div class="col-sm-10 col-md-8 col-lg-9 p-b-30">
						<br><br><br>
                        <div class="t1-b-1 text-uppercase txt-center m-b-25">
                            <strong>{{ __('actu.message') }}</strong>
                        </div>
					</div>
				@else
				<div class="col-sm-10 col-md-8 col-lg-9 p-b-30">
					<div class="p-l-20 p-l-0-sr767">
						<div class="row">
                            @foreach ($posts as $post)
                                @if (app()->getLocale() == 'en')
                                    <div class="col-lg-6 p-b-50">
                                        <div class="bg-0 h-full">
                                            <a href="{{ route('post.single', $post->slug) }}" class="hov-img0 of-hidden">
                                                <img src="{{$post->featured}}" alt="{{$post->title}}">
                                            </a>

                                            <div class="bg-0 p-rl-28 p-t-26 p-b-35">
                                                <h4 class="p-b-12">
                                                    <a href="{{ route('post.single', $post->slug) }}" class="t1-m-1 cl-3 hov-link2 trans-02">
                                                            {{$post->title}}
                                                    </a>
                                                </h4>

                                                <div class="flex-wr-s-c p-b-9">
                                                    <div class="p-r-20">
                                                        <i class="fs-14 cl-7 fa fa-calendar m-r-2"></i>

                                                        <span class="t1-s-2 cl-7">
                                                            {{ $post->created_at->toFormattedDateString() }}
                                                        </span>
                                                    </div>

                                                    <!-- <div class="p-l-20 bo-l-1 bcl-12">
                                                        <i class="fs-14 cl-7 fa fa-user m-r-2"></i>

                                                        <a href="#" class="t1-s-2 cl-11 hov-link3">
                                                                post->user->name
                                                        </a>
                                                    </div> -->
                                                </div>

                                                <p class="t1-s-2 cl-6 p-b-20">
                                                        {{$post->description}}
                                                </p>

                                                <a href="{{ route('post.single', $post->slug) }}" class="d-inline-flex flex-c-c size-a-1 p-rl-15 t1-s-2 text-uppercase cl-0 bg-11 hov-btn1 trans-02">
                                                    {{ __('actu.a_name') }}
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                @else
                                    <div class="col-lg-6 p-b-50">
                                        <div class="bg-0 h-full">
                                            <a href="{{ route('post.single', $post->slug) }}" class="hov-img0 of-hidden">
                                                <img src="{{$post->featured}}" alt="{{$post->titlefr}}">
                                            </a>

                                            <div class="bg-0 p-rl-28 p-t-26 p-b-35">
                                                <h4 class="p-b-12">
                                                    <a href="{{ route('post.single', $post->slug) }}" class="t1-m-1 cl-3 hov-link2 trans-02">
                                                            {{$post->titlefr}}
                                                    </a>
                                                </h4>

                                                <div class="flex-wr-s-c p-b-9">
                                                    <div class="p-r-20">
                                                        <i class="fs-14 cl-7 fa fa-calendar m-r-2"></i>

                                                        <span class="t1-s-2 cl-7">
                                                            {{ $post->created_at->toFormattedDateString() }}
                                                        </span>
                                                    </div>

                                                    <!-- <div class="p-l-20 bo-l-1 bcl-12">
                                                        <i class="fs-14 cl-7 fa fa-user m-r-2"></i>

                                                        <a href="#" class="t1-s-2 cl-11 hov-link3">
                                                                post->user->name
                                                        </a>
                                                    </div> -->
                                                </div>

                                                <p class="t1-s-2 cl-6 p-b-20">

                                                        {!! $post->descriptionfr !!}
                                                </p>

                                                <a href="{{ route('post.single', $post->slug) }}" class="d-inline-flex flex-c-c size-a-1 p-rl-15 t1-s-2 text-uppercase cl-0 bg-11 hov-btn1 trans-02">
                                                    {{ __('actu.a_name') }}
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                @endif
							@endforeach
						</div>
						<!-- Pagination -->
						{{ $posts->links() }}
					</div>
				</div>
				@endif
			</div>
		</div>
	</div>
@endsection
