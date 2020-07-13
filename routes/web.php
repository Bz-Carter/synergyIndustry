<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('locale/{locale}', function ($locale){
    Session::put('locale', $locale);
    return redirect()->back();
});

Route::get('/', 'FrontEndController@index')->name('accueil');

Route::get('/services_', 'FrontEndController@ourservices')->name('ourservices');
Route::get('/services_/{slug}', 'FrontEndController@singleServices')->name('service.single');


Route::get('/aboutUs', 'FrontEndController@aboutUs')->name('aboutUs');

Route::get('/contactUs', 'FrontEndController@contactUs')->name('contactUs');

Route::get('/emploi', 'EmploiController@create')->name('emploi');
Route::post('/emploi', 'EmploiController@store')->name('emploi.store');

Route::get('/devis', 'EmploiController@create2')->name('devis');
Route::post('/devis', 'EmploiController@store2')->name('devis.store');


//offres
Route::get('/offres', 'FrontEndController@offres')->name('offres');
route::post('/offre/quotes', 'QuotesController@store');
route::post('/offre/employments', 'EmploymentsController@store');

Route::get('/actualités', 'FrontEndController@news')->name('news');
Route::get('/actualités/{slug}', 'FrontEndController@singlePost')->name('post.single');
Route::get('/category/{id}', 'FrontEndController@category')->name('category.single');
Route::get('/tag/{id}', 'FrontEndController@tag')->name('tag.single');
Route::get('/results', function(){
    $posts = \App\Post::where('title', 'like', '%' . request('query') . '%')->get();

    return view('results')->with('posts', $posts)
                          ->with('title', 'Search results : ' . request('query'))
                          ->with('settings', \App\Setting::first())
                          ->with('activityzones', \App\Activityzone::all())
                          ->with('query', request('query'));
});


Route::get('/références', 'FrontEndController@reference')->name('références');
Route::get('/références/{slug}', 'FrontEndController@singleProject')->name('project.single');



