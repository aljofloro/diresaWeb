$(document).ready(function() {

  $('#listaNoticias').infiniteScroll({
    path: '.pagination__next',
    append: '.itemNoticia',
    status: '.scroller-status',
    hideNav: '.pagination'
  });

});