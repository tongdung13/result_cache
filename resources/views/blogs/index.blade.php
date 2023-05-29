<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            @foreach ($blogs as $key => $item)
                <div class="col-md-3">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ asset('image/123.jpeg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->name }}</h5>
                            <p class="card-text">{{ $item->image }}</p>
                            <button type="button" class="btn btn-primary {{ $item->id }}" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">Go somewhere</button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <!-- The Modal -->
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Product detail</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <script>
        $(document).ready(function() {
            const count = {!! json_encode($arrayId) !!};
            for (const i of count) {
                $('.' + i).on('click', function() {
                    const id = i;
                    var url = "{{ route('blogs.show', ':id') }}";
                    url = url.replace(':id', id);

                    $.ajax({
                        type: "post",
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        url: url,
                        data: [],
                        dataType: "json",
                        success: function(response) {
                            if (response) {
                                $('.modal-body').html('');
                                var body = "<img src='{{ asset('image/123.jpeg') }}' class='card-img-top' ><br />";
                                body += '<h2>' + response.name + '</h2><br />';
                                body += '<h4>' + response.image + '</h4>'
                                $('.modal-body').append(body);
                            }
                        }
                    });
                });
            }
        });
    </script>
</body>

</html>
