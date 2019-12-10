$(document).ready(function (){
$('.list-info-tache').hide();
$('.navigation_entete').hide();
// DISLAY on click

$(".lien-navigation-entente").click(function (ev) {
    ev.preventDefault();
    if ($(this).hasClass("rotation-lien")) {
        $(this).removeClass("rotation-lien");
        
    }
    else {
        $(this).addClass("rotation-lien")
  
    }
    $('.navigation_entete').slideToggle();
});
$(".lien_jquery-nom").click(function (ev) {
    ev.preventDefault();
    if ($(this).hasClass("rotation-lien")) {
        $(this).removeClass("rotation-lien");
        
    }
    else {
        $(this).addClass("rotation-lien")
  
    }
    // affiche les details
        var parent_1 = $(this).parent('.col-2');
        var parent_2 = parent_1.parent('.row');
        var parent_3 = parent_2.parent('.box-lien');
        var parent_4 = parent_3.parent('.box');
    // parent.siblings('div').each(function (i) {
        var tache = parent_4.children('.list-info-tache');
        $(tache).slideToggle(400);

    // });
});
// °°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°
// SCROLL DOWN
// °°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°
// PREND BEAUCOUP TROP DE TEMPS
(function () {
    var previousScroll = 0;
    $(window).scroll(function(){
       var currentScroll = $(this).scrollTop();
       if (currentScroll > previousScroll){
           console.log('down');
           $('.header-nav').fadeOut(200);
       } else {
          console.log('up');
          $('.header-nav').fadeIn(200);
       }
       previousScroll = currentScroll;
    });
}());

});