Auth::routes();

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){

    Route::get('/home', 'HomeController@index')->name('home');

    // posts routing
    Route::get('/posts', 'PostsController@index')->name('posts');
    Route::get('/post/create', 'PostsController@create')->name('post.create');
    Route::post('/post/store', 'PostsController@store')->name('post.store');
    Route::get('/post/delete/{id}', 'PostsController@destroy')->name('post.delete');
    Route::get('/posts/trashed', 'PostsController@trashed')->name('posts.trashed');
    Route::get('/posts/kill/{id}', 'PostsController@kill')->name('post.kill');
    Route::get('/posts/restore/{id}', 'PostsController@restore')->name('post.restore');
    Route::get('/posts/edit/{id}', 'PostsController@edit')->name('post.edit');
    Route::post('/posts/update/{id}', 'PostsController@update')->name('post.update');



    // categories routing
    Route::get('/categories', 'CategoriesController@index')->name('categories');
    Route::get('/category/create', 'CategoriesController@create')->name('category.create');
    Route::post('/category/store', 'CategoriesController@store')->name('category.store');
    Route::get('/category/edit/{id}', 'CategoriesController@edit')->name('category.edit');
    Route::get('/category/delete/{id}', 'CategoriesController@destroy')->name('category.delete');
    Route::post('/category/update/{id}', 'CategoriesController@update')->name('category.update');

    // tags routing
    Route::get('/tags', 'TagsController@index')->name('tags');
    Route::get('/tag/create', 'TagsController@create')->name('tag.create');
    Route::post('/tag/store', 'TagsController@store')->name('tag.store');
    Route::get('/tag/edit/{id}', 'TagsController@edit')->name('tag.edit');
    Route::get('/tag/delete/{id}', 'TagsController@destroy')->name('tag.delete');
    Route::post('/tag/update/{id}', 'TagsController@update')->name('tag.update');


    // tags routing
    Route::get('/users', 'UsersController@index')->name('users');
    Route::get('/user/create', 'UsersController@create')->name('user.create');
    Route::post('/user/store', 'UsersController@store')->name('user.store');
    Route::get('/user/admin/{id}', 'UsersController@admin')->name('user.admin');
    Route::get('/user/not-admin/{id}', 'UsersController@not_admin')->name('user.not.admin');


    // Profiles routing
    Route::get('/user/profile', 'ProfilesController@index')->name('user.profile');
    Route::post('/user/profile/update', 'ProfilesController@update')->name('user.profile.update');
    Route::get('/user/delete/{id}', 'UsersController@destroy')->name('user.delete');

    // settings routing
    Route::get('/settings', 'SettingsController@index')->name('settings');
    Route::post('/settings/update', 'SettingsController@update')->name('settings.update');

    // Projects routing
    Route::get('/projects', 'ProjectsController@index')->name('projects');
    Route::get('/project/create', 'ProjectsController@create')->name('project.create');
    Route::post('/project/store', 'ProjectsController@store')->name('project.store');
    Route::get('/project/delete/{id}', 'ProjectsController@destroy')->name('project.delete');
    Route::get('/projects/trashed', 'ProjectsController@trashed')->name('projects.trashed');
    Route::get('/projects/kill/{id}', 'ProjectsController@kill')->name('project.kill');
    Route::get('/projects/restore/{id}', 'ProjectsController@restore')->name('project.restore');
    Route::get('/projects/edit/{id}', 'ProjectsController@edit')->name('project.edit');
    Route::post('/projects/update/{id}', 'ProjectsController@update')->name('project.update');


    // services routing
    Route::get('/services', 'ServicesController@index')->name('services');
    Route::get('/service/create', 'ServicesController@create')->name('service.create');
    Route::post('/service/store', 'ServicesController@store')->name('service.store');
    Route::get('/service/edit/{id}', 'ServicesController@edit')->name('service.edit');
    Route::get('/service/delete/{id}', 'ServicesController@destroy')->name('service.delete');
    Route::post('/service/update/{id}', 'ServicesController@update')->name('service.update');


    // slides routing
    Route::get('/slides', 'SlidesController@index')->name('slides');
    Route::get('/slide/create', 'SlidesController@create')->name('slide.create');
    Route::post('/slide/store', 'SlidesController@store')->name('slide.store');
    Route::get('/slide/delete/{id}', 'SlidesController@destroy')->name('slide.delete');
    Route::get('/slides/trashed', 'SlidesController@trashed')->name('slides.trashed');
    Route::get('/slides/kill/{id}', 'SlidesController@kill')->name('slide.kill');
    Route::get('/slides/restore/{id}', 'SlidesController@restore')->name('slide.restore');
    Route::get('/slides/edit/{id}', 'SlidesController@edit')->name('slide.edit');
    Route::post('/slides/update/{id}', 'SlidesController@update')->name('slide.update');


    // transitions routing
    Route::get('/transitions', 'TransitionController@index')->name('transitions');
    Route::get('/transition/create', 'TransitionController@create')->name('transition.create');
    Route::post('/transition/store', 'TransitionController@store')->name('transition.store');
    Route::get('/transition/edit/{id}', 'TransitionController@edit')->name('transition.edit');
    Route::get('/transition/delete/{id}', 'TransitionController@destroy')->name('transition.delete');
    Route::post('/transition/update/{id}', 'TransitionController@update')->name('transition.update');



    // Slidetitle routing
    Route::get('/slidetitles', 'SlidetitleController@index')->name('slidetitles');
    Route::get('/slidetitle/create', 'SlidetitleController@create')->name('slidetitle.create');
    Route::post('/slidetitle/store', 'SlidetitleController@store')->name('slidetitle.store');
    Route::get('/slidetitle/edit/{id}', 'SlidetitleController@edit')->name('slidetitle.edit');
    Route::get('/slidetitle/delete/{id}', 'SlidetitleController@destroy')->name('slidetitle.delete');
    Route::post('/slidetitle/update/{id}', 'SlidetitleController@update')->name('slidetitle.update');

    // Slideinfo routing
    Route::get('/slideinfos', 'SlideinfoController@index')->name('slideinfos');
    Route::get('/slideinfo/create', 'SlideinfoController@create')->name('slideinfo.create');
    Route::post('/slideinfo/store', 'SlideinfoController@store')->name('slideinfo.store');
    Route::get('/slideinfo/edit/{id}', 'SlideinfoController@edit')->name('slideinfo.edit');
    Route::get('/slideinfo/delete/{id}', 'SlideinfoController@destroy')->name('slideinfo.delete');
    Route::post('/slideinfo/update/{id}', 'SlideinfoController@update')->name('slideinfo.update');


    // Ativityzones routing
    Route::get('/activityzones', 'ActivityzoneController@index')->name('activityzones');
    Route::get('/activityzone/create', 'ActivityzoneController@create')->name('activityzone.create');
    Route::post('/activityzone/store', 'ActivityzoneController@store')->name('activityzone.store');
    Route::get('/activityzone/delete/{id}', 'ActivityzoneController@destroy')->name('activityzone.delete');
    Route::get('/activityzones/trashed', 'ActivityzoneController@trashed')->name('activityzones.trashed');
    Route::get('/activityzones/kill/{id}', 'ActivityzoneController@kill')->name('activityzone.kill');
    Route::get('/activityzones/restore/{id}', 'ActivityzoneController@restore')->name('activityzone.restore');
    Route::get('/activityzones/edit/{id}', 'ActivityzoneController@edit')->name('activityzone.edit');
    Route::post('/activityzones/update/{id}', 'ActivityzoneController@update')->name('activityzone.update');


    // Partners routing
    Route::get('/partners', 'PartnerController@index')->name('partners');
    Route::get('/partner/create', 'PartnerController@create')->name('partner.create');
    Route::post('/partner/store', 'PartnerController@store')->name('partner.store');
    Route::get('/partner/delete/{id}', 'PartnerController@destroy')->name('partner.delete');
    Route::get('/partners/trashed', 'PartnerController@trashed')->name('partners.trashed');
    Route::get('/partners/kill/{id}', 'PartnerController@kill')->name('partner.kill');
    Route::get('/partners/restore/{id}', 'PartnerController@restore')->name('partner.restore');
    Route::get('/partners/edit/{id}', 'PartnerController@edit')->name('partner.edit');
    Route::post('/partners/update/{id}', 'PartnerController@update')->name('partner.update');

});


