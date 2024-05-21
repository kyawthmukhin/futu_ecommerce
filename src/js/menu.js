const doc = document;
const menu = doc.getElementById('menu');
const sideBar = doc.getElementsByClassName('side-bar')[0];
menu.onclick = function(event) {

    let headerNav = menu.parentElement.parentElement.parentElement;
     if(!sideBar.classList.toggle('hidden')) {
        headerNav.classList.remove('w-full');
        headerNav.classList.add('w-5/6');
     }else {
        headerNav.classList.remove('w-5/6');
        headerNav.classList.add('w-full');
     }

}
