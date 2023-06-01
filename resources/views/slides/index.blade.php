<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('owlcarousel/assets/owl.carousel.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('owlcarousel/assets/owl.theme.default.min.css') }}" type="text/css">
</head>

<body>
    <div class="container">
        @php
            $images = ['1.png', '2.png', '3.png', '4.png', '5.png'];
        @endphp
        <div class="row" style="margin-top: 40px">
            <div class="col-md-6">
                <div class="splide__slide">
                    <img src="{{ asset('img/midu.jpg') }}" id="avatar" class="image-preview" alt="">
                </div><br>
                <div class="carousel-slide">
                    <div class="owl-carousel owl-theme">
                        @foreach ($images as $key => $image)
                            <div class="item">
                                <img src="{{ asset('images/payments/' . $image) }}" id="image-product" alt=""
                                    onclick="load({{ ++$key - 1 }})">
                            </div>
                        @endforeach
                    </div><br>
                </div>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
        <script src="{{ asset('owlcarousel/owl.carousel.min.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
        </script>
        <script>
            $(document).ready(function() {
                $('.owl-carousel').owlCarousel({
                    loop: true,
                    margin: 10,
                    nav: true,
                    responsive: {
                        0: {
                            items: 1
                        },
                        600: {
                            items: 2
                        },
                        1000: {
                            items: 4
                        }
                    }
                })
            });
        </script>

        <script type="text/javascript">
            var images = {!! json_encode($images) !!};
            console.log(window.location.origin);

            function load(index) {

                document.getElementById("avatar").src = window.location.origin + '/images/payments/' + images[index];
            }
        </script>
</body>

</html>
