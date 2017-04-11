<head>
    @include("partials.head")
    <link rel="stylesheet" href="{{ URL::asset('css/panels.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
</head>

@include("partials.header")

<body>
    <div class="bodyContent">
        <div class="allText">
            <div class="logoCircle"><img src="{{ URL::asset('img/img-kraken.png') }}"></img></div>
                <h1 class="title">This is test content to be printed. This is test content to be printed.</h1>
                <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce nec eros dictum, feugiat nulla sit amet, fermentum nibh. Aliquam id semper mauris. Nunc sit amet lacus id nibh molestie porta. Aliquam non magna non erat facilisis imperdiet. Suspendisse consequat lobortis lacinia. Nam laoreet aliquam enim vitae cursus. Nulla non  mauris augue, in sollicitudin dui lacinia sed Nulla d, egestas et neque.</p>
        </div>
    </div>
<? php 
    $path = storage_path() . "/storage/json/panelPageContent.json";
    $jsondata = json_decode(file_get_contents($path), true);
    print_r($jsondata);
    // $outputTitle = "<h1>"
    // foreach $jsondata['title'][0]
    

</body>

