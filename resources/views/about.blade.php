@extends('layout.main')
@section('content')

        <div class="row" style="animation: fadeInAnimation ease 3s; animation-iteration-count: 1; animation-fill-mode: forwards;">
            <div class="col-md-6" >
                <h1 style="margin-top: 60px">ABOUT US </h1>
                <h6>
                    ARCH DESIGN BOARD. ADB, is an online interface
                    where architecture students, product designers and
                    other creatives can upload elements of their designs
                    such as renders, photos, art pieces, and text
                    descriptions. They get organized design boards
                    showcasing their product. making it easy to share and
                    showcase their work to the world.
                </h6>
                <h1 style="margin-top: 60px">OUR TEAM </h1>
                <h6>
                    Our team comprises skilled architects and designers
                    who ensure the platform meets high aesthetic and
                    functional standards. Supported by experienced web
                    developers and project managers. we create a
                    seamless and dynamic user experience, allowing
                    crcativcs to effortlessly showcase their work.
                </h6>
            </div>
            <div class="col-md-6">
                <a href="{{url('boards')}}">
                    <img alt="About" src="{{url('images/about.png')}}" class="mt-5" />
                </a>
            </div>
        </div>

@stop

