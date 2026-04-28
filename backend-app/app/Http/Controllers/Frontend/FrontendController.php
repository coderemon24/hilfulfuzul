<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class FrontendController extends Controller
{
  public function homePage()
  {
    return Inertia::render("home");
  }

    public function aboutPage()
    {
        return Inertia::render("about");
    }

    public function contactPage()
    {
        return inertia("contact");
    }

    public function ourWorksPage()
    {
        return inertia("our-works");
    }

    public function volunteerRegistrationPage()
    {
        return inertia("volunteer-registration");
    }

    public function galleryPage()
    {
        return inertia("gallery");
    }

    public function recentNewsPage()
    {
        return inertia("recent-news");
    }

}
