{{-- @if (is_null($cars))
    
@endif --}}

@extends('layouts.app')

@section('content')


<div class="container px-5 py-24 mx-auto">
    <div class="flex flex-wrap -m-3">
        @foreach ($cars as $car)
            <x-car-card :car="$car"/>
        @endforeach
    </div>
  </div>
@endsection




{{-- @if (session()->has('message'))
    <div>{{session()->get('message')}}</div>
@endif --}}