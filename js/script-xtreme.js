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

            if (1250 <= $(window).scrollTop()) {
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

        $(".botaoa").click(function(){
            $(".tabelaa").toggle( "slow", function() {
                if($(".botaoa").hasClass("closed")){
                    $(".botaoa").attr('src',dirbase+"/images/botao-menos.png");
                    $(".botaoa").removeClass( "closed" );
                }else{
                    $(".botaoa").attr('src',dirbase+"/images/botao-mais.png");
                    $(".botaoa").addClass( "closed" );
                }
            });
        })
        $(".botaob").click(function(){
            $(".tabelab").toggle( "slow", function() {
                if($(".botaob").hasClass("closed")){
                    $(".botaob").attr('src',dirbase+"/images/botao-menos.png");
                    $(".botaob").removeClass( "closed" );
                }else{
                    $(".botaob").attr('src',dirbase+"/images/botao-mais.png");
                    $(".botaob").addClass( "closed" );
                }
            });
        })
        $(".botaoc").click(function(){
            $(".tabelac").toggle( "slow", function() {
                if($(".botaoc").hasClass("closed")){
                    $(".botaoc").attr('src',dirbase+"/images/botao-menos.png");
                    $(".botaoc").removeClass( "closed" );
                }else{
                    $(".botaoc").attr('src',dirbase+"/images/botao-mais.png");
                    $(".botaoc").addClass( "closed" );
                }
            });
        })
        $(".botaod").click(function(){
            $(".tabelad").toggle( "slow", function() {
                if($(".botaod").hasClass("closed")){
                    $(".botaod").attr('src',dirbase+"/images/botao-menos.png");
                    $(".botaod").removeClass( "closed" );
                }else{
                    $(".botaod").attr('src',dirbase+"/images/botao-mais.png");
                    $(".botaod").addClass( "closed" );
                }
            });
        })
        $(".botaoe").click(function(){
            $(".tabelae").toggle( "slow", function() {
                if($(".botaoe").hasClass("closed")){
                    $(".botaoe").attr('src',dirbase+"/images/botao-menos.png");
                    $(".botaoe").removeClass( "closed" );
                }else{
                    $(".botaoe").attr('src',dirbase+"/images/botao-mais.png");
                    $(".botaoe").addClass( "closed" );
                }
            });
        })
    });
})(jQuery);