$(document).ready(function() {

  $('.article-feed').infiniteScroll({
    path: '.pagination__next',
    append: '.article',
    status: '.scroller-status',
    hideNav: '.pagination',
    scrollThreshold: 700
  });

});