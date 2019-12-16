$(document).ready(function(){

    $( "div#add_repe #sub-btn" ).click(function(ev){
        ev.preventDefault();
        ev.stopPropagation();

        var nom_repe = $( "div#add_repe input[name=nom_repe]" ).val();
        var detail_repe = $( "div#add_repe textarea[name=detail_repe]" ).val();
        var repe_jour = $( "div#add_repe select[name=repe_jour]" ).val();
        var type_repe = $( "div#add_repe select[name=types_repe]" ).val();

        console.log(nom_repe, detail_repe, type_repe, repe_jour);
        
        // $.get( "./serv/src/b-add.php", {nom: nom, detail: detail, limite: limite, type: type }, function(){
        //     $( ".page" ).hide();
        //     $( ".header-nav" ).show();
        //     $( "#list" ).show();
        // } );
    })
})
