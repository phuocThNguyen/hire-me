@extends('layouts.app')

@section('content')
@include('layouts.hero')
<section class="text-gray-600 body-font">
    <div class="container px-5 py-24 mx-auto">
        <h1 class="uppercase text-gray-900 text-center mb-10 text-5xl">Feature Cars</h1>
        <div class="flex flex-wrap -m-4">
            @for ($i=0;$i<8;$i++)
                <x-car-card :car="$car"/>
            @endfor
        </div>
      </div>
    </div>
  </section>
@endsection