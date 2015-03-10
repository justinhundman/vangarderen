jQuery(document).ready(function($) {
  $('.accordion').click(function(evt) {

    $('.accContent').slideUp('slow');
    if ($(this).next().is(':hidden') == true) {
      $(this).next().slideDown('slow');
    }
  });


  $('.accContent').hide(); // Hide Content

  var hashtag = window.location.hash;
  var zonderhekje = hashtag.substring(1);
  if (zonderhekje != null && zonderhekje != '') {
    $('.' + zonderhekje).show();
  }

});
