// Thanks to https://coderwall.com/p/rxfefg for getting me working on this.

$(window).scroll(function(i){
    var scrollVar = $(window).scrollTop();
    $('.chop').css({'opacity':( 100-scrollVar )/100});
})
