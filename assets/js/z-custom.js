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
    

    $('.tg-btnround.tg-btnnext.tg-btnfinish.add-to-cart-order').html('FINALIZAR');

    $('a[data-step="step-style"]').html('ESTILO');



    $('#tg-btnfinish').on('click', function () {

        setTimeout(
          function(){
            $('#confirmBox h1').html('¿Procesar orden?');
            $('#confirmBox p').html('¿Estás seguro que quieres procesar esta orden?');
            $('#confirmBox a.button.blue').html('Si');
            $('#confirmBox a.button.gray').html('NO');
          }, 100);

    });

    $('a.checkout-button.button.alt.wc-forward').on('click', function () {

        console.log('clickeddd!!!!');

        setTimeout(
          function(){
            
            $('.sticky-queue.top-right p.sticky-note').html('Por favor agrega las medidas de tu pedido antes de procesar el pedido.');

          }, 100);

    });

    $('.cart-measurements-wrap .cart-item-modification a').html('Agregar medidas');
    $('.cart-edit-wrap .cart-item-modification a').html('Cambiar ajustes');

    $('.cus-modal-header h4').html('Cambiar ajustes');

    
    var titulo_actual = $('.cus-options-type span').html();
    console.log(titulo_actual);

    if (titulo_actual == 'Style?') {
        $('.cus-options-type span').html('¿Cambiar estilo?');
    }

    var titulo_actual_style = $('.cus-options-data label').html();
    console.log(titulo_actual_style);

    if (titulo_actual_style == 'Select style') {
        $('.cus-options-data label').html('Estilo');
    }
    
    $('input[data-type="save_only"]').val('Guardar ajustes');
    $('input[data-type="save_close"]').val('Guardar y cerrar');
    
    $('.measurement-fieldbox input[class="form-control measurement_val"]').attr('placeholder', 'Agrega la medida (pulgadas)');

    $('a.cus-btn.measurement-steps.measurement-prev.tg-btnprevious').html('Anterior');
    $('a.cus-btn.measurement-steps.measurement-next.tg-btnnext').html('Siguiente');
    

    
    




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

