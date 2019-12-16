$(document).ready(function(){
    
    DelOption();
    $( "a.edit" ).click(function(ev){
        ev.preventDefault();
        ev.stopPropagation();

        DelOption();

        var id = $(this).attr('data-id');
        var nom = $(this).attr('data-nom');
        var detail = $(this).attr('data-detail');
        var type = $(this).attr('data-type');
        var date = $(this).attr('data-date');

        $( "div#edit input[name=id]" ).val(id);
        $( "div#edit input[name=nom]" ).val(nom);
        $( "div#edit textarea[name=detail]" ).val(detail);
        var date_obj = new Date(date);
        document.getElementById("date").valueAsDate = date_obj;
        TypeOption(type);
    })


    function DelOption()
    {
        $( "div#edit select[name=types]#edit option" ).remove();
    }

    function TypeOption(type)
    {
        if(type === "etude"){
            option =
            `
            <option value="etude">ETUDE</option>
            <option value="general">GENERAL</option>
            <option value="devellopement">DEVELLOPEMENT</option>
            `;
            $( "div#edit select[name=types]#edit" ).append(option);
        }
        if(type === "general"){
            option =
            `
            <option value="general">GENERAL</option>
            <option value="etude">ETUDE</option>
            <option value="devellopement">DEVELLOPEMENT</option>
            `;
            $( "div#edit select[name=types]#edit" ).append(option);
        }
        if(type === "devellopement"){
            option =
            `
            <option value="devellopement">DEVELLOPEMENT</option>
            <option value="general">GENERAL</option>
            <option value="etude">ETUDE</option>
            `;
            $( "div#edit select[name=types]#edit" ).append(option);       
        }
    }
})