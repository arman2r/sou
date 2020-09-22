document.addEventListener('DOMContentLoaded', function() {
    // Create and mount the thumbnails slider.
    var secondarySlider = new Splide('#secondary-slider', {
        rewind: true,
        fixedWidth: 64,
        fixedHeight: 100,
        isNavigation: true,
        gap: 5,
        focus: 'center',
        pagination: false,
        cover: true,
        direction: 'ttb',
        heightRatio: 5.36,
        type: 'loop',
        breakpoints: {
            '599': {
                heightRatio: 5.5,
                fixedWidth: 40,
                fixedHeight: 65,
            }
        }
    }).mount();


    var primarySlider = new Splide('#primary-slider', {
        lazyLoad: 'nearby',
        heightRatio: 1.1,
        cover: true,
        breakpoints: {
            '599': {
                heightRatio: 1.1,
            }
        }
    }).mount();

    primarySlider.sync(secondarySlider).mount();

    var allRadios = document.querySelectorAll('.radio-color');

    /*allRadios.forEach(element => {
        let style = window.getComputedStyle(element, '::before');
        console.log(style)
    })*/
});