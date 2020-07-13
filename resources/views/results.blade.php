@extends('layouts.frontend')

@section('content')
    <section class="bg-0 p-t-92 p-b-90">
        <div class="container">

            <!--  -->
            <div class="size-w-1 m-rl-auto">

                <form class="flex-wr-c-c" method="GET" action="/results">
                    <input class="size-a-5 bo-all-1 bcl-11 t1-m-2 cl-6 plh-6 p-rl-20 w-full-sr575 m-tb-10" type="text" name="query" value="{{ $query }}">

                    <button class="size-a-6 flex-c-c bg-11 t1-s-2 text-uppercase cl-0 hov-btn1 trans-02 m-tb-10">
                        Search
                    </button>
                </form>
            </div>
        </div>
    </section>

@if ($posts->count() > 0)
    <h1 class="t1-m-5 cl-3 m-b-13"><i>search results :</i></h1>
@else
    <h1 class="t1-m-5 cl-3 m-b-13 text-center"><strong>No result found.</strong></h1>
@endif
    <section class="bg-0 p-t-92 p-b-90">
        <div class="container">
            <div class="row justify-content-center">
                @if ($posts->count() > 0)
                    <div class="col-sm-10 col-md-8 col-lg-12 p-b-30">
                        <div class="p-l-20 p-l-0-sr767">
                            <div class="row">
                                    @foreach ($posts as $post)
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
                    </div>
                @endif
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script src="{{asset('vendor/isotope/isotope.pkgd.min.js')}}"></script>
@endsection
