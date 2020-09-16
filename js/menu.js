/*
$(document).ready(function(){
  $('ul li a').click(function(){
    $('li a').removeClass("active");
    $(this).addClass("active");
});
});


*/


function isScrolledIntoView(elem){
    var docViewTop = $(window).scrollTop();
    var docViewBottom = docViewTop + $(window).height();
  
    var elemTop = $(elem).offset().top;
    var elemBottom = elemTop + $(elem).height();
  
    return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
  }

  
$(window).on('scroll', function(){
    if(isScrolledIntoView('.animadois')){
        $('li a').removeClass("active");
      $('#sobre').addClass('active');
    }
   
  });

  $(window).on('scroll', function(){
    if(isScrolledIntoView('.animasejafran')){
        $('li a').removeClass("active");
      $('#franquiali').addClass('active');
    }
   
  });

  $(window).on('scroll', function(){
    if(isScrolledIntoView('.animamidia')){
        $('li a').removeClass("active");
      $('#midiali').addClass('active');
    }
   
  });


  $(window).on('scroll', function(){
    if(isScrolledIntoView('.sepaform')){
        $('li a').removeClass("active");
      $('#cadastrarli').addClass('active');
    }
   
  });

  $(window).on('scroll', function(){
    if(isScrolledIntoView('.inicioparaefeito')){
        $('li a').removeClass("active");
      $('#inicioli').addClass('active');
    }
   
  });