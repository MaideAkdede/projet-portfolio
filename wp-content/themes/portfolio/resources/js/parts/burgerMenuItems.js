export default class burgerMenuItems {
    static get selector() {
        return '.nav__link';
    }

    constructor(element) {
        this.element = element;
        this.burger = document.querySelector('.burger-js');
        this.menu = document.querySelector('.menu__wrapper');

        this.element.addEventListener('click', (e) => {
            this.burger.click(e);
        });
    }


}