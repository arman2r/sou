document.addEventListener('DOMContentLoaded', function() {
    var dropShared = document.querySelectorAll('.fixed-action-btn');
    var instances = M.FloatingActionButton.init(dropShared, {
        direction: 'bottom',
        hoverEnabled: false
    });
})

window.onscroll = function() { scrollFunction() };

var header = document.getElementById("header");

function scrollFunction() {
    if (document.body.scrollTop > 90 || document.documentElement.scrollTop > 90) {
        header.classList.add('sticky')
    } else {
        header.classList.remove('sticky')
    }
}

var buttonMenu = document.getElementById('openMenu');

var menu = document.getElementById('menu');

function openMenu() {
    menu.classList.toggle('open-menu')
}