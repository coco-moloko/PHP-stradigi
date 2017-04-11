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
                <h1 class="myTitle">This is test content to be printed. This is test content to be printed.</h1>
                <p class="myText">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce nec eros dictum, feugiat nulla sit amet, fermentum nibh. Aliquam id semper mauris. Nunc sit amet lacus id nibh molestie porta. Aliquam non magna non erat facilisis imperdiet. Suspendisse consequat lobortis lacinia. Nam laoreet aliquam enim vitae cursus. Nulla non  mauris augue, in sollicitudin dui lacinia sed Nulla d, egestas et neque.</p>
    </div>
    
    
    <script type="text/javascript" src="{{ URL::asset('js/panels.js') }}"></script>


</body>

</html>

