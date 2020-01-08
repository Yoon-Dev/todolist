$(document).ready(function(){
    
    $( "input[name=search]" ).keyup(function(){

        var search = $(this).val().toLowerCase()
        var view = $(this).attr('data-view')+" .tache";

        if($(this).val() == ""){
            $(view).fadeIn();   
        }else{
            // $( ".tache" ).hide();
            $(view).each(function(){
                if($(this).find( "h2.nom-contenant" ).text().toLowerCase().indexOf(search) !== -1){
                    $(this).fadeIn();
                }else{
                    $(this).hide();
                }
            })
        }   
    });
    $( ".show-search" ).click(function(ev){
        ev.preventDefault();
        ev.stopPropagation(); 
        $( ".search-area" ).fadeIn(100);
    })
})