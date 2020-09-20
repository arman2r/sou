var dropShared = document.querySelectorAll('.fixed-action-btn');
var instances = M.FloatingActionButton.init(dropShared, {
    direction: 'bottom',
    hoverEnabled: false
});
var drop = document.querySelectorAll('.dropdown-trigger');
M.Dropdown.init(drop);


window.onscroll = function() { scrollFunction() };

var header = document.getElementById("header");
var buttonMenu = document.getElementById('openMenu');

var menu = document.getElementById('menu');
var menuContent = document.getElementById('menu');
var tabMenu = menuContent.querySelectorAll('.tabs')[0];
var backdrop = document.querySelectorAll('.submenu')[0];
var btnOpMenu = document.querySelectorAll('.menu-btn')[0];
console.log(tabMenu)

function scrollFunction() {
    if (document.body.scrollTop > 90 || document.documentElement.scrollTop > 90) {
        header.classList.add('sticky');
        menu.classList.remove('open-menu');
        backdrop.classList.add('closebackdrop');
        btnOpMenu.classList.remove('close-text-btn');
        if (menuContent.classList.contains('show-submenu')) {
            menuContent.classList.remove('show-submenu');
            tabMenu.classList.remove('show-submenu');
        }
    } else {
        header.classList.remove('sticky');
    }
}



function openMenu() {
    menu.classList.toggle('open-menu');
    btnOpMenu.classList.toggle('close-text-btn');
    console.log(this)
    if (menuContent.classList.contains('show-submenu')) {
        menuContent.classList.remove('show-submenu');
        tabMenu.classList.remove('show-submenu')
    }

}

function openSubMenu() {
    menuContent.classList.add('show-submenu');
    tabMenu.classList.add('show-submenu');
    backdrop.classList.remove('closebackdrop')
}

function openSearch() {
    var btnTrigger = document.getElementById('scale-demo-trigger');
    var inputSearch = document.getElementById('scale-demo');
    btnTrigger.classList.toggle('change-icon');
    inputSearch.classList.toggle('scale-out')
}