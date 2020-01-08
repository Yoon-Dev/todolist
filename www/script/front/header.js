window.onload = () =>{
    var previousScroll = 0;
    window.onscroll = () => {
        var currentScroll = this.pageYOffset;
        if (currentScroll > previousScroll){
            document.querySelector('.navbar').style.cssText = ' opacity : 0; display : none;';
        }else{
            document.querySelector('.navbar').style.cssText = ' opacity : 1; display : flex;';
        }
        previousScroll = currentScroll;
    };


    function addEventListenerByClass(className, event, fn) {
        var list = document.getElementsByClassName(className);
        for (var i = 0, len = list.length; i < len; i++) {
            list[i].addEventListener(event, fn, false);
        }
    }
    
    addEventListenerByClass('nav-link', 'click', click);
    function click(ev){
        ev.preventDefault();
        // remove class show
        document.querySelector('#navbarNav').classList.remove('show') 
        // button -> data-state = off, aria-expanded=false
        document.querySelector('.navbar-toggler').setAttribute("data-state", "on"); 
        document.querySelector('.navbar-toggler').setAttribute("aria-expanded", "false"); 
        document.querySelector('#body .navbar-toggler-icon').style.backgroundImage = "url('./img/icone/burger.svg')";

    }
}
