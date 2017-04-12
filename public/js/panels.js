$.getJSON("panelPageContent.json", function(json) {
    console.log(json);
    for(var i = 0; i < json.length; i++) {
        $('.insideText')
        .prepend('<div class="bodyContent"><h1 class="myTitle">' + json[i].title + '</h1><p class="myText">' + json[i].text + '</p></div>');   
        
    }
});

