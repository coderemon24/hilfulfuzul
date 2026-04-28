<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\Frontend\FrontendController;

// frontend routes
Route::get("/", [FrontendController::class, "homePage"])->name("home");
Route::get("/about", [FrontendController::class, "aboutPage"])->name("about");
Route::get("/contact", [FrontendController::class, "contactPage"])->name("contact");
Route::get("/our-works", [FrontendController::class, "ourWorksPage"])->name("our-works");
Route::get("/volunteer-registration", [FrontendController::class, "volunteerRegistrationPage"])->name("volunteer-registration");
Route::get("/gallery", [FrontendController::class, "galleryPage"])->name("gallery");
Route::get("/recent-news", [FrontendController::class, "recentNewsPage"])->name("recent-news");
