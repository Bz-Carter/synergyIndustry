@extends('layouts.frontend')

@section('content')
    <!-- Title page -->
	<section class="bg-img1 kit-overlay1" style="background-image: url({{asset('images/Copy.jpg')}});">
		<div class="container size-h-3 p-tb-30 flex-col-c-c">
			<h2 class="t1-b-1 text-uppercase cl-0 txt-center m-b-25 validate-input" data-validate = "Name is required">
				{{ __('emploi.titleUper') }}
			</h2>

			<div class="flex-wr-c-c">
				<a href="{{route('accueil')}}" class="breadcrumb-item">
					{{ __('emploi.breadcrumbitem1') }}
				</a>

				<span class="breadcrumb-item">
					{{ __('emploi.breadcrumbitem2') }}
				</span>
			</div>
		</div>
    </section>

    <!-- Call back -->
	<section class="bg-10 p-t-92 p-b-45">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 p-b-30">
					<!-- Title section -->
					<div class="flex-col-c-s p-b-20">
						<h3 class="t1-b-1 cl-0 m-b-11">
							POSTULER
						</h3>

						<div class="size-a-2 bg-0"></div>
					</div>

					<p class="t1-s-2 cl-0">
                        Il arrive que Synergy Industry ouvre des sessions de recrutement en vue d'offrir des stages ou des emplois, envoyez nous votre CV via notre plateforme et nous vous contacterons quand le moment viendra.
                    </p>
				</div>
                <div class="col-lg-8 p-b-30 p-t-8">
                    <form id="emploi-form" class="validate-form"  method="post" action="/offre/employments" enctype="multipart/form-data" name="employment">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-sm-6 p-b-25 validate-input" data-validate = "Name is required">
                                <div class="size-a-3">
                                    <input class="s-full bg-0 t1-m-2 cl-6 plh-6 p-rl-20" type="text" name="name" placeholder="Votre Nom" >
                                </div>
                            </div>

                            <div class="col-sm-6 p-b-25 validate-input" data-validate = "Email is required">
                                <div class="size-a-3">
                                    <input class="s-full bg-0 t1-m-2 cl-6 plh-6 p-rl-20" type="email" name="email" placeholder="Votre E-mail" >
                                </div>
                            </div>
                            <div class="col-sm-6 p-b-25 validate-input" data-validate = "CV is required">
                                <div class="size-a-3">
                                    <p class="t1-s-2 cl-0">
                                        Téléverser CV
                                    </p>
                                    <input class="s-full bg-0 t1-m-2 cl-6 plh-6 p-rl-20" type="file" name="document" id="file" placeholder="téléverser">
                                </div>
                            </div>
                            <BR></BR><BR></BR>
                            <div class="col-sm-6 p-b-25">
                                <div class="rs1-select2 bor9 bg0">
                                    <p class="t1-s-2 cl-0">
                                        Choix Objet
                                    </p>
                                    <select class="js-select2" name="objet" required>
                                        <option></option>
                                        <option value="stage">Stage</option>
                                        <option value="emploi">Emploi</option>
                                    </select>
                                    <div class="dropDownSelect2"></div>
                                </div>
                            </div>

                            <div class="col-sm-6 p-b-25 validate-input" data-validate = "Message is required">
                                <div class="size-a-3">
                                    <textarea class="s-full bg-0 t1-m-2 cl-6 plh-6 p-rl-20" name="message" placeholder="Votre Message" style="margin-top: 0px; margin-bottom: 0px; height: 95px;" ></textarea>
                                </div>
                            </div>

                            <div class="col-sm-6 p-b-25 validate-input">
                                <p class="t1-s-2 cl-0">
                                    &emsp;&emsp;
                                </p>
                                <button class="flex-c-c size-a-4 bg-11 t1-s-2 text-uppercase cl-0 hov-btn2 trans-02 p-rl-15">
                                    Soumettre
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
			</div>
		</div>
    </section>
@endsection

@section('scripts')
    <!--===============================================================================================-->
    <script src="{{asset('vendor/sweetalert/sweetalert.min.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{asset('js/emploi.js')}}"></script>
@endsection
