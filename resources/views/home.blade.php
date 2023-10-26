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

        <form action="">
            <input class="" type="text">
        </form>
    </div>
</div>

@endsection

@section('jumbotron-content')
<div class="text">
    <h2>current series</h2>
</div>
@endsection

@section('main-content')
<div class="container py-5">
    <div class="row">

        @forelse ($comics as $comic)
        <div class="col-2 g-3 comic">
            <div class="wrapper">
                <img class="img-fluid " src="{{ $comic['thumb'] }}" alt="">
                <span>{{$comic['title']}}</span>
            </div>
        </div>
        @empty
        <p class="text-white">No comics very sad</p>
        @endforelse
    </div>

    <div class="d-flex justify-content-center align-items-center ">
        <a class="load_more" href="#">load more</a>
    </div>
</div>
@endsection

@section('merchandise')
<div class="merch p-5">
    <div class="container">
        <div class="row">
            @forelse ($merchandises as $merch)
            <div class="col d-flex justify-content-center align-items-center gap-2">
                <a href="#">
                    <img class="w-25" src="{{Vite::asset($merch['img'])}}" alt="">
                    <small>{{$merch['text']}}</small>
                </a>
            </div>
            @empty
            <p class="text-white">No merchandise very sad</p>
            @endforelse
        </div>
    </div>

</div>

@endsection

@section('footer-content')
<div class="top">
    <div class="container">
        <div class="row  ">
            <div class="col-2 help">
                <h3>dc comics</h3>
                <ul class="list-unstyled">
                    @forelse ($listComics as $link)
                    <li>
                        <a href="#">{{$link['nav']}}</a>
                    </li>
                    @empty
                    <p class="text-white">No link very sad</p>
                    @endforelse

                </ul>

                <h3>shop</h3>
                <ul class="list-unstyled">
                    @forelse ($listShop as $link)
                    <li>
                        <a href="#">{{$link['nav']}}</a>
                    </li>
                    @empty
                    <p class="text-white">No link very sad</p>
                    @endforelse

                </ul>
            </div>

            <div class="col-2 help">
                <h3>DC</h3>
                <ul class="list-unstyled">
                    @forelse ($listDc as $link)
                    <li>
                        <a href="#">{{$link['nav']}}</a>
                    </li>
                    @empty
                    <p class="text-white">No link very sad</p>
                    @endforelse

                </ul>
            </div>

            <div class="col-2 help ">
                <h3>sites</h3>
                <ul class="list-unstyled">
                    @forelse ($listSites as $link)
                    <li>
                        <a href="#">{{$link['nav']}}</a>
                    </li>
                    @empty
                    <p class="text-white">No link very sad</p>
                    @endforelse

                </ul>
            </div>
            <div class="col-6 bg_logo">
            </div>
        </div>

    </div>
</div>

<div class="bot">
    <div class="container">
        <div class="row">
            <div class="d-flex justify-content-between align-items-center">
                <div class="left d-flex ">
                    <a id="sign-in" href="#">
                        Sign-up now!
                    </a>
                </div>
                <div class="right d-flex">
                    <a id="Follow-us" href="#">
                        <h4 class="text-uppercase m-0">follow us</h4>
                    </a>

                    @forelse ($socials as $social)
                    <a href="" class="ms-4" target="blank">
                        <img class="socials" src="{{Vite::asset($social['img'])}}" alt="">
                    </a>
                    @empty
                    <p class="text-white">No socials very sad</p>
                    @endforelse


                </div>
            </div>
        </div>
    </div>
</div>
@endsection