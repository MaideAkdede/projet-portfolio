export default class Languages {
    static get selector() {
        return '.lang__container'
    }

    constructor(element) {
        this.element = element;

        this.button = element.querySelector('.lang__current');
        this.hiddenLang = element.querySelector('.lang__other');

        this.button.addEventListener('click', (e) => this.toggle(e));
        document.addEventListener('click', (e) => this.bodyClick(e));

    }

    toggle(e) {
        e.preventDefault();
        if (this.hiddenLang.classList.contains('lang__hidden')) {
            this.hiddenLang.classList.remove('lang__hidden');
        } else {
            this.hiddenLang.classList.add('lang__hidden');
        }
    }

    bodyClick(e) {
        if (e.target === this.element || this.element.contains(e.target)) {
            return;
        }
        this.hiddenLang.classList.add('lang__hidden');
    }
}