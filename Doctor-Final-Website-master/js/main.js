//
var showMenu = function() {
    $(".mobile-nav").toggleClass("visible");
}

var closePopup = function() {
    $("#popup").toggleClass("hide-popup");
}

$(document).ready(function(){
  $(".owl-carousel").owlCarousel({
    loop: true,
    autoplay:true,
    autoplayTimeout:4000,
    autoplayHoverPause:true,
    margin:10,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 1
        },
        1000: {
            items: 1
        }
    }
  });
});
