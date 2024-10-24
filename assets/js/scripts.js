$(function(){
    $('nav.mobile').click(function(){
        var listaMenu = $('nav.mobile ul');

        if(listaMenu.is(':hidden')){
            var icone = $('nav.mobile div');
            icone.removeClass('fa-bars');
            icone.addClass('fa-xmark');


            listaMenu.slideToggle();

        }else{
            var icone = $('nav.mobile div');
            icone.removeClass('fa-xmark');
            icone.addClass('fa-bars');

            listaMenu.slideToggle();
        }
    })

    if($('target').length > 0){
        var elemento = '#'+$('target').attr('target');
        var divScroll = $(elemento).offset().top;
        $('html,body').animate({'scrollTop':divScroll}, 2000);
    
    }
})