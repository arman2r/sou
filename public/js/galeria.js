var elem = document.querySelector('.grid');
var msnry = new Masonry(elem, {
    // options
    itemSelector: '.grid-item',
    columnWidth: 33,
    gutter: '.grid__gutter-sizer',
    percentPosition: true,
    stagger: 30,
    horizontalOrder: false,
});