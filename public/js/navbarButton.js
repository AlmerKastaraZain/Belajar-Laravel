
var menuActivated = false;

const navbarBtn = document.getElementById('navbarButton');
const navbarMenu = document.getElementById('menu');
navbarBtn.addEventListener('click', () => {

    console.log('menuActivated')
    console.log(navbarBtn)

    if (menuActivated == false) {
        navbarMenu.classList.remove('hidden')
        menuActivated = true;
        return;
    }

    navbarMenu.classList.add('hidden');
    menuActivated = false;
});