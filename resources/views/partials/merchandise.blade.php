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