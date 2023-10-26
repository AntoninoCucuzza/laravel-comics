@extends('layouts.app')

@section('header-content')
<div class="top text-white p-1">
    <div class="container d-flex">
        <div class=" d-flex ms-auto gap-5">
            <small class=" text-uppercase">dc power&#8480; visa&#9415;</small>
            <small class=" text-uppercase">additional dc sites <i class="fa-solid fa-caret-down"></i></small>
        </div>
    </div>
</div>

<div class="bot p-2">
    <div class="container d-flex justify-content-between align-items-center">

        <div class="logo-wrapper ">
            <a href="#"><img class="img-fluid" width="75" src="{{ Vite::asset('resources/img/dc-logo.png')}}" alt=""></a>
        </div>

        <div>
            <ul class=" list-unstyled d-flex justify-center align-items-center gap-4">
                <li>menu 1</li>
                <li>menu 2</li>
                <li>menu 1</li>
                <li>menu 2</li>
                <li>menu 1</li>
                <li>menu 2</li>
                <li>menu 1</li>
                <li>menu 2<i class="fa-solid fa-caret-down"></i></li>
            </ul>
        </div>

        <div action="">
            <input type="text">
        </div>
    </div>
</div>

@endsection

@section('jumbotron-content')
<div class="text">
    <h2>current series</h2>
</div>
@endsection

@section('main-content')
<div class="">

</div>

@endsection

@section('footer-content')
<div class="">

</div>

@endsection