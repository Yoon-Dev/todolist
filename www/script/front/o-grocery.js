$(document).ready(function(){

    $( "div#add select[name=ingredient]" ).hide();
    $('div#add input[type=checkbox]').click(function(){
        if($(this).is(':checked')){
            console.log('in');
            $( "div#add select[name=ingredient]" ).show();
            $( "div#add input[name=nom]" ).val('Course');
            setDetail();

        }else{
            console.log('out');
            $( "div#add select[name=ingredient]" ).hide();
            $( "div#add input[name=nom]" ).val("");
            $( "div#add textarea[name=detail]" ).val("");
        }
        
    })

    function setDetail()
    {
        $( "div#add select[name=ingredient] option" ).click(function(){
            $( "div#add textarea[name=detail]" ).val($(this).val());
        })
    }
 

    
})
