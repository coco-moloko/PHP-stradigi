<html>
<head>
    @include("partials.head")
    <link rel="stylesheet" href="{{ URL::asset('css/panels.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
</head>

@include("partials.header")

<body>
    <div class="bodyContent">
            <div class="logoCircle"><img src="{{ URL::asset('img/img-kraken.png') }}"></img></div>
                <h1 class="myTitle"></h1>
                <p class="myText"></p>
    </div>
    
    
    <script type="text/javascript" src="{{ URL::asset('js/panels.js') }}"></script>


</body>

</html>

