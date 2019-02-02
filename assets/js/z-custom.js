$(function() {
    console.log( "ready!" );    
    $(".cart-contents span.count").text(function(index, text) {
        return text.replace("artículos", "");
    });

    $('span[data-asset="tela"]').on('click', function () {
        var tela_id = $(this).attr('class').split(' ').pop().replace('tg-', '');
        
        console.log('clicked! ' + tela_id);
        
        var back_img = $('.tg-suitfront .tg-suitbg img').attr('src').replace('nada', tela_id + '-back');

        var pants_front_img = $('.tg-suitfront .tg-suitbg img').attr('src').replace('nada', tela_id + '-pant-front');
        var pants_back_img = $('.tg-suitfront .tg-suitbg img').attr('src').replace('nada', tela_id + '-pant-back');

        // Saco Back
        $('#step-1 .tg-suitback .tg-suitbg img').attr('src',back_img);

        //panto front and back
        $('#step-2 .tg-suitfront .tg-suitbg img').attr('src',pants_front_img);
        $('#step-2 .tg-suitback .tg-suitbg img').attr('src',pants_back_img);

        console.log('Img to set: ' + back_img);
        // console.log('panto: '  + pants_front_img);

    });

    $('span[data-asset="teladelpantaln"]').on('click', function () {
        var tela_panto_id = $(this).attr('class').split(' ').pop().replace('tg-', '');
        var pants_back_img = $('.tg-suitfront .tg-suitbg img').attr('src').replace('nada', tela_panto_id + '-pant-back');

        $('.tg-suitback .tg-suitbg img').attr('src',pants_back_img);

        console.log(tela_panto_id);
        console.log(pants_back_img);

    });

    $('.tg-customizeordernav.steps-nav li:last-child').on('click', function () {
        $('#btnMoveRightTab').hide();
    })
    


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

