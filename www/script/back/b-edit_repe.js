$(document).ready(function(){

    $( "div#edit_repe .sub-btn" ).click(function(ev){
        ev.preventDefault();
        ev.stopPropagation();
        var id = $( "div#edit_repe input[name=id]" ).val();
        var nom_repe = $( "div#edit_repe input[name=nom_repe]" ).val();
        var detail_repe = $( "div#edit_repe textarea[name=detail_repe]" ).val();
        var type_repe = $( "div#edit_repe select[name=types_repe]" ).val();
        var repe_jour = String($( "div#edit_repe select[name=repe_jour]" ).val());
        // console.log(repe_jour, typeof(repe_jour), String(repe_jour));
        // while(var i = 0; i < repe_jour.len)
        $.get( "./serv/src/b-edit_repe.php", { id: id, nom_repe: nom_repe, detail_repe: detail_repe, repe_jour: repe_jour, type_repe: type_repe }, function(){
            $( ".page" ).hide();
            $( ".header-nav" ).show();
            $( "#backoffice" ).show();
        } );
    })

    
})