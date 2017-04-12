$.getJSON("panelPageContent.json", function(json) {
    console.log(json);
    var newContainer = $('<div class="bodyContent" ></div>');
    for(var i = 0; i < json.length; i++) {
        newContainer.clone().appendTo( "body" );
        jQuery('.insideText').prepend('<h1 class="myTitle">' + json[i].title + '</h1>');   
        jQuery('.insideText').prepend('<p class="myText">' + json[i].text + '</p>');
    }
});

