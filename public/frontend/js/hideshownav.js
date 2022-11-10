$(window).scroll(function() {
    if ($(this).scrollTop() > 5) {
      $('.landernav').fadeOut();
    }else{
        $('.landernav').fadeIn();
    }
});
$(window).scroll(function() {
    if ($(this).scrollTop()>5) {
    $('.clientnave').fadeIn();
    }else{
        $('.clientnave').fadeOut();
    }
});