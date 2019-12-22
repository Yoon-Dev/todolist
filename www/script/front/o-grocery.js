$(document).ready(function(){

    $( "div#add select[name=ingredient]" ).hide();
    $('div#add input[type=checkbox]').click(function(){
        if($(this).is(':checked')){
            var checked = true;
            $( "div#add select[name=ingredient]" ).show();
            $( "div#add input[name=nom]" ).val('Course');
            $( "div#add select[name=types]" ).val('etude');
            setDetail();
            ChangeOption(checked);

        }else{
            $( "div#add select[name=ingredient]" ).hide();
            $( "div#add input[name=nom]" ).val("");
            $( "div#add textarea[name=detail]" ).val("");
            ChangeOption(checked);
        }
        
    })

    function setDetail()
    {
        $( "div#add select[name=ingredient] option" ).click(function(){
            $( "div#add textarea[name=detail]" ).val($(this).val());
        })
    }

    function ChangeOption(checked)
    {
        $( "div#add select[name=types] option" ).remove();
        if(checked == true){
            option =
            `
            <option value="general">GENERAL</option>
            <option value="etude">ETUDE</option>
            <option value="devellopement">DEVELLOPEMENT</option>
            `;
        }else{
            option =
            `
            <option value="etude">ETUDE</option>
            <option value="general">GENERAL</option>
            <option value="devellopement">DEVELLOPEMENT</option>
            `;
        }
        $( "div#add select[name=types]" ).append(option);
    }
 

    
})
