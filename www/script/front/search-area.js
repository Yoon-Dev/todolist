$(document).ready(function(){

    $( ".rm-search-area" ).click(function(ev){
        ev.preventDefault();
        ev.stopPropagation(); 
        $( ".search-area" ).hide();
        $( "input[name=search]" ).val("");
        $(".tache").show(); 
    })

})
