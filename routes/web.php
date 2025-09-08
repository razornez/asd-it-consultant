<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PagesController;


// Group route untuk bahasa
Route::get('/{locale?}', function ($locale = 'id') {
    if (! in_array($locale, ['id', 'en'])) {
        $locale = 'id'; // fallback
    }
    App::setLocale($locale);
    return app(HomeController::class)->index();
})->name('index');


// Pages Routes 
// Route::get('/team', [PagesController::class, 'team'])
//     ->name('team');
// Route::get('/team-carousel', [PagesController::class, 'team_carousel'])
//     ->name('team-carousel');
// Route::get('/team-details', [PagesController::class, 'team_details'])
//     ->name('team-details');
// Route::get('/portfolio', [PagesController::class, 'portfolio'])
//     ->name('portfolio');
// Route::get('/portfolio-details', [PagesController::class, 'portfolio_details'])
//     ->name('portfolio-details');
// Route::get('/testimonials', [PagesController::class, 'testimonials'])
//     ->name('testimonials');
// Route::get('/testimonials-carousel', [PagesController::class, 'testimonials_carousel'])
//     ->name('testimonials-carousel');
// Route::get('/pricing', [PagesController::class, 'pricing'])
//     ->name('pricing');
// Route::get('/gallery', [PagesController::class, 'gallery'])
//     ->name('gallery');
// Route::get('/faq', [PagesController::class, 'faq'])
//     ->name('faq');
Route::get('/404', [PagesController::class, 'notfound'])
    ->name('404');
// Route::get('/coming-soon', [PagesController::class, 'coming_soon'])
//     ->name('coming-soon');


// Contact Routes
Route::get('/contact', [PagesController::class, 'contact'])
    ->name('contact');

Route::fallback(function () {
    return view('pages.404');
})->name('fallback');
