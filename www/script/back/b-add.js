$(document).ready(function(){

    $( "div#add #sub-btn" ).click(function(ev){
        ev.preventDefault();
        ev.stopPropagation();

        var nom = $( "div#add input[name=nom]" ).val();
        var detail = $( "div#add textarea[name=detail]" ).val();
        var limite = $( "div#add input[name=limite]" ).val();
        var type = $( "div#add select[name=types]" ).val();

        $.get( "./serv/src/b-add.php", {nom: nom, detail: detail, limite: limite, type: type }, function(){
            $( ".page" ).hide();
            $( ".header-nav" ).show();
            $( "#list" ).show();
            CreatNewTask(nom, detail, limite, type)
        } );
    })

    function CreatNewTask(nom, detail, limite, type)
    {
        task =
        `
        <div id="reload" class="tache col-12 col-md-6 col-xl-4 text-center my-5" data-type="`+type+`" data-istoday=" a faire !<?php echo$tache->isToday();?>">
        <div class="box">
            <div class="box-lien">
                <div class="row">
                    <div class="col-2 icone-box">
                      <a class="del" href="#" data-id="reload" data-simple="true" data-backoffice="non" onclick="location.reload()"><i class="fas fa-minus"></i></a>
                    </div>
                    <div class="col-8">
                        <h2 class="nom-contenant bon">`+nom+`</h2>
                    </div>
                    <div class="col-2">
                        <a class="lien_jquery-nom" href="#"><i class="fas fa-chevron-up"></i></a>
                    </div>
                </div>
            </div>
            <div class="list-info-tache" id="list-info-tache">
                <h5>`+detail+`</h5>
                <h3>`+limite+`</h3>
                <p>`+type+`</p>
                <div class="box-lien">
                    <div class="row">
                        <div class="col-12 text-center">
                          <a class="edit" href=""
                          data-id="reload" onclick="location.reload()">
                          <i class="far fa-edit"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        `;
        $( "div#list div#task-list div.row.list-container" ).append(task);
    }
})
