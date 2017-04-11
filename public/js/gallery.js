let xhr = $.get("https://api.giphy.com/v1/gifs/search?q=ryan+gosling&api_key=dc6zaTOxFJmzC&limit=12");
   xhr.done(function(giphy) {
     for (var i = 0; i < 12; i++) {
       var eachImage = (giphy.data[i].images.original.url);
       $('.open-lightbox').prepend("<a href="  + eachImage + "><img src=" + eachImage + " class='responsive-image'></a>");
     } 
   });

 (function($) {
  var image = $(this).attr('href');
  // Open Lightbox
  $('.open-lightbox').on('click', function(e) {
    e.preventDefault();
    $('html').addClass('no-scroll');
    $('.open-lightbox').append('<div class="lightbox-opened"><img src="#"></div>');
  });
  
  // Close Lightbox
    $('.open-lightbox').on('click', '.lightbox-opened', function() {
    $('html').removeClass('no-scroll');
    $('.lightbox-opened').remove();
  });
  
})(jQuery);