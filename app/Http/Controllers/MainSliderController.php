<?php

namespace App\Http\Controllers;

use App\Models\MainSlider;
use Illuminate\Http\Request;

class MainSliderController extends Controller
{
    public function getSlides() {
        $slides = MainSlider::all();

        return ['result' => $slides];
    }
}
