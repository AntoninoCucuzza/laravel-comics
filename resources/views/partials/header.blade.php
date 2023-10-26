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
                @forelse ($menu as $link)
                <li>
                    <a href="#">{{$link['nomeLink']}}</a>
                </li>
                @empty
                <p class="text-white">No link very sad</p>
                @endforelse
                <li>shop <i class="fa-solid fa-caret-down"></i></li>
            </ul>
        </div>
        <form action="">
            <div class="input-group ">
                <input type="text" class="form-control" placeholder="Search">
                <button class="btn border-0" type="button">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </form>
    </div>
</div>

@endsection