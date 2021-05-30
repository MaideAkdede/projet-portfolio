export default class hoverOnProjects {
    static get selector() {
        return '.projects__container';
    }

    constructor(element) {
        this.element = element;
        this.link = element.querySelector('.projects__link');
        this.title = element.querySelector('.projects__name');
        this.thumbnail = element.querySelector('.projects__thumbnail');

        this.link.addEventListener('mouseover', () => {
            this.title.classList.add('active__link');
            this.element.classList.add('active__container');
            //this.thumbnail.classList.add('active__container');
        })
        this.link.addEventListener('mouseout', () => {
            this.title.classList.remove('active__link');
            this.element.classList.remove('active__container');
            //this.thumbnail.classList.remove('active__container');
        })

    }
}