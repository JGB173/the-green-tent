// This is the code from the video if I need to go back to it
/* const hamburger = document.querySelector('.hamburger');

hamburger.addEventListener('click', function() {
    this.classList.toggle('is-active');
})*/

/* My code
function myFunction() {
    var element = document.getElementById("hamburger");
    element.classList.toggle("is-active");
 }*/


const menu_btn = document.querySelector('.hamburger');
const mobile_menu = document.querySelector('.mobile-nav');

menu_btn.addEventListener('click', function () {
    menu_btn.classList.toggle('is-active');
    mobile_menu.classList.toggle('is-active');

})