
var _colors= false;
var front, back;
var width = document.getElementById('intro').offsetWidth; 
var height = 600;
console.log(height);


$(document).ready(function(){

function lines (value) {
    var backgrnd = SVG('lines');
    var qty = 0;
    var group = backgrnd.group();
    group.back();            
    for (var i = qty; i < value; i++, qty++) {
            var str = Math.floor((Math.random()*4)+1);
        if (_colors) {
            var color = randomColor();
        } else {
            var color = '#000';
        };
        var line = backgrnd.line(randomWidth(width), randomHeight(height), randomWidth(width), randomHeight(height)).stroke({ width: str , color: color});
        group.add(line);
    }
}

lines (20);

})
