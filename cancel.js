// const btn = function(){

// document.getElementById('button').addEventListener('click', reset);
// }

// const reset = function(ch){
//     ch.preventDefault();
//     document.getElementById('formuser').reset();

// }

// {
// }

let cancelbtn = document.querySelector('button');
let inputs = document.querySelectorAll('input');

cancelbtn.addEventListener('click', () => {
    inputs.forEach(input => input.value = '');

})