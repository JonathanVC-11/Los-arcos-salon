<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function about(){
        return view('pages.about');
    }

    public function team(){
        return view('pages.team');
    }

    public function team_details(){
        return view('pages.team-details');
    }

    public function testimonials(){
        return view('pages.testimonials');
    }

    public function faq(){
        return view('pages.faq');
    }

    public function not_found(){
        return view('pages.404');
    }

    public function coming_soon(){
        return view('pages.coming-soon');
    }

    public function services(){
        return view('pages.services');
    }

    public function evolve_space_designs(){
        return view('pages.evolve-space-designs');
    }

    public function eden_home_styling(){
        return view('pages.eden-home-styling');
    }

    public function harmony_interiors(){
        return view('pages.harmony-interiors');
    }

    public function interior_design(){
        return view('pages.interior-design');
    }

    public function urban_design(){
        return view('pages.urban-design');
    }

    public function landscape_design(){
        return view('pages.landscape-design');
    }

    public function projects(){
        return view('pages.projects');
    }

    public function project_details(){
        return view('pages.project-details');
    }

    public function blog(){
        return view('pages.blog');
    }

    public function blog_2(){
        return view('pages.blog-2');
    }

    public function blog_details(){
        return view('pages.blog-details');
    }

    public function contact(){
        return view('pages.contact');
    }
}