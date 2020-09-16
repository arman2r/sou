window.onscroll = function() { scrollFunction() };

var header = document.getElementById("header");

function scrollFunction() {
    if (document.body.scrollTop > 90 || document.documentElement.scrollTop > 90) {
        header.classList.add('sticky')
    } else {
        header.classList.remove('sticky')
    }
}