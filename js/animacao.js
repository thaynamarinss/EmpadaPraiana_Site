function isScrolledIntoView(elem){
  var docViewTop = $(window).scrollTop();
  var docViewBottom = docViewTop + $(window).height();

  var elemTop = $(elem).offset().top;
  var elemBottom = elemTop + $(elem).height();

  return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
}





$(window).on('scroll', function(){
  if(isScrolledIntoView('.animadois')){
    $('.animadois').addClass('animated shake slow');
  }
 
});

$(window).on('scroll', function(){
  if(isScrolledIntoView('.animasejafran')){
    $('.animasejafran').addClass('animated tada slow');
  }
 
});

$(window).on('scroll', function(){
  if(isScrolledIntoView('.animabotfran')){
    $('.animabotfran').addClass('animated heartBeat slow');
  }
 
});

$(window).on('scroll', function(){
  if(isScrolledIntoView('.animamidia')){
    $('.animamidia').addClass('animated tada slow');
  }
 
});

















