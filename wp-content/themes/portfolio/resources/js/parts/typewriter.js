export default class typewriter {

   /* This script was readapted and improved to fit my personnal project
   * Credit goes to him
   * Copyright (c) 2021 by Dave Quah (https://codepen.io/Milleus/pen/YzKOjoO)
   * */

    static get selector() {
        return '.introduction__title'
    }
    constructor(element) {
        this.element = element;
        this.typed = element.innerHTML;
        this.hiddenText = document.querySelector(".introduction__title__hidden");
        this.hiddenText.classList.add('sro');
        this.text = this.hiddenText.innerHTML;
        this.index = 0;

        this.speed = 125;
        this.restart = 5000;


        this.startType(this.text, this.index);
    }
    startType(text, index) {

        this.index = index;
        this.text = text;

        if (this.index < this.text.length) {
            this.typed += this.text.charAt(this.index);
            this.element.innerHTML = this.typed;
            this.index++;
            setTimeout(() => this.startType(this.text, this.index)
                , this.speed);
        } else {
            setTimeout(() => {
                this.typed = "";
                this.element.innerHTML = this.typed;
                this.startType(this.text, 0);
            }, this.restart);
        }
    }
}