<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Category;
use App\Models\Categories;

class CategoryController extends Controller
{
    public function getCategories() {
        $categories = Categories::all();

        return ['result' => $categories];
    }
}
