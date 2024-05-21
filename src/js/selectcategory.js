const categories = document.querySelectorAll('.category');
// console.log(categories);
let clicked = 0;
categories.forEach(category => {
    category.onclick = function() {
        let categoryId = this.getAttribute('id');
        let checkbox = this.firstElementChild.nextSibling;
            if(!(category.classList.contains('checkedCategory'))) {
                this.classList.add('checkedCategory');
                checkbox.setAttribute('checked', 'checked');
                console.log(checkbox);

            }else {
                category.classList.remove('checkedCategory');
                checkbox.removeAttribute('checked', 'checked');
                console.log(checkbox);
            }       
    }
    
});