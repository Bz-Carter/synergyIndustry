@extends('layouts.frontend')

@section('content')
    <!-- Title page -->
	<section class="bg-img1 kit-overlay1" style="background-image: url({{asset('images/Copy.jpg')}});">
		<div class="container size-h-3 p-tb-30 flex-col-c-c">
			<h2 class="t1-b-1 text-uppercase cl-0 txt-center m-b-25">
				{{ __('about.titleUper') }}
			</h2>

			<div class="flex-wr-c-c">
				<a href="{{route('accueil')}}" class="breadcrumb-item">
					{{ __('about.breadcrumbitem1') }}
				</a>

				<span class="breadcrumb-item">
					{{ __('about.breadcrumbitem2') }}
				</span>
			</div>
		</div>
	</section>

	<!--  -->
	<section class="bg-0 p-t-92 p-b-60">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-sm-10 col-md-6 p-b-35">
					<!-- Title section -->
					<div class="flex-col-c-s p-b-35">
						<h3 class="t1-b-1 cl-3 m-b-11">
							{{ __('about.title1') }}
						</h3>

						<div class="size-a-2 bg-3"></div>
					</div>

					<div class="p-r-20 p-r-0-sr767">
						<p class="t1-s-2 cl-6 m-b-10">
							<span class="t1-s-5 cl-3">SYNERGY INDUSTRY:</span>  @lang('about.info1')
						</p>

						<p class="t1-s-2 cl-6 m-b-10">
							<span class="t1-s-5 cl-3">SYNERGY INDUSTRY:</span>  @lang('about.info2')
						</p>
						<p></p>
					</div>
				</div>

				<div class="col-sm-10 col-md-6 p-b-35">
					<!-- Title section -->
					<div class="flex-col-c-s p-b-8">
						<h3 class="t1-b-1 cl-3 m-b-11">
							{{ __('about.title2') }}
						</h3>

						<div class="size-a-2 bg-3"></div>
					</div>

					<!-- Progress -->
					<div class="wrap-progress size-w-6 w-full-sr767">

						@lang('about.info3')

					</div>
				</div>
			</div>
		</div>
	</section>

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

        	<!-- Expert -->
	<section class="bg-0 p-t-60 p-b-100 p-t-0-sr991">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-8 col-lg-12">
					<div class="bo-all-4 bcl-11">
						<div class="row justify-content-center">
                            @if (app()->getLocale() == 'en')
                                <div class="col-lg-12">
                                    <div class="p-l-50 p-r-20 p-t-43 p-b-50 p-rl-15-sr575">
                                        <!-- Title section -->
                                        <div class="flex-col-c-s p-b-35">
                                            <h3 class="t1-b-1 cl-3 m-b-11">
                                                Our Quality Policy
                                            </h3>

                                            <div class="size-a-2 bg-3"></div>
                                        </div>

                                        <p class="t1-s-2 cl-6 m-b-10">
                                            Our vision is to strengthen our position among the largest Inspection, Control, and Engineering companies and to become the leader in its sectors in Côte d'Ivoire and even in the sub-region.
                                        </p>
                                        <p class="t1-s-2 cl-6 m-b-10">
                                            To do this we have undertaken significant investments and will continue to do so to revitalize and develop our activities. The profitability and sustainability of our business depend on the loyalty and strengthening of our client portfolio.
                                        </p>

                                        <p class="t1-s-2 cl-6 m-b-10">
                                            This loyalty is never definitively won over to us and can be constantly questioned. Aware that no investor is effective, if it does not meet the needs and expectations of its customers and partners, we believe that our best asset for realizing our vision is our commitment to offer them the difference.
                                        </p>

                                        <p class="t1-s-2 cl-6 m-b-10">
                                            Our signature: <strong>"Your Partner for Reliability"</strong> reflects our commitment to satisfy our customers by offering them <strong>"quality"</strong>, that is to say:
                                            <ul>
                                                <li><i class="fa fa-long-arrow-right m-r-6"> <strong>By constantly listening to them;</strong></i></li>
                                                <li><i class="fa fa-long-arrow-right m-r-6"> <strong>By offering them a better service;</strong></i></li>
                                                <li><i class="fa fa-long-arrow-right m-r-6"> <strong>By respecting delivery times;</strong></i></li>
                                                <li><i class="fa fa-long-arrow-right m-r-6"> <strong>By responding promptly and effectively to their complaints;</strong></i></li>
                                                <li><i class="fa fa-long-arrow-right m-r-6"> <strong>By ensuring the maintenance and reliability of our equipment;</strong></i></li>
                                                <li><i class="fa fa-long-arrow-right m-r-6"> <strong>By continuously improving our platforms to achieve our vision and ensure the sustainability of our business.</strong></i></li>
                                            </ul>
                                        </p>
                                        <br>
                                        <p class="t1-s-2 cl-6 m-b-10">
                                            In addition, we undertake to carry out an annual management review during which we will assess our quality management system, with a view to improving our quality policy and the quality objectives that we have set ourselves through a better definition of our strategic quality guidelines.                                        </p>
                                        <p class="t1-s-2 cl-6 m-b-10">
                                            The implementation of the management and quality system will channel the energies and assets inherited from more than three (3) years of experience in the field.                                        </p>
                                        <p class="t1-s-2 cl-6 m-b-10">
                                            This policy, which will be widely disseminated, is one of the elements that embody our commitment.                                        </p>
                                        <p class="t1-s-2 cl-6 m-b-10">
                                            We therefore encourage all employees to adopt it and fully commit to its effective implementation.                                        </p>
                                        <p class="t1-s-2 cl-6 m-b-10">
                                            We will all have to work to achieve the company's quality objectives and vision.                                        </p>
                                        <br>

                                        <p class="t1-s-2 cl-6 m-b-10">
                                            <div class="txt-center">
                                                Done in Abidjan, July 12, 2016
                                            </div>
                                            <br>
                                            <br>
                                            <br>
                                            <div class="txt-right">
                                                    <span><strong>The Director General</strong></span><br>
                                            </div>
                                        </p>

                                    </div>
                                </div>
                            @else
                                <div class="col-lg-12">
                                    <div class="p-l-50 p-r-20 p-t-43 p-b-50 p-rl-15-sr575">
                                        <!-- Title section -->
                                        <div class="flex-col-c-s p-b-35">
                                            <h3 class="t1-b-1 cl-3 m-b-11">
                                                Notre Politique Qualité
                                            </h3>

                                            <div class="size-a-2 bg-3"></div>
                                        </div>

                                        <p class="t1-s-2 cl-6 m-b-10">
                                            Notre vision est de renforcer notre position parmi les plus grandes sociétés d'Inspection, Contrôle, et d'ingénierie et de devenir le leader dans ses secteurs en Côte d'Ivoire et même dans la sous-région.
                                        </p>

                                        <p class="t1-s-2 cl-6 m-b-10">
                                            Pour ce faire nous avons entrepris d'importants investissements et continuerons de le faire pour redynamiser et développer nos activités. La rentabilité et la pérennité de notre entreprise dépendent de la fidélité et du renforcement de notre portefeuille clients.
                                        </p>

                                        <p class="t1-s-2 cl-6 m-b-10">
                                            Cette fidélité ne nous est jamais définitivement acquise et peut être constamment remise en question. Conscient de ce qu'aucun investisseur n'est efficace, s'il ne permet de répondre aux besoins et aux attentes de ses clients et partenaires, nous pensons que notre meilleur atout pour réaliser notre vision est notre engagement à leur offrir la différence
                                        </p>

                                        <p class="t1-s-2 cl-6 m-b-10">
                                            Notre signature : <strong>"Your Partner for Reliability"</strong> traduit notre engagement à satisfaire nos clients en leur offrant <strong>"la qualité"</strong>, c'est à dire :
                                            <ul>
                                                <li><i class="fa fa-long-arrow-right m-r-6"> <strong>En étant constamment à leur écoute;</strong></i></li>
                                                <li><i class="fa fa-long-arrow-right m-r-6"> <strong>En leur offrant une meilleure prestation;</strong></i></li>
                                                <li><i class="fa fa-long-arrow-right m-r-6"> <strong>En respectant les délais de livraison;</strong></i></li>
                                                <li><i class="fa fa-long-arrow-right m-r-6"> <strong>En réagissant promptement et efficacement à leurs réclamations;</strong></i></li>
                                                <li><i class="fa fa-long-arrow-right m-r-6"> <strong>En assurant la maintenance et la fiabilité de nos équipements;</strong></i></li>
                                                <li><i class="fa fa-long-arrow-right m-r-6"> <strong>En améliorant continuellement nos plateformes pour réaliser notre vision et assurer la pérennité de notre entreprise.</strong></i></li>
                                            </ul>
                                        </p>
                                        <br>
                                        <p class="t1-s-2 cl-6 m-b-10">
                                            En outre nous nous engageons à réaliser une revue de direction annuelle au cours de laquelle nous évaluerons notre système de management de la qualité, en vue d'améliorer notre politique qualité et les objectives qualités que nous nous sommes fixés à travers une meilleure définition de nos orientations stratégiques en matière de qualité.
                                        </p>
                                        <p class="t1-s-2 cl-6 m-b-10">
                                            La mise en œuvre du système de management et de la qualité permettra de canaliser les énergies et les atouts hérités depuis plus de trois (3) années d'expériences dans le domaine.
                                        </p>
                                        <p class="t1-s-2 cl-6 m-b-10">
                                            La présente politique qui fera l'objet d'une large diffusion est l'un des éléments qui matérialisent notre engagement.
                                        </p>
                                        <p class="t1-s-2 cl-6 m-b-10">
                                            Aussi encourageons-nous, tous les employés à l'adopter et à s'engager entièrement pour sa mise en œuvre de façon efficace.
                                        </p>
                                        <p class="t1-s-2 cl-6 m-b-10">
                                            Nous devrons tous œuvrer pour atteindre les objectifs et la vision de l'entreprise en matière de qualité.
                                        </p>
                                        <br>

                                        <p class="t1-s-2 cl-6 m-b-10">
                                            <div class="txt-center">
                                                Fait à Abidjan, le 12 Juillet 2016
                                            </div>
                                            <br>
                                            <br>
                                            <br>
                                            <div class="txt-right">
                                                    <span><strong>Le Directeur Général</strong></span><br>
                                            </div>
                                        </p>

                                    </div>
                                </div>
                            @endif
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	    <!-- Testimonials -->
        <section class="bg-12 p-t-92 p-b-70">
            <div class="container">
                <!-- Title section -->
                <div class="flex-col-c-c p-b-50">
                    <h3 class="t1-b-1 cl-3 txt-center m-b-11">
                        {{ __('about.title3') }}
                    </h3>

                    <div class="size-a-2 bg-3"></div>
                </div>
                <!-- About -->
                <section class="bg-12 flex-wr-s-st m-b-15-sr991">
                    <div class="size-a-18 bg-img2 respon-3" style="background-image: url({{asset('images/treicheville.jpg')}});"></div>


                    <div class="size-w-5 p-rl-50 p-t-42 p-b-50 respon-4">
                        <!-- Title section -->

                        <div class="flex-col-c-s p-b-23">
                            <h3 class="t1-b-3 cl-3 m-b-11 m-t--6">
                                {{ __('about.title4') }}
                                <span class="dis-block t1-s-4 cl-3 p-b-8 p-t-26">
                                    @lang('about.info4')
                                </span>
                            </h3>
                        </div>
                        <br>
                        <!-- Location -->
                        <div class="wrap-progress size-w-6 w-full-sr991 p-t-10">
                            <div class="flex-col-c-s p-b-23">
                                <h3 class="t1-b-3 cl-3 m-b-11 m-t--6">
                                    {{ __('about.title5') }}
                                </h3>
                                <strong>{{ __('about.message5') }}</strong>

                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </section>
@endsection
