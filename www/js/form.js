$(document).ready(function () {
    $('#tache_simple').hide();
    $('#tache_repe').hide();
    $("#lien_tache_simple").click(function (ev) {

        ev.preventDefault(ev);
        setTimeout(function(){
            $('#tache_repe').hide();
            $('#tache_simple').slideToggle();
        },180); 


    });
    $("#lien_tache_repe").click(function (ev) {
        ev.preventDefault();
        setTimeout(function(){
            $('#tache_simple').hide();
            $('#tache_repe').slideToggle();
        },180); 

    });




    // changement STATE link tache simple
    $("#lien_tache_simple").click(function () {
        // °°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°
        console.log("fct simple");
        $("#lien_tache_repe").removeClass("lien-select-form_click");
        // °°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°
        // AJOUT CLASSE LINK
        setTimeout(function(){

            if ($(this).hasClass("lien-select-form_click")) {
                console.log("j'ai la classe");
                // si il y a pas la classe gif, REMOVE
                $(this).addClass("lien-select-form_click");
            }
            if ($('#tache_simple').is(":hidden")) {
                console.log("oui");
                // si il y a pas la classe gif, REMOVE
                $("#lien_tache_simple").addClass("lien-select-form_click");
            }
    
            else {
                // sinon ADD
                console.log("non");
                $("#lien_tache_simple").removeClass("lien-select-form_click");
            }
        },100); 
        

    });



    $("#lien_tache_repe").click(function () {
        // °°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°
        console.log("fct repe");
        $("#lien_tache_simple").removeClass("lien-select-form_click");
        // °°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°
        // AJOUT CLASSE LINK


        setTimeout(function(){
            console.log('oui');
            if ($(this).hasClass("lien-select-form_click")) {
                console.log("j'ai la classe");
                // si il y a pas la classe gif, REMOVE
                $(this).addClass("lien-select-form_click");
            }
            if ($('#tache_repe').is(":hidden")) {
                console.log("oui");
                // si il y a pas la classe gif, REMOVE
                $("#lien_tache_repe").addClass("lien-select-form_click");
            }
    
            else {
                // sinon ADD
                console.log("non");
                $("#lien_tache_repe").removeClass("lien-select-form_click");
            }

        },100); 


    });



});