let xhr = $.get("https://api.giphy.com/v1/gifs/search?q=ryan+gosling&api_key=dc6zaTOxFJmzC&limit=12");
   xhr.done(function(giphy) {
     for (var i = 0; i < 12; i++) {
       var eachImage = (giphy.data[i].images.original.url);
       $('.open-lightbox').prepend("<img src=" + eachImage + " class='responsive-image' onclick='openLightBox(this)'>");
     } 
   });
   
    //$('.responsive-image').on('click', function(e) {
        function openLightBox(e){
   
    var imgSrc =$(e).attr('src');
    $('html').addClass('no-scroll');
    $(".open-lightbox").children().hide();
    $(e).show();
    $('.open-lightbox').addClass('lightbox-opened');
        }
  //});
  
  $('.open-lightbox').on('click', '.lightbox-opened', function() {
      $('.open-lightbox').removeClass('lightbox-opened');
      $(".open-lightbox").children().show();
    $('html').removeClass('no-scroll');
  });

 (function($) {
  //var image = $(this).attr('href');
  // Open Lightbox
 $('html').click(function(e){
   if(!$(e.target).hasClass('responsive-image') )
   {
      $('.open-lightbox').removeClass('lightbox-opened');
      $(".open-lightbox").children().show();
    $('html').removeClass('no-scroll');              
   }
 });
  
  // Close Lightbox
    $('.open-lightbox').on('click', '.lightbox-opened', function() {
     $('.open-lightbox').removeClass('lightbox-opened');
      $(".open-lightbox").children().show();
    $('html').removeClass('no-scroll');
  });
  
})(jQuery);
