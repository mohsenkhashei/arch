@extends('layout.main')
@section('content')
    <div class="row" style="animation: fadeInAnimation ease 3s; animation-iteration-count: 1; animation-fill-mode: forwards;">
        <div class="col-md-5" >
            <h1 style="margin-top: 60px">{{$board->title}}</h1>
            <p class="h6">{{$board->description}}</p>
        </div>
        <div class="col-md-7">
                <img src="{{ asset($board->stories[0]->filepath) }}" alt="{{ $board->stories[0]->caption }}" style="height: 400px" class="img-fluid" />
        </div>
    </div>
    <div class="row">
        @if($board->stories(count($board->stories()->get()) > 1))
            @foreach($board->stories->skip(1) as $story)
                <div class="col-md-6">
                    <img src="{{ asset($story->filepath) }}" alt="{{ $story->caption }}" class="img-fluid">
                    <h5>{{ $story->caption }}</h5>
                </div>
            @endforeach
        @endif
    </div>
@stop


