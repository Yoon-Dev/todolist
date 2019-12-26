$(document).ready(function(){
    
    $( ".list-info-tache" ).hide();

    $( ".detail" ).click(function(ev){
        ev.preventDefault();
        ev.stopPropagation();
        Animate($(this));
        var parent = $(this).parents('.box');
        var tache = parent.children('.list-info-tache');
        $(tache).slideToggle(400);

    })

    function Animate(el)
    {
        el.animate({
            opacity: 0,
          }, 150, function() {
            // Animation complete.
            if(el.children().hasClass('fa-chevron-up')){
                el.children().attr('class', 'fa-chevron-down')
            }else{
                el.children().attr('class', 'fa-chevron-up')
            }
            el.animate({
                opacity: 1,
              }, 150, function() {
                
              });
          });
    }
})