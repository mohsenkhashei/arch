@extends('layout.main')
@section('content')

        <div class="row" style="margin-top:100px">
            <div class="col-md-6" >
                <h1 style="margin-top: 60px">ABOUT US </h1>
                <h6>
                    ARCH DESIGN BOARD, ADB.
                </h6>
                <h1 style="margin-top: 60px">OUR TEAM </h1>
                <h6>
                    ARCH DESIGN BOARD, ADB.
                </h6>
            </div>
            <div class="col-md-6">
                <a href="{{url('boards')}}">
                    <img alt="About" src="{{url('images/about.png')}}" />
                </a>
            </div>
        </div>

@stop

