
    
    let siteNav = document.getElementById('site-nav');   
    let menuOpen = document.getElementById('menu-toggle');
        menuOpen.addEventListener('click' , e => { 
           menuOpen.classList.toggle('menu-open'); 
           siteNav.classList.toggle('site-nav-open');   
        })        

    // window.addEventListener('click', e => {
    //     if(siteNav.classList.contains('site-nav-open') && e.target !=siteNav && e.target !=menuOpen ) {
    //         siteNav.classList.toggle("site-nav-open")
    //         menuOpen.classList.toggle('menu-open'); 
    //     }
    // })