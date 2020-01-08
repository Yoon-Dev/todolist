$(document).ready(function(){
    
    var allBox = document.querySelectorAll('.box');
    var heightTab = [];
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
        init();
        setTimeout(function(){ animBox(); }, 500);
    }

    
    function init() {
        for(var i = 0; i<allBox.length; i++){ 
            heightTab.push(allBox[i].clientHeight);
            allBox[i].style.height = '0px';
        }
    }

    function animBox() {
        for(var i = 0; i<allBox.length; i++){
            allBox[i].classList.remove('init-box');
            allBox[i].classList += ' in';
            if(heightTab[i] != 0){
                allBox[i].style.height = heightTab[i]+'px';
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