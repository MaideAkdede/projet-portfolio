export default class arrowHiddenOnScroll {
    static get selector() {
        return '.introduction__svg .svg'
    }
    constructor(element) {
        this.element = element;

        window.addEventListener('scroll', (e)=>{
            this.hideArrow(e);
        })
    }
    hideArrow(e){
        e.preventDefault();
        if(window.scrollY >= (window.innerHeight / 4)){
            this.element.classList.add('svg__hidden');
        }
        else {
            this.element.classList.remove('svg__hidden');
        }
    }
}