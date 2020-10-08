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



    var primarySlider = new Splide('#carruselslider', {
        perPage: 4,
        rewind: true,
        fixedWidth: 185,
        fixedHeight: 200,
        pagination: false,
        autoplay: true,
        gap: '1rem'
    }).mount();

    var select = document.querySelectorAll('select');
    var instances = M.FormSelect.init(select);

});