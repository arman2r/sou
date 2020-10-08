document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.collapsible');
    var instances = M.Collapsible.init(elems, {
        accordion: false
    });

    function resizeScreen() {
        if (window.innerWidth < 600) {
            var instance = M.Collapsible.getInstance(elems[0]);
            instance.close()
        } else {
            var instance = M.Collapsible.getInstance(elems[0]);
            instance.open()
        }
    }

    window.addEventListener('resize', resizeScreen)
    resizeScreen();
});