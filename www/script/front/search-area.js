$(document).ready(function(){

    $( ".rm-search-area" ).click(function(ev){
        ev.preventDefault();
        ev.stopPropagation(); 
        $( ".search-area" ).slideUp('fast');
        $( "input[name=search]" ).val("");
        $(".tache").show(); 
    })

})
