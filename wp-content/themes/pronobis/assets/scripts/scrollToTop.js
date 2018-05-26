jQuery(document).ready(function() {
  var btn = jQuery('.back-to-top');

  btn.on('click', function(e) {
    btn.css('opacity', '0.7');
    jQuery('html, body').animate({
      scrollTop: 0
    }, 500);
    e.preventDefault();
  });

  jQuery(window).on('scroll', function() {
    var self = jQuery(this);
    var height = self.height();
    var top = self.scrollTop();

    if (top > height) {
      if (!btn.is(':visible')) {
        btn.show();
      }
    } else {
      btn.hide();
    }
  });

});