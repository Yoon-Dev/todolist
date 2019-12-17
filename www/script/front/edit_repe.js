$(document).ready(function(){
    
    // DelOption();
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
        JourOption(jour);
    })


    function DelOption()
    {
        $( "div#edit_repe select[name=types_repe]#types option" ).remove();
        $( "div#edit_repe select[name=repe_jour]#jour option" ).remove();
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
            $( "div#edit_repe select[name=types_repe]#types" ).append(option);
        }
        if(type === "general"){
            option =
            `
            <option value="general">GENERAL</option>
            <option value="etude">ETUDE</option>
            <option value="devellopement">DEVELLOPEMENT</option>
            `;
            $( "div#edit_repe select[name=types_repe]#types" ).append(option);
        }
        if(type === "devellopement"){
            option =
            `
            <option value="devellopement">DEVELLOPEMENT</option>
            <option value="general">GENERAL</option>
            <option value="etude">ETUDE</option>
            `;
            $( "div#edit_repe select[name=types_repe]#types" ).append(option);       
        }
    }

    function JourOption(jour)
    {
        if(jour === "Mon"){
            option =
            `
            <option value="Mon">Mon</option>
            <option value="Tue">Tue</option>
            <option value="Wed">Wed</option>
            <option value="Thu">Thu</option>
            <option value="Fri">Fri</option>
            <option value="Sat">Sat</option>
            <option value="Sun">Sun</option>
            `;
            $( "div#edit_repe select[name=repe_jour]#jour" ).append(option);
        }
        if(jour === "Tue"){
            option =
            `
            <option value="Tue">Tue</option>
            <option value="Mon">Mon</option>
            <option value="Wed">Wed</option>
            <option value="Thu">Thu</option>
            <option value="Fri">Fri</option>
            <option value="Sat">Sat</option>
            <option value="Sun">Sun</option>
            `;
            $( "div#edit_repe select[name=repe_jour]#jour" ).append(option);
        }
        if(jour === "Wed"){
            option =
            `
            <option value="Wed">Wed</option>
            <option value="Mon">Mon</option>
            <option value="Tue">Tue</option>
            <option value="Wed">Wed</option>
            <option value="Thu">Thu</option>
            <option value="Fri">Fri</option>
            <option value="Sat">Sat</option>
            <option value="Sun">Sun</option>
            `;
            $( "div#edit_repe select[name=repe_jour]#jour" ).append(option);       
        }
        if(jour === "Thu"){
            option =
            `
            <option value="Thu">Thu</option>
            <option value="Mon">Mon</option>
            <option value="Tue">Tue</option>
            <option value="Wed">Wed</option>   
            <option value="Fri">Fri</option>
            <option value="Sat">Sat</option>
            <option value="Sun">Sun</option>
            `;
            $( "div#edit_repe select[name=repe_jour]#jour" ).append(option);
        }
        if(jour === "Fri"){
            option =
            `
            <option value="Fri">Fri</option>
            <option value="Mon">Mon</option>
            <option value="Tue">Tue</option>
            <option value="Wed">Wed</option>
            <option value="Thu">Thu</option>
            <option value="Sat">Sat</option>
            <option value="Sun">Sun</option>
            `;
            $( "div#edit_repe select[name=repe_jour]#jour" ).append(option);
        }
        if(jour === "Sat"){
            option =
            `
            <option value="Sat">Sat</option>
            <option value="Mon">Mon</option>
            <option value="Tue">Tue</option>
            <option value="Wed">Wed</option>
            <option value="Thu">Thu</option>
            <option value="Fri">Fri</option>
            <option value="Sun">Sun</option>
            `;
            $( "div#edit_repe select[name=repe_jour]#jour" ).append(option);
        }
        if(jour === "Sun"){
            option =
            `
            <option value="Sun">Sun</option>
            <option value="Mon">Mon</option>
            <option value="Tue">Tue</option>
            <option value="Wed">Wed</option>
            <option value="Thu">Thu</option>
            <option value="Fri">Fri</option>
            <option value="Sat">Sat</option>
            `;
            $( "div#edit_repe select[name=repe_jour]#jour" ).append(option);
        }
    }
})
