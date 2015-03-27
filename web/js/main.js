$(document).ready(function () {
    // One page navigation
    $('.nav').singlePageNav({
        offset: $('.navbar').outerHeight()
    });

    // Scroll to top
    $('.smooth-scroll').click(function () {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html,body').animate({
                    scrollTop: target.offset().top
                }, 1000);
                return false;
            }
        }
    });
});

function initialize() {
    var mapOptions = {
        zoom: 16,
        center: new google.maps.LatLng(47.003938, -120.53995399999997)

    };

    var map = new google.maps.Map(document.getElementById('map-canvas'),
        mapOptions);

}

function loadScript() {
    var script = document.createElement('script');
    script.type = 'text/javascript';
    script.src = 'https://maps.googleapis.com/maps/api/js?v=3.exp' +
    '&signed_in=true&callback=initialize';
    document.body.appendChild(script);
}

window.onload = loadScript;
