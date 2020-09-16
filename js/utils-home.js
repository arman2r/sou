document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('#bannerHome');
    var instances = M.Carousel.init(elems, {
        fullWidth: true,
        indicators: true
    });

    var infBanner = document.querySelectorAll('#bannerInferior');
    M.Carousel.init(infBanner, {
        fullWidth: true,
        indicators: true
    })
});