@extends('layouts.frontend')

@section('content')

    <!-- Home Content -->

        <!-- Slide -->
        @if ($slides->count() == 0)

        @else
            <section class="slider">
                <div class="rev_slider_wrapper fullwidthbanner-container">
                    <div id="rev_slider_1" class="rev_slider fullwidthabanner" data-version="5.4.5" style="display:none">
                        <ul>
                            @foreach ($slides as $slide)
                                <li data-transition="{{ $slide->transition->data }}" data-delay="{{$slide->delay * 1000}}">
                                    <img src="{{ $slide->photo }}" alt="IMG-SLIDE" class="rev-slidebg">

                                    <h2 {!! $slide->slidetitle->data !!}>
                                        @if (app()->getLocale() == 'en')
                                            <mark>{{ $slide->title }}</mark>
                                        @else
                                            <mark>{{ $slide->titlefr }}</mark>
                                        @endif
                                    </h2>

                                    <p {!! $slide->slideinfo->data !!}>
                                        @if (app()->getLocale() == 'en')
                                            <mark>{{ $slide->info }}</mark>
                                        @else
                                            <mark>{{ $slide->infofr }}</mark>
                                        @endif
                                    </p>
                                    @if ($slides->count() > 0 & $first_slide->id == $slide->id )
                                        <div class="tp-caption tp-resizeme caption-3 flex-wr-c-c d-flex"
                                        data-frames='[{"delay":3000,"speed":1500,"frame":"0","from":"y:bottom;rX:-20deg;rY:-20deg;rZ:0deg;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                                        data-x="['center']"
                                        data-y="['center']"
                                        data-hoffset="['0', '0', '0', '0']"
                                        data-voffset="['88', '88', '88', '88']"

                                        data-width="['1200','992','768','480']"
                                        data-height="['auto']"

                                        data-paddingtop="[0, 0, 0, 0]"
                                        data-paddingright="[10, 10, 10, 10]"
                                        data-paddingbottom="[0, 0, 0, 0]"
                                        data-paddingleft="[10, 10, 10, 10]"

                                        data-basealign="slide"
                                        data-responsive_offset="off"
                                        >
                                            <a href="{{route('références')}}" class="btn1 flex-c-c">
                                                {{ __('home.slide1_btn1') }}
                                            </a>

                                            <a href="{{route('aboutUs')}}" class="btn2 flex-c-c">
                                                {{ __('home.slide1_btn2') }}
                                            </a>
                                        </div>
                                    @endif

                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </section>
        @endif

		@if ($services->count() == 0)

		@else
			<!-- Services -->
			<section class="bg-0 p-t-92 p-b-60">
				<div class="container">
					<!-- Title section -->
					<div class="flex-col-c-c p-b-50">
						<h3 class="t1-b-1 cl-3 txt-center m-b-11">
							{{ __('home.title_section_services') }}
						</h3>

						<div class="size-a-2 bg-3"></div>
					</div>

					<!--  -->
					<div class="row justify-content-center">
						<div class="col-sm-10 col-md-8 col-lg-4 p-b-40">
							<div class="bg-10 h-full">
								<a href="{{ route('service.single', ['slug' => $first_service->slug ]) }}" class="hov-img0 of-hidden bg-0">
									<img src="{{asset($first_service->featured)}}" alt="IMG">
								</a>

								<div class="p-rl-30 p-t-26 p-b-20">
									<h4 class="p-b-9">
										<a href="{{ route('service.single', ['slug' => $first_service->slug ]) }}" class="t1-m-1 cl-0 hov-link2 trans-02">
											@if (app()->getLocale() == 'en')
												{{$first_service->name}}
											@else
												{{$first_service->namefr}}
											@endif
										</a>
									</h4>

									<p class="t1-s-2 cl-13">
										@if (app()->getLocale() == 'en')
											{{$first_service->extrait}}
										@else
											{{$first_service->extraitfr}}
										@endif
									</p>
								</div>
							</div>
						</div>

						<div class="col-sm-10 col-md-8 col-lg-4 p-b-40">
							<div class="bg-10 h-full">
								<a href="{{ route('service.single', ['slug' => $second_service->slug ]) }}" class="hov-img0 of-hidden bg-0">
									<img src="{{asset($second_service->featured)}}" alt="IMG">
								</a>

								<div class="p-rl-30 p-t-26 p-b-20">
									<h4 class="p-b-9">
										<a href="{{ route('service.single', ['slug' => $second_service->slug ]) }}" class="t1-m-1 cl-0 hov-link2 trans-02">
											@if (app()->getLocale() == 'en')
												{{$second_service->name}}
											@else
												{{$second_service->namefr}}
											@endif
										</a>
									</h4>

									<p class="t1-s-2 cl-13">
										@if (app()->getLocale() == 'en')
											{{$second_service->extrait}}
										@else
											{{$second_service->extraitfr}}
										@endif
										
									</p>
								</div>
							</div>
						</div>

						<div class="col-sm-10 col-md-8 col-lg-4 p-b-40">
							<div class="bg-10 h-full">
								<a href="{{ route('service.single', ['slug' => $third_service->slug ]) }}" class="hov-img0 of-hidden bg-0">
									<img src="{{asset($third_service->featured)}}" alt="IMG">
								</a>

								<div class="p-rl-30 p-t-26 p-b-20">
									<h4 class="p-b-9">
										<a href="{{ route('service.single', ['slug' => $third_service->slug ]) }}" class="t1-m-1 cl-0 hov-link2 trans-02">
											@if (app()->getLocale() == 'en')
												{{$third_service->name}}
											@else
												{{$third_service->namefr}}
											@endif
											
										</a>
									</h4>

									<p class="t1-s-2 cl-13">
										@if (app()->getLocale() == 'en')
											{{$third_service->extrait}}
										@else
											{{$third_service->extraitfr}}
										@endif
										
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		@endif

		<!-- Why chosse us -->
		<section class="bg-12 p-t-92 p-b-70">
			<div class="container">
				<!-- Title section -->
				<div class="flex-col-c-c p-b-50">
                    <h4 class="t1-b-1 cl-3 txt-center m-b-11">
                        {{ __('home.title_section_why') }}
					</h4>
                    <div class="size-a-2 bg-3"></div>
                    <br>
                    <div class="t1-m-6 cl-16 ">
                        <h3>
                            {{ __('home.message_whyChossesUs') }}</h3>
                    </div>
				</div>

				<!-- Testimonials -->
				<div class="parallax100 kit-overlay2 p-t-50 p-b-45" style="background-image: url({{asset('images/bg-04.jpg')}});">
					<div class="container">
						<div class="row justify-content-center">
							<div class="col-md-10 col-lg-8">
								<!-- Slick2 -->
								<div class="wrap-slick2">
									<div class="slide-slick">
										<div class="item-slick p-rl-15 p-t-35">
											<div class="flex-col-c-c bo-all-1 bcl-13 pos-relative p-rl-75 p-t-90 p-b-75 respon-1">
                                            <div class="size-a-13 borad-50per of-hidden kit-pos1">
                                                <img class="s-full" src="images/1.jpg" alt="IMG">
                                            </div>
												<p class="t1-m-4 cl-0 txt-center kit-symbol1 m-b-30 respon-2">
													<strong>{{ __('home.whyChosseUs_title1') }}</strong>
												</p>

												<span class="t1-s-4 cl-13 txt-center">
													{{ __('home.whyChosseUs_info1') }}
												</span>
											</div>
										</div>

										<div class="item-slick p-rl-15 p-t-35">
											<div class="flex-col-c-c bo-all-1 bcl-13 pos-relative p-rl-75 p-t-90 p-b-75 respon-1">
                                                <div class="size-a-13 borad-50per of-hidden kit-pos1">
                                                <img class="s-full" src="images/2.jpg" alt="IMG">
                                            </div>

												<p class="t1-m-4 cl-0 txt-center kit-symbol1 m-b-30 respon-2">
													<strong>{{ __('home.whyChosseUs_title2') }}</strong>
												</p>

												<span class="t1-s-4 cl-13 txt-center">
													{{ __('home.whyChosseUs_info2') }}
												</span>
											</div>
										</div>

										<div class="item-slick p-rl-15 p-t-35">
											<div class="flex-col-c-c bo-all-1 bcl-13 pos-relative p-rl-75 p-t-90 p-b-75 respon-1">
                                                <div class="size-a-13 borad-50per of-hidden kit-pos1">
                                                <img class="s-full" src="images/3.jpg" alt="IMG">
                                            </div>

												<p class="t1-m-4 cl-0 txt-center kit-symbol1 m-b-30 respon-2">
													<strong>{{ __('home.whyChosseUs_title3') }}</strong>
												</p>

												<span class="t1-s-4 cl-13 txt-center">
													{{ __('home.whyChosseUs_info3') }}
												</span>
											</div>
										</div>

										<div class="item-slick p-rl-15 p-t-35">
											<div class="flex-col-c-c bo-all-1 bcl-13 pos-relative p-rl-75 p-t-90 p-b-75 respon-1">
                                                <div class="size-a-13 borad-50per of-hidden kit-pos1">
                                                <img class="s-full" src="images/4.jpg" alt="IMG">
                                            </div>

												<p class="t1-m-4 cl-0 txt-center kit-symbol1 m-b-30 respon-2">
													<strong>{{ __('home.whyChosseUs_title4') }}</strong>
												</p>

												<span class="t1-s-4 cl-13 txt-center">
													{{ __('home.whyChosseUs_info4a') }}
												</span>
												<span class="t1-s4 cl-13">
														<ul>
															<li><strong>{{ __('home.whyChosseUs_info4b') }}</strong></li>
															<li><strong>{{ __('home.whyChosseUs_info4c') }}</strong></li>
															<li><strong>{{ __('home.whyChosseUs_info4d') }}</strong></li>
															<li><strong>{{ __('home.whyChosseUs_info4e') }}</strong></li>
															<li><strong>{{ __('home.whyChosseUs_info4f') }}</strong></li>
													</ul>
												</span>
											</div>
										</div>

										<div class="item-slick p-rl-15 p-t-35">
											<div class="flex-col-c-c bo-all-1 bcl-13 pos-relative p-rl-75 p-t-90 p-b-75 respon-1">
                                                <div class="size-a-13 borad-50per of-hidden kit-pos1">
                                                <img class="s-full" src="images/5.jpg" alt="IMG">
                                            </div>
												<p class="t1-m-4 cl-0 txt-center kit-symbol1 m-b-30 respon-2">
													<strong>{{ __('home.whyChosseUs_title5') }}</strong>
												</p>

												<span class="t1-s-4 cl-13 txt-center">
													{{ __('home.whyChosseUs_info5a') }}
													<br><br>
													{{ __('home.whyChosseUs_info5b') }}
												</span>
											</div>
										</div>

										<div class="item-slick p-rl-15 p-t-35">
											<div class="flex-col-c-c bo-all-1 bcl-13 pos-relative p-rl-75 p-t-90 p-b-75 respon-1">
                                                <div class="size-a-13 borad-50per of-hidden kit-pos1">
                                                <img class="s-full" src="images/6.jpg" alt="IMG">
                                            </div>
												<p class="t1-m-4 cl-0 txt-center kit-symbol1 m-b-30 respon-2">
													<strong>{{ __('home.whyChosseUs_title6') }}</strong>
												</p>

												<span class="t1-s-4 cl-13 txt-center">
													{{ __('home.whyChosseUs_info6') }}
												</span>
											</div>
										</div>

										<div class="item-slick p-rl-15 p-t-35">
											<div class="flex-col-c-c bo-all-1 bcl-13 pos-relative p-rl-75 p-t-90 p-b-75 respon-1">
                                                <div class="size-a-13 borad-50per of-hidden kit-pos1">
                                                <img class="s-full" src="images/7.jpg" alt="IMG">
                                            </div>
												<p class="t1-m-4 cl-0 txt-center kit-symbol1 m-b-30 respon-2">
													<strong>{{ __('home.whyChosseUs_title7') }}</strong>
												</p>

												<span class="t1-s-4 cl-13 txt-center">
													{{ __('home.whyChosseUs_info7') }}
												</span>
											</div>
										</div>
									</div>

									<div class="wrap-dot-slick p-t-40"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>


		@if ($projects->count() == 0)

		@else
			<!-- Project -->
			<section class="bg-12 p-t-92 p-b-60">
				<div class="container">
					<!-- Title section -->
					<div class="flex-col-c-c p-b-50">
						<h3 class="t1-b-1 cl-3 txt-center m-b-11">
							{{ __('home.title_section_references') }}
						</h3>

                        <div class="size-a-2 bg-3"></div>
                        <br>
                        <div class="t1-m-6 cl-16 ">
                            <h3>
                                {{ __('home.message_references') }}
                            </h3>
                        </div>
					</div>

					<!--  -->
					<div class="row justify-content-center">
						@if ($projects->count() > 0)
							<div class="col-sm-10 col-md-8 col-lg-4 p-b-40">
								<!-- Block2 -->
								<div class="block2 bg-img2" style="background-image: url('{{$first_project->image_01}}');">
									<div class="block2-content trans-04">
										<h4 class="block2-title t1-m-1 cl-0 flex-s-c trans-04">
											{{$first_project->title}}
                                        </h4>

                                        @if (app()->getLocale() == 'en')
                                            <p class="t1-s-2 cl-13 p-b-26">
                                                {{$first_project->description}}
                                            </p>
                                        @else
                                        <p class="t1-s-2 cl-13 p-b-26">
                                            {{$first_project->descriptionfr}}
                                        </p>
                                        @endif

										<a href="{{ route('project.single', ['slug' => $first_project->slug ]) }}" class="d-inline-flex flex-c-c size-a-1 p-rl-15 t1-s-2 text-uppercase cl-6 bg-0 hov-btn3 trans-02">
											{{ __('home.firstproj_link') }}
										</a>
									</div>
								</div>
							</div>
						@endif

						@if ($projects->count() > 1)
							<div class="col-sm-10 col-md-8 col-lg-4 p-b-40">
								<!-- Block2 -->
								<div class="block2 bg-img2" style="background-image: url('{{$second_project->image_01}}');">
									<div class="block2-content trans-04">
										<h4 class="block2-title t1-m-1 cl-0 flex-s-c trans-04">
											{{$second_project->title}}
										</h4>

                                        @if (app()->getLocale() == 'en')
                                            <p class="t1-s-2 cl-13 p-b-26">
                                                {{$second_project->description}}
                                            </p>
                                        @else
                                        <p class="t1-s-2 cl-13 p-b-26">
                                            {{$second_project->descriptionfr}}
                                        </p>
                                        @endif

										<a href="{{ route('project.single', ['slug' => $second_project->slug ]) }}" class="d-inline-flex flex-c-c size-a-1 p-rl-15 t1-s-2 text-uppercase cl-6 bg-0 hov-btn3 trans-02">
											{{ __('home.secondproj_link') }}
										</a>
									</div>
								</div>
							</div>
						@endif

						@if ($projects->count() > 2)
							<div class="col-sm-10 col-md-8 col-lg-4 p-b-40">
								<!-- Block2 -->
								<div class="block2 bg-img2" style="background-image: url('{{$third_project->image_01}}');">
									<div class="block2-content trans-04">
										<h4 class="block2-title t1-m-1 cl-0 flex-s-c trans-04">
											{{$third_project->title}}
										</h4>

                                        @if (app()->getLocale() == 'en')
                                            <p class="t1-s-2 cl-13 p-b-26">
                                                {{$third_project->description}}
                                            </p>
                                        @else
                                        <p class="t1-s-2 cl-13 p-b-26">
                                            {{$third_project->descriptionfr}}
                                        </p>
                                        @endif

										<a href="{{ route('project.single', ['slug' => $third_project->slug ]) }}" class="d-inline-flex flex-c-c size-a-1 p-rl-15 t1-s-2 text-uppercase cl-6 bg-0 hov-btn3 trans-02">
											{{ __('home.thirdproj_link') }}
										</a>
									</div>
								</div>
							</div>
						@endif

					</div>
				</div>
			</section>
        @endif

		<!-- Number -->
		<div class="parallax100 kit-overlay1 p-tb-38" style="background-image: url(images/bg-01.jpg);">
			<div class="container">
				<div class="row">
					<div class="col-md-4 p-tb-30">
						<div class="flex-col-c-c h-full">
							<span class="t1-b-2 cl-0 txt-center p-b-5 counter">
								26
							</span>

							<span class="t1-m-1 cl-13 txt-center text-uppercase">
								{{ __('home.partnerA') }} <br> {{ __('home.partnerB') }}
							</span>
						</div>
					</div>

					<div class="col-md-4 p-tb-30">
						<div class="flex-col-c-c h-full">
							<span class="t1-b-2 cl-0 txt-center p-b-5 counter">
								743
							</span>

							<span class="t1-m-1 cl-13 txt-center text-uppercase">
								{{ __('home.operationsA') }} <br> {{ __('home.operationsB') }}
							</span>
						</div>
					</div>

					<div class="col-md-4 p-tb-30">
						<div class="flex-col-c-c h-full">
							<span class="t1-b-2 cl-0 txt-center p-b-5">
								<span class="counter">08</span>
							</span>

							<span class="t1-m-1 cl-13 txt-center text-uppercase">
								{{ __('home.awards') }}
							</span>
						</div>
					</div>
				</div>
			</div>
		</div>

		@if ($posts->count() == 0)

		@else
			<!-- News -->
			<section class="bg-12 p-t-92 p-b-60">
				<div class="container">
					<!-- Title section -->
					<div class="flex-col-c-c p-b-50">
						<h3 class="t1-b-1 cl-3 txt-center m-b-11">
							{{ __('home.title_section_news') }}
						</h3>

						<div class="size-a-2 bg-3"></div>
					</div>

					<!--  -->
					<div class="row justify-content-center">
							@if ($posts->count() > 0)
								<div class="col-sm-10 col-md-8 col-lg-4 p-b-40">
									<div class="bg-0 h-full">
										<a href="{{ route('post.single', ['slug' => $first_post->slug ]) }}" class="hov-img0 of-hidden">
											<img src="{{ $first_post->featured }}" alt="{{ $first_post->title }}">
										</a>

										<div class="bg-0 p-rl-28 p-t-26 p-b-35">
											<h4 class="p-b-12">
												<a href="{{ route('post.single', ['slug' => $first_post->slug ]) }}" class="t1-m-1 cl-3 hov-link2 trans-02">
                                                    @if (app()->getLocale() == 'en')
                                                        {{ $first_post->title }}
                                                    @else
                                                        {{ $first_post->titlefr }}
                                                    @endif
												</a>
											</h4>

											<div class="flex-wr-s-c p-b-9">
												<div class="p-r-20">
													<i class="fs-14 cl-7 fa fa-calendar m-r-2"></i>

													<span class="t1-s-2 cl-7">
															{{ $first_post->created_at->toFormattedDateString() }}
													</span>
												</div>

												<div class="p-l-20 bo-l-1 bcl-12">
													<i class="fs-14 cl-7 fa fa-user m-r-2"></i>

													<a href="#" class="t1-s-2 cl-11 hov-link3">
															{{ $first_post->user->name }}
													</a>
												</div>
											</div>

											<p class="t1-s-2 cl-6 p-b-20">

                                                    @if (app()->getLocale() == 'en')
                                                        {!! $first_post->description !!}
                                                    @else
                                                        {!! $first_post->descriptionfr !!}
                                                    @endif
											</p>

											<a href="{{ route('post.single', ['slug' => $first_post->slug ]) }}" class="d-inline-flex flex-c-c size-a-1 p-rl-15 t1-s-2 text-uppercase cl-0 bg-11 hov-btn1 trans-02">
												{{ __('home.firstpost_link') }}
											</a>
										</div>
									</div>
								</div>
							@endif


						<div class="col-sm-10 col-md-8 col-lg-4 p-b-40">
							@if ($posts->count() > 1)
								<div class="bg-0 h-full">
									<a href="{{ route('post.single', ['slug' => $second_post->slug ]) }}" class="hov-img0 of-hidden">
										<img src="{{ $second_post->featured }}" alt="{{ $second_post->title }}">
									</a>

									<div class="bg-0 p-rl-28 p-t-26 p-b-35">
										<h4 class="p-b-12">
											<a href="{{ route('post.single', ['slug' => $second_post->slug ]) }}" class="t1-m-1 cl-3 hov-link2 trans-02">

                                                    @if (app()->getLocale() == 'en')
                                                        {{ $second_post->title }}
                                                    @else
                                                        {{ $second_post->titlefr }}
                                                    @endif
											</a>
										</h4>

										<div class="flex-wr-s-c p-b-9">
											<div class="p-r-20">
												<i class="fs-14 cl-7 fa fa-calendar m-r-2"></i>

												<span class="t1-s-2 cl-7">
														{{ $second_post->created_at->toFormattedDateString() }}
												</span>
											</div>

											<div class="p-l-20 bo-l-1 bcl-12">
												<i class="fs-14 cl-7 fa fa-user m-r-2"></i>

												<a href="#" class="t1-s-2 cl-11 hov-link3">
													{{ $second_post->user->name }}
												</a>
											</div>
										</div>

										<p class="t1-s-2 cl-6 p-b-20">
                                            @if (app()->getLocale() == 'en')
                                                {!! $second_post->description !!}
                                            @else
                                                {!! $second_post->descriptionfr !!}
                                            @endif
										</p>

										<a href="{{ route('post.single', ['slug' => $second_post->slug ]) }}" class="d-inline-flex flex-c-c size-a-1 p-rl-15 t1-s-2 text-uppercase cl-0 bg-11 hov-btn1 trans-02">
											{{ __('home.secondpost_link') }}
										</a>
									</div>
								</div>
							@endif
						</div>

						<div class="col-sm-10 col-md-8 col-lg-4 p-b-40">
							@if ($posts->count() > 2)
								<div class="bg-0 h-full">
									<a href="{{ route('post.single', ['slug' => $third_post->slug ]) }}" class="hov-img0 of-hidden">
										<img src="{{ $third_post->featured }}" alt="{{ $third_post->title }}">
									</a>

									<div class="bg-0 p-rl-28 p-t-26 p-b-35">
										<h4 class="p-b-12">
											<a href="{{ route('post.single', ['slug' => $third_post->slug ]) }}" class="t1-m-1 cl-3 hov-link2 trans-02">
                                            @if (app()->getLocale() == 'en')
                                                {{ $third_post->title }}
                                            @else
                                                {{ $third_post->titlefr }}
                                            @endif
											</a>
										</h4>

										<div class="flex-wr-s-c p-b-9">
											<div class="p-r-20">
												<i class="fs-14 cl-7 fa fa-calendar m-r-2"></i>

												<span class="t1-s-2 cl-7">
														{{ $third_post->created_at->toFormattedDateString() }}
												</span>
											</div>

											<div class="p-l-20 bo-l-1 bcl-12">
												<i class="fs-14 cl-7 fa fa-user m-r-2"></i>

												<a href="#" class="t1-s-2 cl-11 hov-link3">
													{{ $third_post->user->name }}
												</a>
											</div>
										</div>

										<p class="t1-s-2 cl-6 p-b-20">
                                            @if (app()->getLocale() == 'en')

                                                {!! $third_post->description !!}

                                            @else
                                            {!! $third_post->descriptionfr !!}
                                            @endif

										</p>

										<a href="{{ route('post.single', ['slug' => $third_post->slug ]) }}" class="d-inline-flex flex-c-c size-a-1 p-rl-15 t1-s-2 text-uppercase cl-0 bg-11 hov-btn1 trans-02">
											{{ __('home.thirdpost_link') }}
										</a>
									</div>
								</div>
							@endif
						</div>
					</div>
				</div>
			</section>
		@endif

	<!-- Business Partners -->
		@if ($partners->count() == 0)
						
		@else
		<section class="bg-0 p-t-92 p-b-90">
            <div class="container">
                <!-- Title section -->
                <div class="flex-col-c-c p-b-50">
                    <h3 class="t1-b-1 cl-3 txt-center m-b-11">
                        {{ __('home.title_section_partner') }}
                    </h3>

                    <div class="size-a-2 bg-3"></div>
                </div>

				<!--  -->
				<div class="row justify-content-center">
                    <div class="col-md-10 col-lg-12">
                        <!-- Slick2 -->
                        <div class="wrap-slick2 rs1-slick2">
                            <div class="slide-slick">
								@if ($partners->count() > 0)
									<div class="item-slick p-rl-15">
										<div class="flex-col-s-c">
											<div class="w-full flex-wr-sa-c">
												@if ($partners->count() > 0)
													<a href="#" class="m-all-20">
														<img class="size-h-2 max-s-full" src="{{asset($first_partner->logo)}}" alt="IMG">
													</a>
												@endif

												@if ($partners->count() > 1)
													<a href="#" class="m-all-20">
													<img class="size-h-2 max-s-full" src="{{asset($second_partner->logo)}}" alt="IMG">
												</a>
												@endif
												
												@if ($partners->count() > 2 )
													<a href="#" class="m-all-20">
														<img class="size-h-2 max-s-full" src="{{asset($third_partner->logo)}}" alt="IMG">
													</a>
												@endif
												@if ($partners->count() > 3)
													<a href="#" class="m-all-20">
														<img class="size-h-2 max-s-full" src="{{asset($fourth_partner->logo)}}" alt="IMG">
													</a>
												@endif
												@if ($partners->count() > 4)
													<a href="#" class="m-all-20">
														<img class="size-h-2 max-s-full" src="{{asset($fifth_partner->logo)}}" alt="IMG">
													</a>
												@endif
											</div>
										</div>
									</div>
								@endif
                                
								@if ($partners->count() > 5)
									<div class="item-slick p-rl-15">
										<div class="flex-col-s-c">
											<div class="w-full flex-wr-sa-c">
												@if ($partners->count() > 5)
													<a href="#" class="m-all-20">
														<img class="size-h-2 max-s-full" src="{{asset($sixth_partner->logo)}}" alt="IMG">
													</a>
												@endif

												@if ($partners->count() > 6)
													<a href="#" class="m-all-20">
													<img class="size-h-2 max-s-full" src="{{asset($seventh_partner->logo)}}" alt="IMG">
												</a>
												@endif
												
												@if ($partners->count() > 7 )
													<a href="#" class="m-all-20">
														<img class="size-h-2 max-s-full" src="{{asset($eighth_partner->logo)}}" alt="IMG">
													</a>
												@endif
												@if ($partners->count() > 8)
													<a href="#" class="m-all-20">
														<img class="size-h-2 max-s-full" src="{{asset($ninth_partner->logo)}}" alt="IMG">
													</a>
												@endif
												@if ($partners->count() > 9)
													<a href="#" class="m-all-20">
														<img class="size-h-2 max-s-full" src="{{asset($tenth_partner->logo)}}" alt="IMG">
													</a>
												@endif
											</div>
										</div>
									</div>
								@endif
								
								@if ($partners->count() > 10)
									<div class="item-slick p-rl-15">
										<div class="flex-col-s-c">
											<div class="w-full flex-wr-sa-c">
												@if ($partners->count() > 10)
													<a href="#" class="m-all-20">
														<img class="size-h-2 max-s-full" src="{{asset($eleventh_partner->logo)}}" alt="IMG">
													</a>
												@endif

												@if ($partners->count() > 11)
													<a href="#" class="m-all-20">
													<img class="size-h-2 max-s-full" src="{{asset($twelfth_partner->logo)}}" alt="IMG">
												</a>
												@endif
												
												@if ($partners->count() > 12 )
													<a href="#" class="m-all-20">
														<img class="size-h-2 max-s-full" src="{{asset($thirteenth_partner->logo)}}" alt="IMG">
													</a>
												@endif
												@if ($partners->count() > 13)
													<a href="#" class="m-all-20">
														<img class="size-h-2 max-s-full" src="{{asset($fourteenth_partner->logo)}}" alt="IMG">
													</a>
												@endif
												@if ($partners->count() > 14)
													<a href="#" class="m-all-20">
														<img class="size-h-2 max-s-full" src="{{asset($fifteenth_partner->logo)}}" alt="IMG">
													</a>
												@endif
											</div>
										</div>
									</div>
								@endif
								@if ($partners->count() > 15)
									<div class="item-slick p-rl-15">
										<div class="flex-col-s-c">
											<div class="w-full flex-wr-sa-c">
												@if ($partners->count() > 15)
													<a href="#" class="m-all-20">
														<img class="size-h-2 max-s-full" src="{{asset($sixteenth_partner->logo)}}" alt="IMG">
													</a>
												@endif

												@if ($partners->count() > 16)
													<a href="#" class="m-all-20">
													<img class="size-h-2 max-s-full" src="{{asset($seventeenth_partner->logo)}}" alt="IMG">
												</a>
												@endif
												
												@if ($partners->count() > 17 )
													<a href="#" class="m-all-20">
														<img class="size-h-2 max-s-full" src="{{asset($eighteenth_partner->logo)}}" alt="IMG">
													</a>
												@endif
												@if ($partners->count() > 18)
													<a href="#" class="m-all-20">
														<img class="size-h-2 max-s-full" src="{{asset($nineteenth_partner->logo)}}" alt="IMG">
													</a>
												@endif
												@if ($partners->count() > 19)
													<a href="#" class="m-all-20">
														<img class="size-h-2 max-s-full" src="{{asset($twentieth_partner->logo)}}" alt="IMG">
													</a>
												@endif
											</div>
										</div>
									</div>
								@endif
								@if ($partners->count() > 20)
									<div class="item-slick p-rl-15">
										<div class="flex-col-s-c">
											<div class="w-full flex-wr-sa-c">
												@if ($partners->count() > 20)
													<a href="#" class="m-all-20">
														<img class="size-h-2 max-s-full" src="{{asset($twenty_first_partner->logo)}}" alt="IMG">
													</a>
												@endif

												@if ($partners->count() > 21)
													<a href="#" class="m-all-20">
													<img class="size-h-2 max-s-full" src="{{asset($twenty_second_partner->logo)}}" alt="IMG">
												</a>
												@endif
												
												@if ($partners->count() > 22 )
													<a href="#" class="m-all-20">
														<img class="size-h-2 max-s-full" src="{{asset($twenty_third_partner->logo)}}" alt="IMG">
													</a>
												@endif
												@if ($partners->count() > 23)
													<a href="#" class="m-all-20">
														<img class="size-h-2 max-s-full" src="{{asset($twenty_fourth_partner->logo)}}" alt="IMG">
													</a>
												@endif
												@if ($partners->count() > 24)
													<a href="#" class="m-all-20">
														<img class="size-h-2 max-s-full" src="{{asset($twenty_fifth_partner->logo)}}" alt="IMG">
													</a>
												@endif
											</div>
										</div>
									</div>
								@endif
                            </div>

                            <div class="wrap-dot-slick p-t-30"></div>
                        </div>
                    </div>
                </div>
            </div>
		</section>
		@endif

	<!-- end Home Content -->

@endsection

@section('styles')
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/revolution/css/layers.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/revolution/css/navigation.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/revolution/css/settings.css') }}">
@endsection


@section('scripts')
	<script src="{{ asset('vendor/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
	<script src="{{ asset('vendor/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
	<script src="{{ asset('vendor/revolution/js/extensions/revolution.extension.video.min.js') }}"></script>
	<script src="{{ asset('vendor/revolution/js/extensions/revolution.extension.carousel.min.js') }}"></script>
	<script src="{{ asset('vendor/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
	<script src="{{ asset('vendor/revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
	<script src="{{ asset('vendor/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
	<script src="{{ asset('vendor/revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
	<script src="{{ asset('vendor/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
	<script src="{{ asset('vendor/revolution/js/extensions/revolution.extension.migration.min.js') }}"></script>
	<script src="{{ asset('vendor/revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>
	<script src="{{ asset('js/revo-custom.js') }}"></script>
@endsection
