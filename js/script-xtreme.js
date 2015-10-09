(function($) {
    $(document).ready(function(){
        var offset = $('#menu-principal').offset().top;
        var $meuMenu = $('#menu-principal'); // guardar o elemento na memoria para melhorar performance
        $(document).on('scroll', function () {
            if (offset <= $(window).scrollTop()) {
                $meuMenu.addClass('fixar');
            } else {
                $meuMenu.removeClass('fixar');
            }

            if (650 <= $(window).scrollTop()) {
                    $('.fade-effect-a').fadeIn(2500,function(){
                        $('.fade-effect-b').fadeIn(1000,function(){
                            $('.fade-effect-c').fadeIn(1000,function(){  
                                $('.fade-effect-d').fadeIn(1000,function(){ 
                                    $('.fade-effect-e').fadeIn(1000,function(){  
                                    });   
                                });  
                            });                        
                        });
                    });
            }
        });

        $(".botao-efeito").click(function(){
            var botao = $(this);
            $(botao).parent().next('div.tabela').toggle( "slow", function() {
                if($(botao).hasClass("closed")){
                    $(botao).attr('src',dirbase+"/images/botao-menos.png");
                    $(botao).removeClass( "closed" );
                }else{
                    $(botao).attr('src',dirbase+"/images/botao-mais.png");
                    $(botao).addClass( "closed" );
                }
            });
        })
      
    });
})(jQuery);