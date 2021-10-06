export default class changeMenuBackground {
    static get selector() {
        return '.header'
    }
    constructor(element) {
        this.header = element;

        window.addEventListener('scroll', (e)=>{
            this.changeBcg();
        })

    }
    changeBcg(element){
        if(window.scrollY > 100){
            this.header.style.backgroundColor = "rgba(0, 0, 0, 0.95)"
        }
        else if(window.scrollY <= 100) {
            this.header.style.backgroundColor = "rgba(0, 0, 0, 0.65)"
        }
    }
}