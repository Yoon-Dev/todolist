$(document).ready(function(){

    $( "div#add #sub-btn" ).click(function(ev){
        ev.preventDefault();
        ev.stopPropagation();

        var nom = $( "div#add input[name=nom]" ).val();
        var detail = $( "div#add textarea[name=detail]" ).val();
        var limite = $( "div#add input[name=limite]" ).val();
        var type = $( "div#add select[name=types]" ).val();

        $.get( "./serv/src/b-add.php", {nom: nom, detail: detail, limite: limite, type: type }, function(){
            $( ".page" ).hide();
            $( ".header-nav" ).show();
            $( "#list" ).show();
        } );
    })
})
