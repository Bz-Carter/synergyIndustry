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
			<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <!--<div class="card">
                        <div  class="header">
                            <h2>Advanced Form Example With Validation</h2>
                            
                        </div>
                        <div class="body wizard_validation">
                            <form id="wizard_with_validation" method="POST">
                                <h3>Account Information</h3>
                                <fieldset>
                                    <div class="row clearfix">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <label class="input-group-text" for="inputGroupSelect01"><strong>What is your budget?</strong></label>
                                                    </div>
                                                    <select class="custom-select form-control" required>
                                                        <option value="">Choose...</option>
                                                        <option value="1">1. My budget is under $500</option>
                                                        <option value="2">2. My budget is between $500 and $1000</option>
                                                        <option value="3">3. My budget is between $1000 and $1500</option>
                                                        <option value="4">3. My budget is between $1000 and $1500</option>
                                                    </select>
                                                    <p id="error-multiselect"></p>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-12">
                                            <div align="left" class="form-group">
                                                <label><strong>What your poject need?</strong></label>
                                                <br/>
                                                <label class="fancy-checkbox">
                                                    <input type="checkbox"  name="checkbox" required data-parsley-errors-container="#error-checkbox" >
                                                    <span>Custom interface and layout</span>
                                                </label>
                                                <label class="fancy-checkbox">
                                                    <input type="checkbox"  name="checkbox">
                                                    <span>Web site design</span>
                                                </label>
                                                <label class="fancy-checkbox">
                                                    <input type="checkbox"  name="checkbox">
                                                    <span>Seo optimization</span>
                                                </label>
                                                <label class="fancy-checkbox">
                                                    <input type="checkbox"  name="checkbox">
                                                    <span>CMS integrations</span>
                                                </label>
                                                <label class="fancy-checkbox">
                                                    <input type="checkbox"  name="checkbox">
                                                    <span>Domain registration</span>
                                                </label>
                                                <label class="fancy-checkbox">
                                                    <input type="checkbox"  name="checkbox">
                                                    <span>Hosting plan</span>
                                                </label>
                                                <p id="error-checkbox"></p>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><strong>Additional info</strong></span>
                                                </div>
                                                <textarea cols="30" rows="3" placeholder="More info *" class="form-control" required></textarea>
                                            </div>                                    
                                        </div>
                                    </div>
                                </fieldset>
                                <h3>Profile Information</h3>
                                <fieldset>
                                    <div class="row clearfix">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <h6  align="left">If you already have an hosting plan, please define:</h6>
                                                <select class="custom-select" id="inputGroupSelect01">
                                                    <option selected>Choose...</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <h6  align="left">If you need an hosting plan, please define which one:</h6>
                                                <select class="custom-select" id="inputGroupSelect01">
                                                    <option selected>Choose...</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <h6  align="left">If you need a newsletter campaign, please define the provider you prefer:</h6>
                                                <select class="custom-select" id="inputGroupSelect01">
                                                    <option selected>Choose...</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                                <h3>Profile Information</h3>
                                <fieldset>
                                    <div class="row clearfix">
                                        <div class="col-lg-4 col-md-12">
                                            <div class="form-group">
                                                <input type="text" name="name" placeholder="Company Name *" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-12">
                                            <div class="form-group">
                                                <input type="text" name="firstame" placeholder=" First Name *" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-12">
                                            <div class="form-group">
                                                <input type="text" name="lastnameame" placeholder="Last Name *" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12">
                                            <div class="form-group">
                                                <input type="email" name="email" placeholder="Your E-mail *" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12">
                                            <div class="form-group">
                                                <input type="phone" name="phone" placeholder="Your Phone *" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <select class="custom-select" id="inputGroupSelect01">
                                                    <option selected>Select Country...</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                                <h3>Terms Conditions - Finish</h3>
                                <fieldset>
                                    <div class="form-group">
                                        <div class="fancy-checkbox">
                                            <label><input type="checkbox" name="acceptTerms"><span>I agree with the Terms and Conditions.</span></label>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div> -->
                    <div class="theme-blue">
                        <div class="body wizard_validation">
                            <form id="wizard_with_validation" method="POST" novalidate data-parsley-validate novalidate>
                                <h3>Project Information</h3>
                                <fieldset>
                                    <div class="row clearfix">
                                        
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div align="left">
                                                    <label><strong>What is your budget?</strong></label>
                                                <br/>
                                                <select class="custom-select form-control" required>
                                                    <option value="">Choose...</option>
                                                    <option value="1">1. My budget is under $500</option>
                                                    <option value="2">2. My budget is between $500 and $1000</option>
                                                    <option value="3">3. My budget is between $1000 and $1500</option>
                                                    <option value="4">4. My budget is over $1500</option>
                                                </select>
                                                </div>
                                            </div>
                                            
                                            
                                            <div class="form-group">
                                                <div align="left">
                                                    <label><strong>What Your Project need?</strong></label>
                                                <br/>
                                                </div>
                                                <textarea name="address" cols="30" rows="3" placeholder="More info *" class="form-control no-resize" required></textarea>
                                            </div>                                            
                                        </div>
                                    </div>
                                </fieldset>
                                <h3>Personal Information</h3>
                                <fieldset>
                                    <div class="row clearfix">
                                        <div class="col-lg-4 col-md-12">
                                            <div class="form-group">
                                                <input type="text" name="company" placeholder="Your Company Name *" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-12">
                                            <div class="form-group">
                                                <input type="text" name="name" placeholder="Your Full Name *" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-12">
                                            <div class="form-group">
                                                <input type="email" name="email" placeholder=" Your Email *" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12">
                                            <div class="form-group">
                                                <input type="text" name="country" placeholder="Your country *" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12">
                                            <div class="form-group">
                                                <input type="telephone" name="telephone" placeholder="Your Telephone *" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <textarea name="adress" cols="30" rows="3" placeholder="Your Adress *" class="form-control" required></textarea>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </fieldset>
                                <h3>Terms Conditions - Finish</h3>
                                <fieldset>
                                    <div class="form-group">
                                        <div class="fancy-checkbox">
                                            <div align="left">
                                                Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.

                                                Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus. Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.
                                                
                                                Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.

                                                Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus. Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.
                                                
                                                Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.

                                                Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus. Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.
                                                
                                                Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.
                                            </div>
                                            <div class=""><br></div>
                                            <div class=""><br></div>
                                            <label><input type="checkbox" name="acceptTerms" required><span><strong>I agree with the Terms and Conditions.</strong></span></label>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
		</div>
    </section>
