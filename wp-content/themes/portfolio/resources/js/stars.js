/*
* Improved and adapted until I start redoing something similar from scratch
* Credits goes to the owner
* Copyright (c) 2021 by Giana (https://codepen.io/giana/pen/qbWNYy)
* */
var canvas = document.getElementById('canvas'),
    ctx = canvas.getContext('2d'),
    body = document.querySelector('body'),

    w = canvas.width = window.innerWidth ,
    h = canvas.height = window.innerHeight,

    hueArray = [230, 255],
    hue = hueArray[Math.floor(Math.random() * hueArray.length)],
    stars = [],
    count = 0,
    maxStars = 2000;

var canvas2 = document.createElement('canvas'),
    ctx2 = canvas2.getContext('2d');
canvas2.width = canvas.width;
canvas2.height = canvas.height;

var half = canvas.width / 2,
    gradient = ctx.createRadialGradient(half, half, 0, half, half, half);
gradient.addColorStop(0.025, '#ffffff');
gradient.addColorStop(0.1, 'hsl(' + hue + ', 61%, 33%)');
gradient.addColorStop(0.25, 'hsl(' + hue + ', 64%, 6%)');
gradient.addColorStop(1, 'transparent');

ctx2.fillStyle = gradient ;
ctx2.beginPath();
ctx2.arc(half, half, half, 0, Math.PI * 2);
ctx2.fill();


function maxOrbit(x, y) {
    var max = Math.max(x, y),
        diameter = Math.round(Math.sqrt(max * max + max * max));
    return diameter / 1.5;
}

var Star = function () {

    this.orbitRadius = Math.random() * maxOrbit(w, h);
    this.radius = Math.random() * this.orbitRadius / 10 ;
    this.orbitX = w / 2;
    this.orbitY = h / 2;
    this.timePassed = Math.random() * maxStars;
    this.speed = 0.0002 + Math.random() * 0.0001;
    this.alpha = 2 + Math.random() / 10;

    count++;
    stars[count] = this;
}

Star.prototype.draw = function () {
    var x = Math.sin(this.timePassed) * this.orbitRadius + this.orbitX,
        y = Math.cos(this.timePassed) * this.orbitRadius + this.orbitY,
        twinkle = Math.random() * 2;

    if (twinkle === 1 && this.alpha > 0) {
        this.alpha -= 0.05;
    } else if (twinkle === 2 && this.alpha < 1) {
        this.alpha += 0.05;
    }

    ctx.globalAlpha = this.alpha;
    ctx.drawImage(canvas2, x - this.radius / 2, y - this.radius / 2, this.radius, this.radius);
    this.timePassed += this.speed;
}
for (var i = 0; i < maxStars; i++) {
    new Star();
}
function animation() {
    ctx.clearRect(0, 0, canvas.width, canvas.height);

    for (var i = 1, l = stars.length; i < l; i++) {
        stars[i].draw();
    }
    window.requestAnimationFrame(animation);
}
window.addEventListener('resize',()=>{
    this.w = canvas.width = window.innerWidth;
    this.h = canvas.height = window.innerHeight;
});
animation();
