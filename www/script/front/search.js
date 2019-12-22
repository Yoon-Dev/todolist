$(document).ready(function(){
    
    $( "#search" ).keyup(function(ev){

        var search = $(this).val().toLowerCase()
        var view = $(this).attr('data-view')+" .tache";

        if($(this).val() == ""){
            $(view).show();   
        }else{
            // $( ".tache" ).hide();
            $(view).each(function(){
                if($(this).find( "h2.nom-contenant" ).text().toLowerCase().indexOf(search) !== -1){
                    $(this).show();
                }else{
                    $(this).hide();
                }
            })
        }
        
    });
})