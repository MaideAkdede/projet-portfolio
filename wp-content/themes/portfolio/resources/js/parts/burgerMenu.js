export default class burgerMenu {
    static get selector() {
        return '.burger';
    }
    constructor(element) {
        this.element = element;
        this.menu = document.querySelector('.menu__wrapper');

        this.element.addEventListener('click', (e)=>{
            this.toggleMenu();
        });
    }
    toggleMenu(){
        if(!this.menu.classList.contains('active__menu')){
            this.menu.classList.add('active__menu');
        } else {
            this.menu.classList.remove('active__menu');
        }
    }
}