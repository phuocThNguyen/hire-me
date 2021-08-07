<?php

namespace App\Http\Controllers\CarControllers;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\CarBrand;
use Illuminate\Http\Request;

class CarBrandController extends Controller
{
    public function index()
    {
        return view('gallery', ['car_brands' => CarBrand::all()]);
    }

    public function cars($brand_name)
    {
        $brand_id = CarBrand::select('id')->firstWhere('name', $brand_name);
        // dd($brand_id->id);
        return view('cars.index', ['cars' => Car::where('brand_id', $brand_id->id)->get()]);
    }
}
