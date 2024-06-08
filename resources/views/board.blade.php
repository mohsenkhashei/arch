@extends('layout.main')
@section('content')
    <div class="row" style="animation: fadeInAnimation ease 3s; animation-iteration-count: 1; animation-fill-mode: forwards;">
        <div class="col-md-8" >
            <h1 style="">Boards</h1>
        </div>
        <div class="col-md-4">
            <a href="{{url('create')}}" class="btn btn-success btn-sm" ><span class="fa fa-add"></span> Create New Board</a>
        </div>
    </div>
    <hr />
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
        @foreach($boards as $board)
            <div class="row" style="margin-bottom: 20px; animation: fadeInAnimation ease 3s; animation-iteration-count: 1; animation-fill-mode: forwards;">
                <div class="col-md-6">
                    <h3>{{ $board->title }}</h3>
                    <p class="text-justify">{{ $board->description }}</p>
                    <a href="{{url('board')}}/{{$board->id}}" class="btn btn-success btn-sm"><span class="fa fa-eye"></span> </a>
                    <a onclick="printPageFromUrl({{$board->id}})" class="btn btn-primary btn-sm"><span class="fa fa-download"></span> </a>
                    <a href="{{url('delete')}}/{{$board->id}}" class="btn btn-danger btn-sm"><span class="fa fa-trash"></span> </a>
                </div>
                <div class="col-md-6">
                    <a href="{{url('board')}}/{{$board->id}}" >
                        <img src="{{ asset($board->stories[0]->filepath) }}" alt="{{ $board->stories[0]->caption }}" style="height: 300px" class="img-fluid">
                    </a>
                </div>
            </div>
        @endforeach
    <script>

        function printPageFromUrl(id) {
            $.ajax({
                url:  `{{url('download')}}/${id}`,
                method: 'GET',
                success: function(response) {
                    // Create an invisible iframe
                    var iframe = $('<iframe id="printIframe" style="display:none;"></iframe>');
                    $('body').append(iframe);

                    var iframeDoc = iframe[0].contentDocument || iframe[0].contentWindow.document;
                    iframeDoc.open();
                    iframeDoc.write('<html><head><title>Print</title></head><body>');
                    iframeDoc.write(response);
                    iframeDoc.write('</body></html>');
                    iframeDoc.close();

                    // Print the iframe content
                    iframe[0].contentWindow.focus();
                    iframe[0].contentWindow.print();

                    // Remove the iframe after printing
                    setTimeout(function() {
                        iframe.remove();
                    }, 1000);
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.error('Error fetching the page:', textStatus, errorThrown);
                }
            });
        }


    </script>
@stop

