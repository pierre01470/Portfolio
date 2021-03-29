var button = document.getElementById('switch');
var style = document.getElementById('style');

button.addEventListener('click', function () {
    style.setAttribute('href', 'css/style1');
});

const showBtn = document.getElementById('burgerBtn');
const show = document.getElementById('menu_nav')

showBtn.addEventListener('click', function () {
    show.classList.toggle("show_menu");
});

const modal = document.getElementById('modal');

modal.addEventListener('click', function () {
    modal.parentNode.removeChild(modal);
});
