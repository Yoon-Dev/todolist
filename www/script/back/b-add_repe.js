$(document).ready(function(){

    $( "div#add_repe #sub-btn" ).click(function(ev){
        ev.preventDefault();
        ev.stopPropagation();

        var nom_repe = $( "div#add_repe input[name=nom_repe]" ).val();
        var detail_repe = $( "div#add_repe textarea[name=detail_repe]" ).val();
        var repe_jour = $( "div#add_repe #multiselect" ).val().join();
        var type_repe = $( "div#add_repe select[name=types_repe]" ).val();

        $.get( "./serv/src/b-add_repe.php", {nom_repe: nom_repe, detail_repe: detail_repe, repe_jour: repe_jour, type_repe: type_repe }, function(){
            $( ".page" ).hide();
            $( ".header-nav" ).show();
            $( "#backoffice" ).show();
            CreatNewTaskRepe(nom_repe, detail_repe, repe_jour, type_repe);
        } );
    })

    function CreatNewTaskRepe(nom_repe, detail_repe, repe_jour, type_repe)
    {
        task =
        `
        <div id="reload" class="tache col-12 col-md-6 col-xl-4 text-center my-5" data-type="`+type_repe+`">
            <div class="box">
                <div class="box-lien">
                    <div class="row">
                        <div class="col-2 icone-box">
                        <a class="del" href="#" data-id="reload" data-simple="false" data-backoffice="oui" onclick="location.reload()"><i class="fas fa-minus"></i></a>
                        </div>
                        <div class="col-8">
                            <h2 class="nom-contenant bon">`+nom_repe+`</h2>
                        </div>
                        <div class="col-2">
                            <a class="lien_jquery-nom" href="#" ><i class="fas fa-chevron-up"></i></a>
                        </div>
                    </div>
                </div>
                <div class="list-info-tache" id="list-info-tache">
                    <h5>`+detail_repe+`</h5>
                    <h5>`+repe_jour+`</h5>
                    <p>`+type_repe+`</p>
                    <div class="box-lien">
                        <div class="row">
                            <div class="col-12 text-center">
                            <a class="edit_repe" href="#"
                            onclick="location.reload()">
                            <i class="far fa-edit"></i>E</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        `;
        $( "div.row.backoffice-container" ).append(task);
    }


})
