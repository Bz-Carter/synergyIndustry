@extends('layouts.frontend')

@section('content')
    <!-- Title page -->
	<section class="bg-img1 kit-overlay1" style="background-image: url({{asset('images/Copy.jpg')}});">
		<div class="container size-h-3 p-tb-30 flex-col-c-c">
			<h2 class="t1-b-1 text-uppercase cl-0 txt-center m-b-25">
				{{ __('contact.titleUper') }}
			</h2>

			<div class="flex-wr-c-c">
				<a href="{{route('accueil')}}" class="breadcrumb-item">
					{{ __('contact.breadcrumbitem1') }}
				</a>

				<span class="breadcrumb-item">
					{{ __('contact.breadcrumbitem2') }}
				</span>
			</div>
		</div>
	</section>

	<!-- Contact -->
	<section class="bg-0 p-t-95 p-b-40">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-sm-10 col-md-6 p-b-60">
					<h3 class="t1-m-5 cl-3 m-b-44">
						{{ __('contact.message1') }}
					</h3>

                    <form id="contact-form" class="validate-form" method="post" action="includes/contact-form.php" name="contact">
                        {{ csrf_field() }}
						<div class="m-b-15 validate-input" data-validate = "Name is required">
							<input class="size-a-3 t1-m-2 plh-6 cl-6 p-rl-20 bo-1-rad-4 bcl-12 focus-in1" type="text" name="name" placeholder="{{ __('contact.lab1') }}">
						</div>

						<div class="m-b-15 validate-input" data-validate = "Valid email is: ex@abc.xyz">
							<input class="size-a-3 t1-m-2 plh-6 cl-6 p-rl-20 bo-1-rad-4 bcl-12 focus-in1" type="text" name="email" placeholder="{{ __('contact.lab2') }}">
						</div>

						<div class="m-b-15 validate-input" data-validate = "Phone is required">
							<input class="size-a-3 t1-m-2 plh-6 cl-6 p-rl-20 bo-1-rad-4 bcl-12 focus-in1" type="text" name="phone" placeholder="{{ __('contact.lab3') }}">
						</div>

						<div class="m-b-30 validate-input" data-validate = "Message is required">
							<textarea class="size-a-14 t1-m-2 plh-6 cl-6 p-rl-20 p-tb-13 bo-1-rad-4 bcl-12 focus-in1" name="msg" placeholder="{{ __('contact.lab4') }}"></textarea>
						</div>

						<button class="size-a-15 flex-c-c bg-11 t1-s-2 text-uppercase cl-0 hov-btn1 trans-02 p-rl-15">
							{{ __('contact.btn') }}
						</button>
					</form>
				</div>

				<div class="col-sm-10 col-md-6 p-b-60">
					<div class="p-l-30 p-l-0-sr767">
						<h3 class="t1-m-5 cl-3 m-b-38">
							{{ __('contact.message2') }}
						</h3>

						<p class="t1-s-2 cl-6 m-b-9">
							{{ __('contact.info') }}
						</p>

						<ul class="p-t-11">
							<li class="flex-wr-s-s t1-s-2 cl-6 p-b-8">
								<span class="size-w-3 cl-5">
									<i class="fa fa-home" aria-hidden="true"></i>
								</span>

								<span class="size-w-4">
									{{$settings->address}}
								</span>
							</li>

							<li class="flex-wr-s-s t1-s-2 cl-6 p-b-8">
								<span class="size-w-3 cl-5">
									<i class="fa fa-envelope-o" aria-hidden="true"></i>
								</span>

								<span class="size-w-4">
									{{ $settings->contact_email }}
								</span>
							</li>

							<li class="flex-wr-s-s t1-s-2 cl-6 p-b-8">
								<span class="size-w-3 cl-5">
									<i class="fa fa-phone" aria-hidden="true"></i>
								</span>

								<span class="size-w-4">
									{{$settings->contact_number_1}}
									<br>
									{{$settings->contact_number_2}}
								</span>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection




@section('scripts')
    <!--===============================================================================================-->
    <script src="{{asset('vendor/sweetalert/sweetalert.min.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{asset('js/contact.js')}}"></script>
@endsection
