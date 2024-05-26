@extends('layout.main')
@section('content')
<div class="row">
    <div class="col-md-6" >
        <h1 style="margin-top: 60px">Create Board</h1>
        <p>we're happy to hear your feedback</p>
    </div>
    <div class="col-md-6"></div>
</div>
<div class="row">

    <div class="col-md-6"></div>

    <div class="col-md-6">
        @if(session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif
        <form action="{{url('store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title">Title:</label>
                <input class="form-control @error('message') is-invalid @enderror" id="title" name="title" />
                @error('title')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea class="form-control @error('message') is-invalid @enderror" id="description" name="description" rows="8"></textarea>
                @error('message')
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
@stop


