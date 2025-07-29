<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])
    ->name('index');

Route::get('/index2', [HomeController::class, 'index2'])
    ->name('index2');

Route::get('/index3', [HomeController::class, 'index3'])
    ->name('index3');

Route::get('/index4', [HomeController::class, 'index4'])
    ->name('index4');

Route::get('/index-one-page', [HomeController::class, 'index_one_page'])
    ->name('index-one-page');

Route::get('/index2-one-page', [HomeController::class, 'index2_one_page'])
    ->name('index2-one-page');

Route::get('/index3-one-page', [HomeController::class, 'index3_one_page'])
    ->name('index3-one-page');

Route::get('/index4-one-page', [HomeController::class, 'index4_one_page'])
    ->name('index4-one-page');

Route::get('/about', [PagesController::class, 'about'])
    ->name('about');

Route::get('/team', [PagesController::class, 'team'])
    ->name('team');

Route::get('/team-details', [PagesController::class, 'team_details'])
    ->name('team-details');

Route::get('/testimonials', [PagesController::class, 'testimonials'])
    ->name('testimonials');

Route::get('/faq', [PagesController::class, 'faq'])
    ->name('faq');

Route::get('/404', [PagesController::class, 'not_found'])
    ->name('404');

Route::get('/coming-soon', [PagesController::class, 'coming_soon'])
    ->name('coming-soon');

Route::get('/services', [PagesController::class, 'services'])
    ->name('services');

Route::get('/evolve-space-designs', [PagesController::class, 'evolve_space_designs'])
    ->name('evolve-space-designs');

Route::get('/eden-home-styling', [PagesController::class, 'eden_home_styling'])
    ->name('eden-home-styling');

Route::get('/harmony-interiors', [PagesController::class, 'harmony_interiors'])
    ->name('harmony-interiors');

Route::get('/interior-design', [PagesController::class, 'interior_design'])
    ->name('interior-design');

Route::get('/urban-design', [PagesController::class, 'urban_design'])
    ->name('urban-design');

Route::get('/landscape-design', [PagesController::class, 'landscape_design'])
    ->name('landscape-design');

Route::get('/projects', [PagesController::class, 'projects'])
    ->name('projects');

Route::get('/project-details', [PagesController::class, 'project_details'])
    ->name('project-details');

Route::get('/blog', [PagesController::class, 'blog'])
    ->name('blog');

Route::get('/blog-2', [PagesController::class, 'blog_2'])
    ->name('blog-2');

Route::get('/blog-details', [PagesController::class, 'blog_details'])
    ->name('blog-details');

Route::get('/contact', [PagesController::class, 'contact'])
    ->name('contact');

Route::fallback(function () {
    return view('pages.404');
});