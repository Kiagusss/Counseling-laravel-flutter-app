window.addEventListener('scroll', () => {
    let navi1 = document.getElementById("nav-1");
    let navi2 = document.getElementById("nav-2");
    let navi3 = document.getElementById("nav-3");
    let navi4 = document.getElementById("nav-4");
    let navi5 = document.getElementById("navi5");
    let navi6 = document.querySelectorAll(".navicon");
    let navi7 = document.getElementById("menu-btn");
    let viewport = window.scrollY;
    // var isChecked = checkbox.checked;

    if (viewport >= 25 ) {
        
        navi1.style.color = "black";
        navi2.style.color = "black";
        navi3.style.color = "black";
        navi4.style.color = "black";
        navi5.style.color = "black";
        nav.classList.add('go-scroll');
       
       
    } else {
        navi1.style.color = "black";
        navi2.style.color = "black";
        navi3.style.color = "black";
        navi4.style.color = "black";
        navi5.style.color = "black";
        nav.classList.remove('go-scroll');
      
    }
});
