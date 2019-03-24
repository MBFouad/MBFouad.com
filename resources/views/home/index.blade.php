@extends('layout.layout')
@section('content')
    <!--Home Sections-->
    @include('home._slider')


    <!--About Section-->
    @include('home._about')


    <!--Portfolio Section-->
    @include('home._portfolio')

    <!--Choose Section-->
    {{--@include('home._choose')--}}
    <!--Contact Section-->
    @include('home._contact')
@endsection