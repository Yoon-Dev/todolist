$(document).ready(function (){
$('#tache_simple').hide();
$('#tache_repe').hide();
$("#lien_tache_simple").click(function (ev) {
    ev.preventDefault(ev);
    $('#tache_repe').hide();
    $('#tache_simple').slideToggle();

});
$("#lien_tache_repe ").click(function (ev) {
    ev.preventDefault();
    $('#tache_simple').hide();
    $('#tache_repe').slideToggle();
});

});