
var _colors= true;
var front, back;
var width = document.getElementById('lines').offsetWidth; 
var height = 1000;
console.log(height);


$(document).ready(function(){

function lines (value) {
    var backgrnd = SVG('lines');
    var qty = 0;
    var group = backgrnd.group();
    group.back();            
    for (var i = qty; i < value; i++, qty++) {
            var str = Math.floor((Math.random()*10)+1);
        if (_colors) {
            var color = randomColor();
        } else {
            var color = '#000';
        };
        var rHeight = randomHeight(height); 
        var rWidth = randomWidth(width);
        var rLength = randomNumber();
        var line = backgrnd.line(rWidth, rHeight, rWidth+rLength, rHeight).stroke({ width: str , color: color});
        group.add(line);
    }
}

lines (40);

// Now with paralax

// Create cross browser requestAnimationFrame method:
window.requestAnimationFrame = window.requestAnimationFrame
 || window.mozRequestAnimationFrame
 || window.webkitRequestAnimationFrame
 || window.msRequestAnimationFrame
 || function(f){setTimeout(f, 1000/60)}

var paralines = document.getElementById('lines');

function parallaxlines(){
 var scrolltop = window.pageYOffset // get number of pixels document has scrolled vertically 
 scrolltop = scrolltop - 70
 paralines.style.top = -scrolltop * .5 + 'px' // move lines at 50% of scroll rate
}

window.addEventListener('scroll', function(){ // on page scroll
 requestAnimationFrame(parallaxlines) // call parallaxbubbles() on next available screen paint
}, false)

})
