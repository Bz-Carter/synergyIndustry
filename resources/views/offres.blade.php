
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <meta name="description" content="QUOTE - Request a quote for every type of companies">
    <meta name="author" content="IvoireLightTechnologies">
    <title>Synergy Industry - Offres</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="{{asset('quotes/img/favicon.png')}}" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="{{asset('quotes/img/apple-touch-icon-57x57-precomposed.png')}}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="{{asset('quotes/img/apple-touch-icon-72x72-precomposed.png')}}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="{{asset('quotes/img/apple-touch-icon-114x114-precomposed.png')}}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="{{asset('quotes/img/apple-touch-icon-144x144-precomposed.png')}}">

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="{{asset('quotes/css/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('quotes/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('quotes/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('quotes/css/icon_fonts/css/all_icons_min.css')}}" rel="stylesheet">
    <link href="{{asset('quotes/css/magnific-popup.min.css')}}" rel="stylesheet">
    <link href="{{asset('quotes/css/skins/square/yellow.css')}}" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="{{asset('quotes/css/custom.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/vendor/toastr/toastr.min.css') }}">

</head>

<body>
    
    <div id="loader_form">
		<div data-loader="circle-side-2"></div>
	</div><!-- /Loader_form -->

    <header>
        <div id="logo_home">
            <h1><a href="{{ url('/') }}" title="Synergy Industry">Synergy Industry - Demander un devis</a></h1>
        </div>
        
        <a id="menu-button-mobile" class="cmn-toggle-switch cmn-toggle-switch__htx" href="javascript:void(0);"><span>Menu mobile</span></a>
        <nav class="main_nav">
            <ul class="nav nav-tabs">
                <li><a href="#tab_1" data-toggle="tab">Request a quote</a></li>
                <li><a href="#tab_2" data-toggle="tab">Apply for a job</a></li>
                <li><a href="{{route('contactUs')}}" >@lang('head.cont')</a></li>
            </ul>
        </nav>
    </header><!-- /header -->

    <div class="intro_txt animated fadeInUp">
        <h2>OUR ONLINE QUERY PLATFORM</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit qui voluptatum enim est deserunt assumenda, aspernatur quam aperiam!</p>
    </div><!-- /intro_txt -->
    
    <video id="my-video" class="video" loop muted autoplay playsinline>
      <source src="{{asset('quotes/media/demo.mp4')}}" type="video/mp4">
      <source src="{{asset('quotes/media/demo.ogv')}}" type="video/ogg">
      <source src="{{asset('quotes/media/demo.webm')}}" type="video/webm">
	</video><!-- /video -->
    <div class="video_fallback"></div>

    <div class="layer"></div><!-- /mask -->

    <div id="main_container">
       
        <div id="header_in">
            <a href="#0" class="close_in "><i class="pe-7s-close-circle"></i></a>
        </div>

        <div class="wrapper_in">
            <div class="container-fluid">
                <div class="tab-content">
                    <div class="tab-pane fade" id="tab_1">                                               
                        <div class="subheader" id="quote"></div>
                        <div class="row">
                            <aside class="col-xl-3 col-lg-4">
                                <h2>Demandez un devis et comparez les prix!</h2>
                                <p class="lead">Il vous suffit de suivre les différentes étapes.</p>
                                <ul class="list_ok">
                                    <li>Définir le budget de votre projet.</li>
                                    <li>Définir les besoins de votre projet.</li>
                                    <li>Répondre aux questions.</li>
                                    <li>Vos coordonnées.</li>
                                </ul>
                            </aside><!-- /aside -->

                            <div class="col-xl-9 col-lg-8">
                                <div id="wizard_container">
                                    <div id="top-wizard">
                                        <strong>Progress</strong>
                                        <div id="progressbar"></div>
                                    </div><!-- /top-wizard -->

                                    <form action="/offre/quotes" method="POST">
                                        @csrf
                                        <input id="website" name="website" type="text" value=""><!-- Leave for security protection, read docs for details -->
                                        <div id="middle-wizard">
                                            <div class="step">
                                                <h3 class="main_question"><strong>1/4</strong>What is your budget?</h3>
                                                
                                                <div class="form-group radio_questions">
                                                    <label>1. My budget is under $500
                                                        <input name="question_1" type="radio" value="My budget is under $500" class="icheck required">
                                                    </label>
                                                </div>
                                                <div class="form-group radio_questions">
                                                    <label>2. My budget is between $500 and $1000
                                                        <input name="question_1" type="radio" value="My budget is between $500 and $1000" class="icheck required">
                                                    </label>
                                                </div>
                                                <div class="form-group radio_questions">
                                                    <label>3. My budget is between $1000 and $1500
                                                        <input name="question_1" type="radio" value="My budget is between $1000 and $1500" class="icheck required">
                                                    </label>
                                                </div>
                                                <div class="form-group radio_questions">
                                                    <label>4. My budget is over $1500
                                                        <input name="question_1" type="radio" value="My budget is over $1500" class="icheck required">
                                                    </label>
                                                </div>
                                                
                                            </div><!-- /step 1-->

                                            <div class="step">
                                                <h3 class="main_question"><strong>2/4</strong>What your poject need?</h3>

                                                <div class="row add_bottom_30">
                                                   
                                                    <div class="col-sm-6">
                                                        <div class="form-group checkbox_questions">
                                                            <label>
                                                                <input name="question_2[]" type="checkbox" value="Custom interface and layout" class="icheck required">Custom interface and layout
                                                            </label>
                                                        </div>
                                                        <div class="form-group checkbox_questions">
                                                            <label>
                                                                <input name="question_2[]" type="checkbox" value="Web site design" class="icheck required">Web site design
                                                            </label>
                                                        </div>
                                                        <div class="form-group checkbox_questions">
                                                            <label>
                                                                <input name="question_2[]" type="checkbox" value="Seo optimization" class="icheck required">Seo optimization
                                                            </label>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-sm-6">
                                                        <div class="form-group checkbox_questions">
                                                            <label>
                                                                <input name="question_2[]" type="checkbox" value="CMS integrations (Wordpress)" class="icheck required">CMS integrations (Wordpress)
                                                            </label>
                                                        </div>
                                                        <div class="form-group checkbox_questions">
                                                            <label>
                                                                <input name="question_2[]" type="checkbox" value="Domain registration" class="icheck required">Domain registration
                                                            </label>
                                                        </div>
                                                        <div class="form-group checkbox_questions">
                                                            <label>
                                                                <input name="question_2[]" type="checkbox" value="Hosting plan" class="icheck required">Hosting plan
                                                            </label>
                                                        </div>
                                                        
                                                    </div>
                                                </div><!-- /row-->
                                                <div class="form-group textarea_info">
                                                    <label>Additional info</label>
                                                    <textarea name="addtional_info" class="form-control" style="height:150px;" placeholder="How many pages, other details, etc..."></textarea>
                                                </div>
                                            </div><!-- /step 2-->

                                            <div class="step">
                                                <h3 class="main_question"><strong>3/4</strong>Please answer the following questions:</h3>

                                                <div class="row">
                                                   
                                                    <div class="col-lg-10">
                                                        <div class="form-group select">
                                                            <label>If you already have an hosting plan, please define:</label>
                                                            <div class="styled-select">
                                                                <select class="required" name="select_1">
                                                                    <option value="" selected>Select</option>
                                                                    <option value="Unix/Linux + Mysql">Unix/Linux + Mysql</option>
                                                                    <option value="Windows + Sql">Windows + Sql</option>
                                                                    <option value="Other">Other</option>
                                                                </select>
                                                            </div>
                                                        </div><!-- /select-->

                                                        <div class="form-group select">
                                                            <label>If you need an hosting plan, please define which one:</label>
                                                            <div class="styled-select">
                                                                <select class="required" name="select_2">
                                                                    <option value="" selected>Select</option>
                                                                    <option value="Hosting Plan 1 year + Mysql database 500MB">1 year + Mysql database 500MB</option>
                                                                    <option value="Hosting Plan 2 year + Mysql database 500MB">2 year + Mysql database 500MB</option>
                                                                    <option value="Hosting Plan 2 year + Mysql database 1GB">2 year + Mysql database 1GB</option>
                                                                </select>
                                                            </div>
                                                        </div><!-- /select-->

                                                        <div class="form-group select">
                                                            <label>If you need a newsletter campaign, please define the provider you prefer:</label>
                                                            <div class="styled-select">
                                                                <select class="required" name="select_3">
                                                                    <option value="" selected>Select</option>
                                                                    <option value="Mailchimp">Mailchimp</option>
                                                                    <option value="CampaignMonitor">CampaignMonitor</option>
                                                                    <option value="MailUp">MailUp</option>
                                                                </select>
                                                            </div>
                                                        </div><!-- /select-->
                                                    </div>
                                                </div><!-- /row-->
                                            </div><!-- /step 3-->

                                            <div class="submit step">

                                                <h3 class="main_question"><strong>4/4</strong>Please fill with your details</h3>

                                                <div class="row">
                                                   
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <input type="text" name="company_name" class="form-control" placeholder="Your company name">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" name="firstname" class="required form-control" placeholder="First name">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" name="lastname" class="required form-control" placeholder="Last name">
                                                        </div>
                                                    </div><!-- /col-sm-6 -->

                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <input type="email" name="email" class="required form-control" placeholder="Your Email">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" name="telephone" class="required form-control" placeholder="Your Telephone">
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="styled-select">
                                                                <select class="required" name="country">
                                                                    <option value="" selected>Select your country</option>
                                                                    <option value="Europe">Europe</option>
                                                                    <option value="Asia">Asia</option>
                                                                    <option value="North America">North America</option>
                                                                    <option value="South America">South America</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                    </div><!-- /col-sm-6 -->
                                                </div><!-- /row -->
                                                
                                                <div class="form-group checkbox_questions">
                                                    <input name="terms" type="checkbox" class="icheck required" value="yes">
                                                    <label>Please accept <a href="#" data-toggle="modal" data-target="#terms-txt">terms and conditions</a> ?
                                                    </label>
                                                </div>

                                            </div><!-- /step 4-->

                                        </div><!-- /middle-wizard -->
                                        <div id="bottom-wizard">
                                            <button type="button" name="backward" class="backward">Backward </button>
                                            <button type="button" name="forward" class="forward">Forward</button>
                                            <button type="submit" name="process" class="submit">Submit</button>
                                        </div><!-- /bottom-wizard -->
                                    </form>
                                </div><!-- /Wizard container -->

                            </div><!-- /col -->
                        </div><!-- /row -->
                        </div><!-- /TAB 1:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->
                    
                    <div class="tab-pane fade" id="tab_2">
                       <div class="subheader" id="about"></div>
                        <div class="row">
                            <div class="col-lg-8">
                                <h2>POSTULER</h2>
                                <p class="lead">Il arrive que Synergy Industry ouvre des sessions de recrutement en vue d'offrir des stages ou des emplois, envoyez nous votre CV via notre plateforme et nous vous contacterons quand le moment viendra.</p>
                                <form action="/offre/employments" method="post" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input type="text" name="name" class="required form-control" placeholder="Votre Nom & Prénom" required
                                                oninvalid="this.setCustomValidity('Entrer votre nom et prénom !')" oninput="this.setCustomValidity('')">
                                            </div>
                                            <div class="form-group">
                                                <input type="email" name="email" class="required form-control" placeholder="Votre E-mail" required
                                                oninvalid="this.setCustomValidity('Entrer votre adresse e-mail !')" oninput="this.setCustomValidity('')">
                                            </div>
                                            <div class="form-group">
                                                <label for="document">Téléverser Votre CV</label>
                                                <input type="file" name="document" class="required form-control" placeholder="téléverser" required
                                                oninvalid="this.setCustomValidity('Téléverser le fichier de votre CV !')" oninput="this.setCustomValidity('')">
                                            </div>
                                        </div><!-- /col-sm-6 -->

                                        <div class="col-sm-6">
                                            
                                            <div class="form-group">
                                                <input type="phone" name="telephone" class="required form-control" placeholder="Votre télépone" data-validate = "Telephone is required" required
                                                oninvalid="this.setCustomValidity('Entrer votre numéro de téléphone !')" oninput="this.setCustomValidity('')">
                                            </div>
                                            <div class="form-group">
                                                <div class="styled-select">
                                                    <select class="required" name="object" required
                                                    oninvalid="this.setCustomValidity('Sélectionner l\'objet de votre requête !')" oninput="this.setCustomValidity('')">
                                                        <option value="" selected>Choix Objet</option>
                                                        <option value="stage">Stage</option>
                                                        <option value="emploi">Emploi</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group textarea_info">
                                                <label>Message</label>
                                                <textarea name="message" class="form-control" style="height:150px;" placeholder="la saise du message est facultative..."></textarea>
                                            </div>
                                        </div><!-- /col-sm-6 -->
                                    </div><!-- /row -->
                                    <div id="bottom-wizard">
                                        <button type="submit" name="process" class="submit">Soumettre</button>
                                    </div>
                                </form>
                            </div><!-- /col -->
                            
                            <aside class="col-lg-4">
                                <div class="more_padding_left">
                                    <div class="widget" id="review">
                                        <h4>reviews</h4>
                                        <div class="owl-carousel owl-theme add_bottom_30">
                                            <div class="item">
                                                <blockquote class="testimonial">
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat. Donec hendrerit vehicula est, in consequat. Donec hendrerit vehicula est, in consequat.
                                                    </p>
                                                </blockquote>
                                                <div class="testimonial-arrow-down">
                                                </div>
                                                <div class="testimonial-author">
                                                    <div class="img-thumbnail img-thumbnail-small">
                                                        <img src="{{asset('quotes/img/avatar1.jpg')}}" alt="">
                                                    </div>
                                                    <p>
                                                        <strong>Mark Smith</strong><span>October 2016</span>
                                                    </p>
                                                </div>
                                            </div><!-- /item -->
                                            <div class="item">
                                                <blockquote class="testimonial">
                                                    <p>
                                                        Donec hendrerit vehicula est, in consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat. Donec hendrerit vehicula est, in consequat. Donec hendrerit vehicula est, in consequat.
                                                    </p>
                                                </blockquote>
                                                <div class="testimonial-arrow-down">
                                                </div>
                                                <div class="testimonial-author">
                                                    <div class="img-thumbnail img-thumbnail-small">
                                                        <img src="{{asset('quotes/img/avatar2.jpg')}}" alt="">
                                                    </div>
                                                    <p>
                                                        <strong>Mark Smith</strong><span>September 2016</span>
                                                    </p>
                                                </div>
                                            </div><!-- /item -->
                                            <div class="item">
                                                <blockquote class="testimonial">
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat. Donec hendrerit vehicula est, in consequat.
                                                    </p>
                                                </blockquote>
                                                <div class="testimonial-arrow-down">
                                                </div>
                                                <div class="testimonial-author">
                                                    <div class="img-thumbnail img-thumbnail-small">
                                                        <img src="{{asset('quotes/img/avatar3.jpg')}}" alt="">
                                                    </div>
                                                    <p>
                                                        <strong>Mark Smith</strong><span>July 2016</span>
                                                    </p>
                                                </div>
                                            </div><!-- /item -->
                                        </div><!-- /carousel -->
                                    </div><!-- /reviews -->
                                    <div class="widget" id="gallery">
                                        <h4>gallery</h4>
                                        <ul class="magnific-gallery">
                                            <li>
                                                <a href="{{asset('quotes/img/gallery/large_1.jpg')}}" title="image title">
                                                    <figure><img src="{{asset('quotes/img/gallery/thumb_1.jpg')}}" alt="thumb"></figure>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{asset('quotes/img/gallery//large_2.jpg')}}" title="image title">
                                                    <figure><img src="{{asset('quotes/img/gallery/thumb_2.jpg')}}" alt="thumb"></figure>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{asset('quotes/img/gallery/large_3.jpg')}}" title="image title">
                                                    <figure><img src="{{asset('quotes/img/gallery/thumb_3.jpg')}}" alt="thumb"></figure>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{asset('quotes/img/gallery/large_4.jpg')}}" title="image title">
                                                    <figure><img src="{{asset('quotes/img/gallery/thumb_2.jpg')}}" alt="thumb"></figure>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{asset('quotes/img/gallery/large_5.jpg')}}" title="image title">
                                                    <figure><img src="{{asset('quotes/img/gallery/thumb_3.jpg')}}" alt="thumb"></figure>
                                                </a>
                                            </li>
                                        </ul>
                                    </div><!-- /gallery -->
                                     <div class="widget" id="follow">
                                        <h4>follow us</h4>
                                        <ul>
                                            <li><a href="#"><i class="icon-facebook"></i>Facebook</a></li>
                                            <li><a href="#"><i class="icon-twitter"></i>Twitter</a></li>
                                            <li><a href="#"><i class="icon-google"></i>Google plus</a></li>
                                            <li><a href="#"><i class="icon-instagram"></i>Instagram</a></li>
                                        </ul>
                                    </div><!-- /follow -->
                                </div><!-- /more padding left -->
                            </aside>
                        </div><!-- /row -->
                    </div><!-- /TAB 2:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->
                    
                   
                </div><!-- /tab content -->
            </div><!-- /container-fluid -->
        </div><!-- /wrapper_in -->
    </div><!-- /main_container -->

    <div id="additional_links">
        <ul>
            <li><strong>© 2020 Synergy Industry</strong></li>
            <li><a href="{{ url('/') }}" class="animated_link">@lang('head.ho')</a></li>
            <li><a href="{{route('ourservices')}}" class="animated_link">@lang('head.ser')</a></li>
			<li><a href="{{route('références')}}" class="animated_link">@lang('head.ref')</a></li>
            <li><a href="{{route('news')}}" class="animated_link">@lang('head.actu')</a></li>
            <li><a href="{{route('aboutUs')}}" class="animated_link">@lang('head.abou')</a></li>
        </ul>
    </div>
    <!-- /add links -->

    <!-- Modal terms -->
    <div class="modal fade" id="terms-txt" tabindex="-1" role="dialog" aria-labelledby="termsLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Terms and conditions</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					  <span aria-hidden="true">&times;</span>
					</button>
                </div>
                <div class="modal-body">
                    <p>Lorem ipsum dolor sit amet, in porro albucius qui, in <strong>nec quod novum accumsan</strong>, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
                    <p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus. Lorem ipsum dolor sit amet, <strong>in porro albucius qui</strong>, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
                    <p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn_1" data-dismiss="modal">Close</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

	<!-- SCRIPTS -->
    <!-- Jquery-->
    <script src="{{asset('quotes/js/jquery-3.2.1.min.js')}}"></script>
    <!-- Common script -->
    <script src="{{asset('quotes/js/common_scripts_min.js')}}"></script>
    <!-- Theme script -->
    <script src="{{asset('quotes/js/functions.js')}}"></script>

    <script src="{{ asset('assets/vendor/toastr/toastr.js') }}"></script>
    <script>
        @if(Session::has('success'))
            toastr.success("{{Session::get('success')}}")
        @endif
    
        @if(Session::has('info'))
            toastr.info("{{Session::get('info')}} ")
        @endif

        @if(Session::has('error'))
            toastr.error("{{Session::get('error')}} ")
        @endif
    </script>
    
</body>

</html>

