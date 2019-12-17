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
            $( ".header-nav" ).show();
            $( "#list" ).show();
        })  

        // on a.add click
        $( "a.add" ).click(function(ev){
            ev.preventDefault();
            ev.stopPropagation();
            
            $( ".page" ).hide();
            $( ".header-nav" ).hide();
            $( "#add" ).show();    
        })

        // on a.edit click
        $( "a.edit" ).click(function(ev){
            ev.preventDefault();
            ev.stopPropagation();

            $( ".page" ).hide();
            $( ".header-nav" ).hide();
            $( "#edit" ).show();
        })

        // on a.back click
        $( "a.backoffice" ).click(function(ev){
            ev.preventDefault();
            ev.stopPropagation();

            $( ".page" ).hide();
            $( ".header-nav" ).show();
            $( "#backoffice" ).show();
        })

        // on a.add_repe click
        $( "a.add_repe" ).click(function(ev){
            ev.preventDefault();
            ev.stopPropagation();
            
            $( ".page" ).hide();
            $( ".header-nav" ).hide();
            $( "#add_repe" ).show();    
        })

        // on a.edit_repe click
        $( "a.edit_repe" ).click(function(ev){
            ev.preventDefault();
            ev.stopPropagation();
            
            $( ".page" ).hide();
            $( ".header-nav" ).hide();
            $( "#edit_repe" ).show();    
        })

    }
})
