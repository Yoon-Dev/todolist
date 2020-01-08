$(document).ready(function(){

    $( "div#edit .sub-btn" ).click(function(ev){
        ev.preventDefault();
        ev.stopPropagation();
        var id = $( "div#edit input[name=id]" ).val();
        var nom = $( "div#edit input[name=nom]" ).val();
        var detail = $( "div#edit textarea[name=detail]" ).val();
        var limite = $( "div#edit input[name=limite]" ).val();
        var type = $( "div#edit select[name=types]" ).val();

        $.get( "./serv/src/b-edit.php", { id: id, nom: nom, detail: detail, limite: limite, type: type }, function(){
            $( ".page" ).hide();
            $( ".header-nav" ).show();
            $( "#list" ).show();
        } );
    })

    
})