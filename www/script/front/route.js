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

        // on a.edit click
        $( "a.edit" ).click(function(ev){
            ev.preventDefault();
            ev.stopPropagation();

            $( ".page" ).hide();
            $( ".header-nav" ).hide();
            $( "#edit" ).show();
        })
        // on a.back click
    }
})
