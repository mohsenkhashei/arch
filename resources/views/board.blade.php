@extends('layout.main')
@section('content')
    <div class="row">
        <div class="col-md-8" >
            <h1 style="margin-top: 60px">Boards</h1>
        </div>
        <div class="col-md-4">
            <a href="{{url('create')}}" class="btn btn-success btn-sm" ><span class="fa fa-add"></span> Create New Board</a>
        </div>
    </div>
    <hr />
        @if(session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif
        @foreach($boards as $board)
            <div class="row" style="margin-bottom: 20px">
                <div class="col-md-6">
                    <h3>{{ $board->title }}</h3>
                    <p>{{ $board->description }}</p>
                    <a href="{{url('board')}}/{{$board->id}}" class="btn btn-success btn-sm"><span class="fa fa-eye"></span> </a>
                    <a href="{{url('download')}}/{{$board->id}}" class="btn btn-primary btn-sm"><span class="fa fa-download"></span> </a>
                    <a href="{{url('delete')}}/{{$board->id}}" class="btn btn-danger btn-sm"><span class="fa fa-trash"></span> </a>
                </div>
                <div class="col-md-6">
                    <a href="{{url('board')}}/{{$board->id}}" >
                        <img src="{{ asset($board->stories[0]->filepath) }}" alt="{{ $board->stories[0]->caption }}" style="height: 300px" class="img-fluid">
                    </a>
                </div>
            </div>
        @endforeach
@stop
