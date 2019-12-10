$(document).ready(function(){

    console.log('in');
    $( "a.test" ).click(function(ev){
        ev.preventDefault;
        $( "body" ).load( "index.php" );
    })
})
