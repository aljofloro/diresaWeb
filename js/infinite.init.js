$(document).ready(function() {

  $('.listaNoticias').infiniteScroll({
    // options
    path: '.pagination__next',
    append: '.itemNoticia',
    history: false
  });

});