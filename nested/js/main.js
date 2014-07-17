//reduce the opacity of the banner if the page is scrolled.
$(window).scroll(function () {
  var height = $("body").height();
  var scrollTop = $("body").scrollTop();
  var opacity = 1;

  if(scrollTop < 41)
    {opacity = 1-Math.floor(scrollTop)/100;}
    else
    {opacity = 0.6;}

  $("h1").css("opacity", opacity);
  $("h1").hover(function(){
    $(this).css("opacity", 1);
    },function(){
    $(this).css("opacity", 0.6);
    });
});
