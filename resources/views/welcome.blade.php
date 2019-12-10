@extends('layout')

@section('body')

@include('nav')

    <div class="container-fluid p-0">

        @include('about')

        @include('experience')

        @include('education')

        @include('skills')

        @include('interests')

    </div>

@endsection




