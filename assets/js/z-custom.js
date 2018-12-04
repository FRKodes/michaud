$(function() {
    console.log( "ready!" );    
    $(".cart-contents span.count").text(function(index, text) {
        return text.replace("artículos", "");
    });
});

$('.nosotros-images-container').slick({
	infinite: true,
	arrows: false,
	dots: true,
	infinite: true,
	slidesToShow: 1,
	slidesToScroll: 1
});


$(window).scroll(function() {    
    var scroll = $(window).scrollTop();

    if (scroll >= 50) {
        $(".site-header").addClass("darker");
    } else {
        $(".site-header").removeClass("darker");
    }
});