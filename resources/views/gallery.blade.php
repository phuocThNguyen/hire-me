@extends('layouts.app')

@section('content')
<section class="text-gray-600 body-font">
    <div class="container px-5 py-24 mx-auto">
      <div class="flex flex-wrap -m-4">
          @foreach ($car_brands as $brand)
          <div class="lg:w-1/3 sm:w-1/2 p-4">
            <div class="flex relative">
              <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center" src="{{$brand->image_path}}">
              <div class="px-8 py-20 relative z-10 w-full bg-black opacity-0 hover:opacity-75">
                <h1 class="text-center text-gray-50">{{$brand->name}}</h1>
              </div>
            </div>
          </div>
          @endforeach
      </div>
    </div>
  </section>
@endsection