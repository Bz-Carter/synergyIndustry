@extends('layouts.frontend')

@section('content')
    	<!-- Title page -->
	<section class="bg-img1 kit-overlay1" style="background-image: url({{asset('images/bg-07.jpg')}});">
		<div class="container size-h-3 p-tb-30 flex-col-c-c">
			<h2 class="t1-b-1 text-uppercase cl-0 txt-center m-b-25">
				Tag: {{ $tag->tag }}
			</h2>

			<div class="flex-wr-c-c">
				<a href="{{route('accueil')}}" class="breadcrumb-item">
					Acceuil
                </a>

                <a href="{{route('news')}}" class="breadcrumb-item">
					Actualités
				</a>

				<span class="breadcrumb-item">
					Tag: {{ $tag->tag }}
				</span>
			</div>
		</div>
	</section>

    <!-- Content -->
	<div class="bg-12 p-t-100 p-b-70">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-sm-10 col-md-8 col-lg-12 p-b-30">
                    @if ($tag->posts->count() == 0)
                        <br><br><br>
                        <div class="t1-b-1 text-uppercase txt-center m-b-25">
                            <strong>{{ __('actu.message') }}</strong>
                        </div>
                    @else
                        <div class="p-l-20 p-l-0-sr767">
                            <div class="row">
                                @foreach ($tag->posts as $post)
                                    <div class="col-lg-4 p-b-50">
                                        <div class="bg-0 h-full">
                                            <a href="{{ route('post.single', $post->slug) }}" class="hov-img0 of-hidden">
                                                <img src="{{ $post->featured }}" alt="IMG">
                                            </a>

                                            <div class="bg-0 p-rl-28 p-t-26 p-b-35">
                                                <h4 class="p-b-12">
                                                    <a href="{{ route('post.single', $post->slug) }}" class="t1-m-1 cl-3 hov-link2 trans-02">
                                                        {{ $post->title }}
                                                    </a>
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif
				</div>
			</div>
		</div>
	</div>

@endsection

@section('scripts')
    <script src="{{asset('vendor/isotope/isotope.pkgd.min.js')}}"></script>
@endsection
