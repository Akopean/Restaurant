(function($) {

  document.onmousemove = function(e) {
    var y,x;
    if(e.y > $('#homebanner').offset().top)
         y = -(e.y / 30);
    else
      y = e.y / 30;
    if(e.x > $('#homebanner').offset().left)
         x = -(e.x / 60);
    else
      x = e.x / 60;
      $('.layer').css({'transform': 'translate3d('+ x +'px, '+y+'px, 0px)'});
  }
})(jQuery);

