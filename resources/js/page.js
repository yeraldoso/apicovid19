// <script type="text/javascript">

    $("#titlePage").click(function() { downScroll("#section_nav1", "#nav1"); });
    $("#nav1").click(function() { downScroll("#section_nav1", "#nav1"); });
    $("#nav2").click(function() { downScroll("#section_nav2", "#nav2"); });
    $("#nav3").click(function() { downScroll("#section_nav3", "#nav3"); });
    $("#nav4").click(function() { downScroll("#section_nav4", "#nav4"); });



    function downScroll(section_nav, nav)
    {
        //Baja scroll al div
        $('html,body').animate({ scrollTop: $(section_nav).offset().top},'slow');

        //Elimina active
        $('html,body').find('li.active').removeClass('active');

        //Agrega active al nav seleccionado
        $(nav).addClass( 'active' ); 

    }


    $("a").click(function() {  $("#navbarResponsive").removeClass('show'); });


// </script>