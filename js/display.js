$(document).ready(function (){
$('.list-info-tache').hide();
// DISLAY on click
$(".lien_jquery-nom").click(function (ev) {
    ev.preventDefault();
    // if ($(this).hasClass("rotation-lien")) {
    //     $(this).removeClass("rotation-lien");
        
    // }
    // else {
    //     $(this).addClass("rotation-lien")
  
    // }

    // affiche les ingredient
    // var parent = $(this).parent("h3");
    // parent.siblings('div').each(function (i) {
        $('.list-info-tache').slideToggle(400);

    // });
});


});