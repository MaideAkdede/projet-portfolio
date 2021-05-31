export default class burgerMenuItems {
    static get selector() {
        return '.nav__links';
    }

    constructor(element) {
        this.element = element;
        this.burger = document.querySelector('.burger');
        this.menu = document.querySelector('.menu__wrapper');

        if (window.innerWidth < 750) {

            this.element.addEventListener('click', (e) => {
                this.burger.click(e);
            });

            document.addEventListener('click', (e) => {
                if(e.clientX < window.innerWidth/2){
                    this.menu.classList.remove('active__menu');
                }
            });
        }
    }
}