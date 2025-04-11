$(document).ready(function(){
    $(".owl-carousel").each(function(index, element) {
        var owl = $(element); // Select the specific carousel
        
        owl.owlCarousel({
            loop: true,
            margin: 10,
            nav: false, // Hide default nav
            dots: false, // Hide default dots
            autoplay: false, // Disable auto-slide
            responsive: {
                0: { items: 1 },
                600: { items: 2 },
                1000: { items: 3 }
            }
        });

        // Custom navigation (ensure each carousel has unique buttons)
        $(this).parent().find(".prev-btn").click(function(){
            owl.trigger("prev.owl.carousel");
        });

        $(this).parent().find(".next-btn").click(function(){
            owl.trigger("next.owl.carousel");
        });

        // Optional: Autoplay Control
        $(this).parent().find(".autoplay-btn").click(function(){
            owl.trigger("play.owl.autoplay", [2000]);
        });
    });
});
