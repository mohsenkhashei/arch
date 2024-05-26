@extends('layout.main')
@section('content')
    <div class="row">

        <div class="col-md-6">
            <h3>Add More Image with Caption to Board: </h3>
        </div>

        <div class="col-md-6">
            @if(session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif
            <form action="{{url('addStory')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="caption">Caption:</label>
                    <input class="form-control @error('message') is-invalid @enderror" id="caption" name="caption" />
                    <input type="hidden"  name="board_id" value="{{$board->id}}" />
                    @error('caption')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="fileInput">Choose File:</label>
                    <input type="file" class="form-control-file @error('fileInput') is-invalid @enderror" id="fileInput" name="fileInput"  accept="image/*">
                    @error('fileInput')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Send</button>
            </form>
        </div>
    </div>
    <hr/>
    <div class="row">
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


