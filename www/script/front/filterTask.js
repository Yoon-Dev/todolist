$(document).ready(function(){

    $( "a.filter" ).click(function(ev){
        ev.preventDefault;
        var filtre = $(this).attr('data-filtre');
        $( "div.tache" ).each(function() {
            if($(this).is(":visible")){
                    $(this).hide()
            }
            if($(this).attr('data-type') == filtre){
                $(this).show();
            }
        });
    })

    $( "a.istoday" ).click(function(ev){
        ev.preventDefault;
        $( "div.tache" ).each(function(){
            if($(this).is(":visible")){
                $(this).hide()
            }
            if($(this).attr('data-istoday') == "yes"){
                $(this).show();
            }
        });    
    })



});
