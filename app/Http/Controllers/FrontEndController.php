<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use App\Project;
use App\Setting;
use App\Slide;
use App\Slideinfo;
use App\Slidetitle;
use App\Transition;
use App\Activityzone;
use App\Partner;
use App\Tag;
use App\Service;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function index()
    {
        return view('index')->with('settings', Setting::first())
                            ->with('posts', Post::all())
                            ->with('first_post', Post::orderBy('created_at', 'desc')->first())
                            ->with('second_post', Post::orderBy('created_at', 'desc')->skip(1)->take(1)->get()->first())
                            ->with('third_post', Post::orderBy('created_at', 'desc')->skip(2)->take(1)->get()->first())
                            ->with('first_project', Project::orderBy('created_at', 'desc')->first())
                            ->with('second_project', Project::orderBy('created_at', 'desc')->skip(1)->take(1)->get()->first())
                            ->with('third_project', Project::orderBy('created_at', 'desc')->skip(2)->take(1)->get()->first())
                            ->with('projects', Project::all())
                            ->with('services', Service::all())
                            ->with('first_service', Service::orderBy('created_at', 'desc')->first())
                            ->with('second_service', Service::orderBy('created_at', 'desc')->skip(1)->take(1)->get()->first())
                            ->with('third_service', Service::orderBy('created_at', 'desc')->skip(2)->take(1)->get()->first())
                            ->with('transitions', Transition::all())
                            ->with('slideinfos', Slideinfo::all())
                            ->with('slidetitles', Slidetitle::all())
                            ->with('slides', Slide::all())
                            ->with('first_slide', Slide::orderBy('created_at')->first())
                            ->with('activityzones', Activityzone::all())
                            ->with('partners', Partner::all())
                            ->with('first_partner', Partner::orderBy('created_at', 'desc')->first())
                            ->with('second_partner', Partner::orderBy('created_at', 'desc')->skip(1)->take(1)->get()->first())
                            ->with('third_partner', Partner::orderBy('created_at', 'desc')->skip(2)->take(1)->get()->first())
                            ->with('fourth_partner', Partner::orderBy('created_at', 'desc')->skip(3)->take(1)->get()->first())
                            ->with('fifth_partner', Partner::orderBy('created_at', 'desc')->skip(4)->take(1)->get()->first())
                            ->with('sixth_partner', Partner::orderBy('created_at', 'desc')->skip(5)->take(1)->get()->first())
                            ->with('seventh_partner', Partner::orderBy('created_at', 'desc')->skip(6)->take(1)->get()->first())
                            ->with('eighth_partner', Partner::orderBy('created_at', 'desc')->skip(7)->take(1)->get()->first())
                            ->with('ninth_partner', Partner::orderBy('created_at', 'desc')->skip(8)->take(1)->get()->first())
                            ->with('tenth_partner', Partner::orderBy('created_at', 'desc')->skip(9)->take(1)->get()->first())
                            ->with('eleventh_partner', Partner::orderBy('created_at', 'desc')->skip(10)->take(1)->get()->first())
                            ->with('twelfth_partner', Partner::orderBy('created_at', 'desc')->skip(11)->take(1)->get()->first())
                            ->with('thirteenth_partner', Partner::orderBy('created_at', 'desc')->skip(12)->take(1)->get()->first())
                            ->with('fourteenth_partner', Partner::orderBy('created_at', 'desc')->skip(13)->take(1)->get()->first())
                            ->with('fifteenth_partner', Partner::orderBy('created_at', 'desc')->skip(14)->take(1)->get()->first())
                            ->with('sixteenth_partner', Partner::orderBy('created_at', 'desc')->skip(15)->take(1)->get()->first())
                            ->with('seventeenth_partner', Partner::orderBy('created_at', 'desc')->skip(16)->take(1)->get()->first())
                            ->with('eighteenth_partner', Partner::orderBy('created_at', 'desc')->skip(17)->take(1)->get()->first())
                            ->with('nineteenth_partner', Partner::orderBy('created_at', 'desc')->skip(18)->take(1)->get()->first())
                            ->with('twentieth_partner', Partner::orderBy('created_at', 'desc')->skip(19)->take(1)->get()->first())
                            ->with('twenty_first_partner', Partner::orderBy('created_at', 'desc')->skip(20)->take(1)->get()->first())
                            ->with('twenty_second_partner', Partner::orderBy('created_at', 'desc')->skip(21)->take(1)->get()->first())
                            ->with('twenty_third_partner', Partner::orderBy('created_at', 'desc')->skip(22)->take(1)->get()->first())
                            ->with('twenty_fourth_partner', Partner::orderBy('created_at', 'desc')->skip(23)->take(1)->get()->first())
                            ->with('twenty_fifth_partner', Partner::orderBy('created_at', 'desc')->skip(24)->take(1)->get()->first());
    }

    public function ourservices()
    {
        return view('ourservices')->with('settings', Setting::first())
                                 ->with('activityzones', Activityzone::all())
                                 ->with('services', Service::all());
    }

    public function singleServices($slug)
    {

        $service = Service::where('slug', $slug)->first();

        $next_id = Service::where('id', '>', $service->id)->min('id');
        $prev_id = Service::where('id', '<', $service->id)->max('id');

        return view('singleServices')->with('service', $service)
                             ->with('settings', Setting::first())
                             ->with('activityzones', Activityzone::all())
                             ->with('next', Service::find($next_id))
                             ->with('prev', Service::find($prev_id))
                             ->with('services', Service::all());
    }

    
    

    public function aboutUs()
    {
        return view('aboutUs')->with('settings', Setting::first())
                              ->with('activityzones', Activityzone::all())
                              ->with('services', Service::all());
    }

    public function emploi()
    {
        return view('emploi')->with('activityzones', Activityzone::all())
                             ->with('settings', Setting::first())
                             ->with('services', Service::all());
    }

    public function offres()
    {
        return view('offres')->with('activityzones', Activityzone::all())
                             ->with('settings', Setting::first())
                             ->with('services', Service::all());
    }


    public function singlePost($slug)
    {

        $post = Post::where('slug', $slug)->firstOrFail();

        $previous = Post::where('id', '<', $post->id)->orderBy('id','desc')->first();
        $next = Post::where('id', '>', $post->id)->orderBy('id')->first();


        return view('single')->with(compact('post', 'previous', 'next'))
                             ->with('title', $post->title)
                             ->with('settings', Setting::first())
                             ->with('activityzones', Activityzone::all())
                             ->with('categories', Category::all())
                             ->with('tags', Tag::all())
                             ->with('services', Service::all());
    }

    public function category($id)
    {
        $category = Category::find($id);

        return view('category')->with('category', $category)
                               ->with('title', $category->name)
                               ->with('settings', Setting::first())
                               ->with('activityzones', Activityzone::all())
                               ->with('categories', Category::all())
                               ->with('services', Service::all());
    }

    public function tag($id)
    {
        $tag = Tag::find($id);

        return view('tag')->with('tag', $tag)
                          ->with('title', $tag->tag)
                          ->with('settings', Setting::first())
                          ->with('activityzones', Activityzone::all())
                          ->with('tags', Tag::all())
                          ->with('services', Service::all());
    }

    public function news()
    {
        return view('news')->with('settings', Setting::first())
                           ->with('activityzones', Activityzone::all())
                           
                           ->with('posts', Post::paginate(8))
                           ->with('categories', Category::all())
                           ->with('tags', Tag::all())
                           ->with('services', Service::all());
    }

    public function reference()
    {
        return view('références')->with('settings', Setting::first())
                                 ->with('projects', Project::all())
                                 ->with('activityzones', Activityzone::all())
                                 ->with('services', Service::all());
    }

    public function singleProject($slug)
    {

        $project = Project::where('slug', $slug)->first();

        $next_id = Project::where('id', '>', $project->id)->min('id');
        $prev_id = Project::where('id', '<', $project->id)->max('id');

        return view('singleProjects')->with('project', $project)
                             ->with('settings', Setting::first())
                             ->with('activityzones', Activityzone::all())
                             ->with('next', Project::find($next_id))
                             ->with('prev', Project::find($prev_id))
                             ->with('services', Service::all());
    }

    public function contactUs()
    {
        return view('contactUs')->with('settings', Setting::first())
                                ->with('activityzones', Activityzone::all())
                                ->with('services', Service::all());
    }

}
