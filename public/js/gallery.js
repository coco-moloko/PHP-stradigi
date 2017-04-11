function getAPI() {
   let xhr = $.get("https://api.giphy.com/v1/gifs/search?q=ryan+gosling&api_key=dc6zaTOxFJmzC&limit=12");
   xhr.done(function(giphy) {
     for (var i = 0; i < giphy.data.length; i++) {
       var eachImage = (giphy.data[i].images.original.url);
       $('.containerAllImages').prepend("<a href="  + eachImage + " class='open-lightbox'><img src=" + eachImage + " class='responsive-image'></a>");
     }
   });
 }
 getAPI();
 
 (function($) {
  
  // Open Lightbox
  $('.open-lightbox a.link').on('click', function(e) {
    e.preventDefault();
    var image = $(this).attr('href');
    $('html').addClass('no-scroll');
    $('.open-lightbox').append('<div class="lightbox-opened"><img src="' + image + '"></div>');
  });
  
  // Close Lightbox
    $('.open-lightbox').on('click', '.lightbox-opened', function() {
    $('html').removeClass('no-scroll');
    $('.lightbox-opened').remove();
  });
  
})(jQuery);
 