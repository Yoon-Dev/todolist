$(document).ready(function(){
    
    DelOption();
    $( "a.edit" ).click(function(ev){
        ev.preventDefault();
        ev.stopPropagation();
        DelOption();
        var nom = $(this).attr('data-nom');
        var detail = $(this).attr('data-detail');
        var type = $(this).attr('data-type');
        var date = $(this).attr('data-date');
        // console.log(nom, detail, type, date, typeof(nom), typeof(detail), typeof(type), typeof(date));
        $( "input[name=nom]" ).val(nom);
        $( "textarea[name=detail]" ).val(detail);
        var date_obj = new Date(date);
        document.getElementById("date").valueAsDate = date_obj;
        TypeOption(type);
    })


    function DelOption()
    {
        $( "select[name=types] option" ).remove();
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
            $( "select[name=types]" ).append(option);
        }
        if(type === "general"){
            option =
            `
            <option value="general">GENERAL</option>
            <option value="etude">ETUDE</option>
            <option value="devellopement">DEVELLOPEMENT</option>
            `;
            $( "select[name=types]" ).append(option);
        }
        if(type === "devellopement"){
            option =
            `
            <option value="devellopement">DEVELLOPEMENT</option>
            <option value="general">GENERAL</option>
            <option value="etude">ETUDE</option>
            `;
            $( "select[name=types]" ).append(option);       
        }
    }
})