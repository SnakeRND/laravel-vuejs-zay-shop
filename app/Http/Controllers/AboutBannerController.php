<?php

namespace App\Http\Controllers;
use App\Models\AboutBanner;
use Illuminate\Http\Request;

class AboutBannerController extends Controller
{
    public function getAboutBanner() {
        $about_banner = AboutBanner::all();

        return ['result' => $about_banner];
    }
}
