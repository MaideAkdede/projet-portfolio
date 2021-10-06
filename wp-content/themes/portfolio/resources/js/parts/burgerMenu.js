export default class burgerMenu {
    static get selector() {
        return '.burger-js';
    }
    constructor(element) {
        this.element = element;
        this.menu = document.querySelector('.menu-js');

        this.element.addEventListener('click', (e)=>{
            this.toggleMenu();
        });
    }
    toggleMenu(){
        if(!this.menu.classList.contains('active__menu')){
            this.menu.classList.add('active__menu');
            this.element.classList.add('burger-active');
        } else {
            this.menu.classList.remove('active__menu');
            this.element.classList.remove('burger-active');
        }
    }
}