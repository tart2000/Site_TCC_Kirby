
var _colors= true;
var front, back;
var width = document.getElementById('intro').offsetWidth; 
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

})
