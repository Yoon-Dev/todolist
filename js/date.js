$(document).ready(function () {
    // selection de la date du jour
    date = new Date();
    dateY = date.getFullYear();
    dateM = date.getMonth() + 1;
    dateD = date.getDate();
    switch(true){
        case dateM < 10 && dateD < 10:
            date = dateY + "-0" + dateM + "-0" + dateD;
            break;
    
        case dateM < 10 && dateD > 10:
            date = dateY + "-0" + dateM + "-" + dateD;
            break;
    
        case dateM > 10 && dateD < 10:
            date = dateY + "-" + dateM + "-0" + dateD;
            break;
        
        default:
            date = dateY + "-" + dateM + "-" + dateD;
            break;
    }
    date = date.toString();
    // °°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°
    $('#tache_date').val(date);
    var today = $('#annee-mois-date');
if(today != undefined){

    $('#annee-mois-date').text(date)
}

});