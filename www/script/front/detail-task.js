$(document).ready(function(){
    
    var allBox = document.querySelectorAll('.box');
    var heightTab = [];
    var old_scope = 'tâches';
    addEventListenerByClass('backoffice', 'click', Allanim);
    addEventListenerByClass('list', 'click', Allanim);
    $( ".list-info-tache" ).hide();

    $( ".detail" ).click(function(ev){
        ev.preventDefault();
        ev.stopPropagation();
        Animate($(this));
        var parent = $(this).parents('.box');
        $(parent).css('height', 'auto');
        var tache = parent.children('.list-info-tache');
        $(tache).slideToggle(400);

    })

    function Animate(el)
    {
        el.animate({
            opacity: 0,
          }, 150, function() {
            // Animation complete.
            if(el.children().hasClass('fa-chevron-up')){
                el.children().attr('class', 'fa-chevron-down')
            }else{
                el.children().attr('class', 'fa-chevron-up')
            }
            el.animate({
                opacity: 1,
              }, 150, function() {
                
              });
          });
    }

    document.getElementById('loader').style.display = 'none';
    document.getElementById('content').style.display = 'flex';
    Allanim()


    function Allanim() {
        heightTab = [];
        var curr_scope = this.innerText;
        init(curr_scope, old_scope);
        if(curr_scope != ""){
            setTimeout(function(){ animBox(curr_scope, old_scope);if(curr_scope){old_scope = curr_scope;};}, 500);
        }else{
            animBox(curr_scope, old_scope);
            if(curr_scope){old_scope = curr_scope;}
        }
    }
 
    function init(curr_scope, old_scope) {

        for(var i = 0; i<allBox.length; i++){ 
            heightTab.push(allBox[i].clientHeight);
            if(curr_scope != old_scope){
                allBox[i].style.height = '0px';
            }
        }
    }

    function animBox(curr_scope, old_scope) {
        for(var i = 0; i<allBox.length; i++){
            // allBox[i].style.display = '';
            allBox[i].classList.remove('init-box');
            allBox[i].classList += ' in';
            if(heightTab[i] != 0 && curr_scope != old_scope && curr_scope != ""){
                allBox[i].style.height = heightTab[i]+4.5+'px';
            }else{
                allBox[i].style.height = 'auto';
            } 
        }
    }

    function addEventListenerByClass(className, event, fn) {
        var list = document.getElementsByClassName(className);
        for (var i = 0, len = list.length; i < len; i++) {
            list[i].addEventListener(event, fn, false);
        }
    }

})