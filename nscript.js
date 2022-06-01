//name action
document.getElementById('c_image').addEventListener("click", pop);
function pop() {
    let t = prompt('Enter Your Name');
    document.getElementById('name').innerHTML = t;
}
//help action
document.getElementById('oval').addEventListener("click", fol);
function fol() {
    alert('This is a random number generator game.\ncreator-Romijul Laskar\nLast update on-01/06/22');
}

function nn(){
    var mop=prompt('Enter Your Name');
    document.getElementById('nname').innerHTML = mop;
}