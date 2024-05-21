const categoryGroup = document.getElementsByClassName('category-group')[0];
categoryGroup.onclick = showList;
const users = document.getElementsByClassName('users')[0];
users.onclick = showList;
function showList(event) {
    console.log(this);
    let ul = this.nextElementSibling;
    console.log(this.children);
    let downArrow = this.children[0].lastElementChild.firstElementChild;
    ul.classList.toggle('hidden');
    downArrow.classList.toggle('rotate');
    this.classList.toggle('border-b');
    this.classList.toggle('border-b-gray-200');
}
const menu = document.getElementsByClassName('menu')[0];
const sidenav = document.querySelector('.side-bar');
const mainNav = document.querySelector('.main-nav');
menu.onclick = function() {
    sidenav.classList.toggle('hidden');
    
    mainNav.classList.toggle('w-full');
    mainNav.classList.add('transition-all');
    mainNav.classList.add('duration-300');
    mainNav.classList.add('ease-in-out');
}
