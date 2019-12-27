$(document).ready(function(){
    
    $( ".navbar-toggler" ).click(function(){
        var state = $(this).attr('data-state');
        if(state == "on"){
            $(this).attr('data-state', 'off');
            $(this).children( "span" ).css("background-image", "url('./img/icone/burger_off.svg')");
            $( "#body .navbar" ).attr("class", "navbar navbar-expand-lg navbar-light bg-white");
        }else{
            $(this).attr('data-state', 'on');
            $(this).children( "span" ).css("background-image", "url('./img/icone/burger.svg')");
            $( "#body .navbar" ).attr("class", "navbar navbar-expand-lg navbar-light bg-transparent");
        }
    })
})