<?php

namespace App\Http\Controllers\CarControllers;

use App\Http\Controllers\Controller;
use App\Models\CarBrand;
use Illuminate\Http\Request;

class CarBrandController extends Controller
{
    public function index()
    {
        return view('gallery', ['car_brands' => CarBrand::all()]);
    }
}
