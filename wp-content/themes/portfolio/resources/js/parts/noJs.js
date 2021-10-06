export default class noJs {

    static get selector() {
        return '.header';
    }

    constructor() {
        this.burger = document.querySelector('.burger-js');
        this.menu = document.querySelector('.menu-js');

        this.menu.classList.remove('menu-nojs');
        this.burger.classList.add('burger');
        this.menu.classList.add('menu__wrapper');
    }
}