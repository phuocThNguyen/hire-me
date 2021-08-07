<?php

namespace App\Http\Controllers\CarControllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\CarBrand;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return redirect('/gallery');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cars.create')->with('brands', CarBrand::select('id', 'name')->get());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'brand' => 'required',
            'price' => 'required|integer|min:0|max:5000',
            'image' => 'required',
        ]);

        $brand = json_decode($request->input('brand'));

        $newImageName = uniqid() . '-' . $brand->name . '-' . Str::of($request->input('name'))->slug() . '.' . $request->image->extension();

        $request->image->move(public_path('images'), $newImageName);

        Car::create([
            'model' => $request->input('name'),
            'slug' => Str::of($brand->name . '-' . $request->name)->slug(),
            'brand_id' => $brand->id,
            'image_path' => $newImageName,
            'price' => $request->input('price'),
            'status' => 'Available',
        ]);

        return redirect('/gallery/' . $brand->name);
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        return view('cars.show', ['car' => Car::firstWhere('slug', $slug)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
