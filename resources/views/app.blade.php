<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="/css/slick.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/plyr.css">
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
            position:absolute;
            top:0;
            right:0;
            color:#fff;
            background:#fff;
            padding:20px;
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
    {{-- Add to project--}}
</head>
<body>

<div class="overlay"></div>

@include('includes.buttonToTop')


@include('includes.navbar')

<div class="container">
    @include('includes.errorMessage')
</div>


@yield('content')


@include('includes.footer')

<script src="/js/app.js"></script>
<script src="/js/slick.min.js"></script>
<script src="/js/common.js"></script>
<script>
    $( document ).ready(function() {

    });

</script>
</body>
</html>