@endsection

@section('styles')
<link rel="stylesheet" href="{{asset('assets/vendor/animate-css/animate.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/vendor/jquery-steps/jquery.steps.css')}}">
<link rel="stylesheet" href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/vendor/font-awesome/css/font-awesome.min.css')}}">



<link rel="stylesheet" href="{{asset('assets/css/main2.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/color_skins.css')}}">

<link rel="stylesheet" href="{{asset('assets/vendor/parsleyjs/css/parsley.css')}}">


<style>



</style>



@endsection

@section('scripts')
    <script src="{{asset('assets/bundles/vendorscripts.bundle.js')}}"></script>

    <script src="{{asset('assets/vendor/jquery-validation/jquery.validate.js')}}"></script> <!-- Jquery Validation Plugin Css -->
    <script src="{{asset('assets/vendor/jquery-steps/jquery.steps.js')}}"></script> <!-- JQuery Steps Plugin Js -->

    <script src="{{asset('assets/bundles/mainscripts.bundle.js')}}"></script>
    <script src="{{asset('assets/js/pages/forms/form-wizard.js')}}"></script>


    <script src="{{asset('assets/vendor/parsleyjs/js/parsley.min.js')}}"></script>
        
    <script src="{{asset('assets/bundles/mainscripts.bundle.js')}}"></script>
    <script src="{{asset('assets/bundles/morrisscripts.bundle.js')}}"></script>
    <script src="{{asset('assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js')}}"></script>

    <script>
         $(function() {
        // initialize after multiselect
        $('#basic-form').parsley();
    });
    </script>
    
@endsection
