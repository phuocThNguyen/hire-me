@extends('layouts.app')

@section('content')
@if (session()->has('message'))
<div>{{session()->get('message')}}</div>
@endif
@endsection