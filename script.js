//link script in bottom of the html page
console.log("Active") //testing

//Exit button
document.getElementById('btnone').addEventListener("click", exit);
function exit() {
    // window.location='index.html';
    document.getElementById('modal').style.visibility = "visible";
}
document.getElementById('Y').addEventListener("click", quite);
function quite() {
    // console.log('click');
    window.location = 'index.php';
}
document.getElementById('N').addEventListener('click', na);
function na() {
    document.getElementById('modal').style.visibility = "hidden";
}

//Reset button
document.getElementById('btntwo').addEventListener("click", reset);
function reset() {
    window.location = 'new.php';
}
//color
let G = "lime";
var col = document.getElementById('btnthree');
col.addEventListener("click", color);
function color() {
    G = prompt('Enter Color Name');
}

//canvas
// animation
var canvas = document.getElementById('draw');
canvas.addEventListener('click', draam);
var ctx = canvas.getContext("2d");
function draam() {
    ctx.clearRect(0, 0, canvas.width, canvas.height); //to rest the canvas
    document.getElementById('loader').style.visibility = 'visible';
    setTimeout(draa, 3000);
}
function draa() {
    document.getElementById('loader').style.visibility = 'hidden';
    console.log('CANVAS is OK');
    let X = Math.floor((Math.random() * 10) + 1);
    ctx.font = "150px Comic Sans MS";
    ctx.fillStyle = G;
    ctx.fillText(X, 100, 130);
    // ctx.strokeText(X,100,130);
}
setTimeout(3000);
