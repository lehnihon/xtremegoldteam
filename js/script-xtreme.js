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

            if (700 <= $(window).scrollTop()) {
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
    });
})(jQuery);