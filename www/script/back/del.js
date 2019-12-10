$(document).ready(function(){

    $( "a.del" ).click(function(ev){
        ev.preventDefault();
        ev.stopPropagation();

        var id = $(this).attr('data-id');
        var is_simple = $(this).attr('data-simple');

        var element = "#"+id;

        $.get( "./serv/src/del.php", { id: id, is_simple: is_simple }, function(){
            console.log('in');
            $(element).remove();
        } );
    })
})