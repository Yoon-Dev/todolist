$(document).ready(function(){

var master = $( "body" ).attr('data-master');
$( ".page" ).hide();
$( "#list" ).show();

    if(master == "list"){

        // on a.list click
        $( "a.list" ).click(function(ev){
            ev.preventDefault();
            ev.stopPropagation();
            
            $( ".page" ).hide();
            $( "#list" ).fadeIn();
            $( "#search" ).attr( "data-view", "#list" );
        });  

        // on a.add click
        $( "a.add" ).click(function(ev){
            ev.preventDefault();
            ev.stopPropagation();
            
            $( ".page" ).hide();
            $( "#add" ).fadeIn();    
        });

        // on a.edit click
        $( "a.edit" ).click(function(ev){
            ev.preventDefault();
            ev.stopPropagation();

            $( ".page" ).hide();
            $( "#edit" ).fadeIn();
        });

        // on a.back click
        $( "a.backoffice" ).click(function(ev){
            ev.preventDefault();
            ev.stopPropagation();
            $( ".page" ).hide();
            $( "#backoffice" ).fadeIn();
            $( "#search" ).attr( "data-view", "#backoffice" );
        });

        // on a.add_repe click
        $( "a.add_repe" ).click(function(ev){
            ev.preventDefault();
            ev.stopPropagation();
            $( ".page" ).hide();
            $( "#add_repe" ).fadeIn();    
        });

        // on a.edit_repe click
        $( "a.edit_repe" ).click(function(ev){
            ev.preventDefault();
            ev.stopPropagation();
            
            $( ".page" ).hide();
            $( "#edit_repe" ).fadeIn();    
        });

    }
})
