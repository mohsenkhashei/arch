<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{$board->title}}</title>
    <style>
        body {
            font-family: sans-serif;
            margin: 0;
            padding: 0;
        }
        .a4, .a3, .a5 {
            width: 100%;
            height: 100%;
        }
        .a4 {
            width: 210mm;
            height: 297mm;
        }
        .a3 {
            width: 297mm;
            height: 420mm;
        }
        .a5 {
            width: 148mm;
            height: 210mm;
        }
        .container {
            width: 100%;
            margin: 0 auto;
        }
        .row {
            display: flex;
            width: 100%;
        }
        .col-4 {
            width: 33.33%;
        }
        .col-8 {
            width: 66.67%;
        }
        .text {
            padding: 10px;
        }
        .img-container {
            padding: 10px;
            text-align: center;
        }
        .img-container img {
            max-width: 100%;
            height: auto;
        }
    </style>
</head>
<body class="a4"> <!-- Change class to a3 or a5 for different sizes -->
<div class="container">
    <!-- First Row: Text left, Image right -->
    <div class="row">
        <div class="col-4 text">
            <h4>{{$board->title}}</h4>
            <p>{{$board->description}}</p>
        </div>
        <div class="col-8 img-container">
            <img src="{{ asset($board->stories[0]->filepath) }}" alt="{{ $board->stories[0]->caption }}"  />
        </div>
    </div>

    <!-- Subsequent Rows: Image left, Image right -->

        @if($board->stories(count($board->stories()->get()) > 1))
            @foreach($board->stories->skip(1) as $index => $story)
                @foreach (array_chunk($board->stories->skip(1)->toArray() , 2) as $chunk)
                    <div class="row">
                            <div class="col-4 img-container">
                                <img src="{{ asset($story->filepath) }}" alt="{{ $story->caption }}" class="img-fluid">
                                <small>{{ $story->caption }}</small>
                            </div>
                        @if (isset($chunk[1]))
                            <div class="col-8 img-container">
                                <img src="{{ asset($story->filepath) }}" alt="{{ $story->caption }}" class="img-fluid">
                                <small>{{ $story->caption }}</small>
                            </div>
                        @endif
                    </div>
                @endforeach
            @endforeach
        @endif

</div>
</body>
</html>
