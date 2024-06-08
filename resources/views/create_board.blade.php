@extends('layout.main')
@section('content')
<div class="row" style="margin-top: 60px" style="animation: fadeInAnimation ease 3s; animation-iteration-count: 1; animation-fill-mode: forwards;">
    <div class="col-md-6" >
        <h1 >Create Board</h1>
        <p>Please Create Your Board</p>
        <p>We're Happy to Hear Your Feedback</p>
    </div>
    <div class="col-md-6" style="animation: fadeInAnimation ease 3s; animation-iteration-count: 1; animation-fill-mode: forwards;">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
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
                @error('description')
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


