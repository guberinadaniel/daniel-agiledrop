(function($) {

  $(function() {
    $('.toggle-nav img').click(function(e) {
      $(this).toggleClass('active');
      $('nav').slideToggle(900).toggleClass('active');

      e.preventDefault();
    });
  });

})(jQuery);

