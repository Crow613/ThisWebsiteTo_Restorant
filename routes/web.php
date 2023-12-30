<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\BookingController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'home'])->name('home.home');

Route::get('about/about', [AboutController::class, 'about'])->name('about.about');

Route::get('service/service', [ServiceController::class, 'service'])->name('service.service');

Route::get('contact/contact', [ContactController::class, 'contact'])->name('contact.contact');

Route::get('menu/menu', [MenuController::class, 'menu'])->name('menu.menu');

Route::get('booking/booking', [BookingController::class, 'booking'])->name('booking.booking');

Route::get('testimonial/testimonial', [MenuController::class, 'testimonial'])->name('testimonial.testimonial');
