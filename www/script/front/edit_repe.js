$(document).ready(function(){

    var jour_tab = ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'];
    $( "a.edit_repe" ).click(function(ev){
        ev.preventDefault();
        ev.stopPropagation();

        DelOption();

        var id = $(this).attr('data-id');
        var nom_repe = $(this).attr('data-nom');
        var detail_repe = $(this).attr('data-detail');
        var type_repe = $(this).attr('data-type');
        var jour = $(this).attr('data-jour');

        console.log(id, nom_repe, detail_repe, type_repe, jour);
        $( "div#edit_repe input[name=id]" ).val(id);
        $( "div#edit_repe input[name=nom_repe]" ).val(nom_repe);
        $( "div#edit_repe textarea[name=detail_repe]" ).val(detail_repe);
        TypeOption(type_repe);
    })


    function DelOption()
    {
        $( "div#edit_repe select[name=types_repe]#types option" ).remove();
    }

    function TypeOption(type)
    {
        var first_option = "";
        var last_option = "";
        var types = ['etude', 'general', 'devellopement'];
        for(i=0; i<types.length; i++){
            if(types[i] == type){
                first_option += 
                `
                <option value="`+types[i]+`">`+types[i].toUpperCase()+`</option>
                `;
            }else{
                last_option += 
                `
                <option value="`+types[i]+`">`+types[i].toUpperCase()+`</option>
                `;
            }
        }
        option = first_option+last_option;
        $( "div#edit_repe select[name=types_repe]#types" ).append(option);
    }
})
