<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
          integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" href="/css/style.css">

    <link rel="stylesheet" href="https://cdn.plyr.io/3.3.10/plyr.css">
{{-- ADD TO PROJECT --}}
    <title>Document</title>
    <style>
        .plyr {
            border-radius: 4px;
            margin-bottom: 15px;
        }
        .title {
            position:absolute;
            top:0;
            left:0;
            color:#fff;
            padding:20px;
        }
        .button {
            position: absolute;
            top: 0;
            right: 0;
            margin: 11px;
            color: #fff;
            background: #fff;
            padding: 10px;
        }
        .plyr--hide-controls .title {
            opacity: 0;
            pointer-events: none;
        }
        .plyr--hide-controls .button {
            opacity: 0;
            pointer-events: none;
        }
    </style>
</head>
<body>

@include('includes.buttonToTop')


@include('includes.navbar')

<div class="container">
    @include('includes.errorMessage')
</div>


@yield('content')


@include('includes.about')

@include('includes.footer')

<script src="/js/app.js"></script>

<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script>$('.responsive').slick({
        dots: false,
        infinite: true,
        prevArrow: "<button type='button' class='slick-prev pull-left'><i class='fas fa-angle-double-left' aria-hidden='true'></i></button>",
        nextArrow: "<button type='button' class='slick-next pull-right'><i class='fas fa-angle-double-right' aria-hidden='true'></i></button>",
        speed: 500,
        slidesToShow: 3,
        slidesToScroll: 2,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    infinite: true,
                }
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });</script>
<script src="/js/common.js"></script>
</body>
</html>