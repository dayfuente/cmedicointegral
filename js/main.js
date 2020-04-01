
    //------------------------------------------------FUNCION DESPLEGABLE SERVICIOS      
    $("a, div").click(function(){
        $("div").removeClass("show");
        });     


//------------------------------------------------------FUNCION ZOOM NOVEDADES            

        $('.zoom').hover(function() {
             $(this).addClass('transition');
            }, function() {
            $(this).removeClass('transition');
        });


//--------------------------------------------------------------FECHA/HORA FOOTER

        var fecha = new Date();
        var año = fecha.getFullYear();
        document.getElementById("fecha").textContent = año ;


//------------------------------------------------------------------CIERRE MENU RESPONSIVE



        $('#xcierre').click(function(){
                $('.menuresp').removeClass("show");
        });


//------------------------------------------------------------------HIPER-VINCULO RESPONSIVE
