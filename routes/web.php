<?php

use App\Livewire\Admin\ExperienceCrud;
use App\Livewire\Admin\PortfolioCategories;
use App\Livewire\Admin\PortfolioComponent;
use App\Livewire\Admin\TestimonialCrud;
use App\Livewire\User\AboutComponent;
use App\Livewire\User\ContactComponent;
use App\Livewire\User\HomeComponent;
use App\Livewire\User\SinglePortfolioComponent;
use Illuminate\Support\Facades\Route;

// Route::view('/', 'welcome');
Route::view('/review', 'review');

Route::middleware(['auth'])->group(function () {
    Route::get('/portfolio-categories', PortfolioCategories::class)->name('portfolio-categories.index');
    Route::get('/portfolios', PortfolioComponent::class)->name('portfolios.index');
    Route::get('/experiences', ExperienceCrud::class)->name('experiences');
    Route::get('/testimonials', TestimonialCrud::class)->name('testimonials');
});




// User
Route::get('/', HomeComponent::class)->name('home');

Route::get('/portfolio/{id}', SinglePortfolioComponent::class)->name('single-portfolio');
Route::get('/contact', ContactComponent::class)->name('contact');
Route::get('/about', AboutComponent::class)->name('about');



Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
