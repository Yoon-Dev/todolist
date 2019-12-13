$(document).ready(function(){

    $( "#sub-btn" ).click(function(ev){
        ev.preventDefault();
        ev.stopPropagation();
        var id = $( "input[name=id]" ).val();
        var nom = $( "input[name=nom]" ).val();
        var detail = $( "textarea[name=detail]" ).val();
        var limite = $( "input[name=limite]" ).val();
        var type = $( "select[name=types" ).val();

        console.log(id, nom, detail, limite, type);

    })

    
})