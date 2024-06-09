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


<div class="a4"> <!-- Change class to a3 or a5 for different sizes -->
        <div class="container">
        <!-- First Row: Text left, Image right -->
        <div class="row">
            <div class="col-4 text">
                <h1>{{$board->title}}</h1>
                <p>{{$board->description}}</p>
            </div>
            <div class="col-8 img-container">
                <img src="
                @if($debug) {{ asset($board->stories[0]->filepath) }} @else {{ public_path() .'/'. $board->stories[0]->filepath }} @endif
                " alt="{{ $board->stories[0]->caption }}" style="height:300px" />
            </div>
        </div>

    <!-- Subsequent Rows: Image left, Image right -->

        @if($board->stories(count($board->stories()->get()) > 1))
            @foreach(array_chunk($board->stories->skip(1)->toArray() , 2) as $index => $story)
                    <div class="row">
                        @foreach($story as $key => $item)
                        <div class="col-{{ $key % 2 == 0 ? '4' : '8' }} img-container">
                                <img src="{{ $debug ? asset($item['filepath']) : public_path() . '/' . $item['filepath'] }}" alt="{{ $item['caption'] }}">
                                <small>{{ $item['caption'] }}</small>
                            </div>
                        @endforeach
                    </div>

                @endforeach
        @endif

        </div>
    </div>
<script>
    window.print()
</script>
