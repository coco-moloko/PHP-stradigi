<!DOCTYPE html>
<html>
<head>
    @include("partials.head")
    <link rel="stylesheet" href="{{ URL::asset('css/gallery.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
</head>

@include("partials.header")

<body>
    <div class ="containerAllImages">
        <div class="open-lightbox"></div>
    </div>
    
    <script type="text/javascript" src="{{ URL::asset('js/gallery.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('lazyload.min.js') }}"></script>
</body>
</html>
