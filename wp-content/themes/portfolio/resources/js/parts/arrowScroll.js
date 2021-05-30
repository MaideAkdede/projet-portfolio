export default class arrowHiddenOnScroll {
    static get selector() {
        return '.introduction__svg .svg'
    }
    constructor(element) {
        this.element = element;
        this.header = document.querySelector('.header');

        window.addEventListener('scroll', (e)=>{
            this.hideArrow(e);
        })
    }
    hideArrow(e){
        e.preventDefault();
        if(window.scrollY >= (window.innerHeight / 4)){
            this.element.classList.add('svg__hidden');
            this.header.style.backgroundColor = 'rgba(0, 0, 0, 95)'
        }
        else {
            this.element.classList.remove('svg__hidden');
            this.header.style.backgroundColor = 'rgba(0, 0, 0, 0.65)';
        }
    }
}