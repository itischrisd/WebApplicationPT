var changed = document.querySelector("body");

setInterval(function(){
    var colors = ["red", "blue", "pink", "green", "brown", "black", "white", "yellow", "cyan", "coral"];

    changed.style.backgroundColor = colors[Math.round(Math.random()*10)]
}, 3000);