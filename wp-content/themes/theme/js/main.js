var check=true;
   $(document).ready(function(){
//scroll-href
$('a[href*="#"]:not([href="#"])').click(function() {
  if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
    var target = $(this.hash);
    target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
    if (target.length) {
      $('html, body').animate({
        scrollTop: target.offset().top
      }, 1000);
      return false;
    }
  }
});

//menu-responsive

    $("#icon-menu").click(function(){
       if(check==true)
    {
      $("#menu-top-right").css('display','block');
               
      check=false;
    }
    else
    {
    $("#menu-top-right").css('display','none');
         check=true;
    }
    });


});

$(window).bind('scroll', function () {
  if ($(window).scrollTop() > 50) {
    $('#menu-top').addClass('fixed');
    $('#logo a img').addClass('image-fix');
    $('#menu-top-right').addClass('fix-menu-right');
    $('#tab-menu').addClass('fixed-menu');


  } else {
    $('#menu-top').removeClass('fixed');
    $('#logo a img').removeClass('image-fix');
    $('#menu-top-right').removeClass('fix-menu-right');
        $('#tab-menu').removeClass('fixed-menu');



  }

});

$(function(){
$(window).scroll(function () {
if ($(this).scrollTop() > 100) $('#goTop').fadeIn();
else $('#goTop').fadeOut();
});
$('#goTop').click(function () {
$('body,html').animate({scrollTop: 0}, 'slow');
});
});

