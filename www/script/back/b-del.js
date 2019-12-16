$(document).ready(function(){

    $( "a.del" ).click(function(ev){
        ev.preventDefault();
        ev.stopPropagation();

        var id = $(this).attr('data-id');
        var is_simple = $(this).attr('data-simple');
        var backoffice = $(this).attr('data-backoffice');


        var element = "#"+id;

        $.get( "./serv/src/del.php", { id: id, is_simple: is_simple, backoffice: backoffice }, function(){
            $(element).remove();
        } );
    })
})