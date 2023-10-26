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