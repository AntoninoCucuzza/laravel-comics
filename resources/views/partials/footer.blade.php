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