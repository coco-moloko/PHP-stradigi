$.getJSON("panelPageContent.json", function(json) {
    console.log(json); 
    for(var i = 0; i < json.length; i++) {
        jQuery('.bodyContent').append('<h1 class="myTitle">' + json[i].title + '</h1>').addClass('.myTitle');   
        jQuery('.bodyContent').append('<p class="myText">' + json[i].text + '</p>').addClass('.myText');
}
});

