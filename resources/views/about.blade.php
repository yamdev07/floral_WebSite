<!-- templatemo 385 floral shop -->
<!-- 
Floral Shop Template 
http://www.templatemo.com/preview/templatemo_385_floral_shop 
-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>About - Floral Template</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <link href="{{ asset('templatemo_style.css') }}" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="{{ asset('css/orman.css') }}" type="text/css" media="screen" />
    <link rel="stylesheet" href="{{asset ('css/nivo-slider.css') }}" type="text/css" media="screen" />

    <link rel="stylesheet" type="text/css" href="{{ asset('css/ddsmoothmenu.css') }}" />

    <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset ('js/ddsmoothmenu.js') }}">
        /***********************************************
         * Smooth Navigational Menu- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
         * This notice MUST stay intact for legal use
         * Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
         ***********************************************/
    </script>

    <script type="text/javascript">
        ddsmoothmenu.init({
            mainmenuid: "templatemo_menu", //menu DIV id
            orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
            classname: 'ddsmoothmenu', //class added to menu's outer DIV
            //customtheme: ["#1c5a80", "#18374a"],
            contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
        })

        function clearText(field) {
            if (field.defaultValue == field.value) field.value = '';
            else if (field.value == '') field.value = field.defaultValue;
        }
    </script>

</head>

<body>

    <div id="templatemo_wrapper_sp">
       @include('layout.header')
        <div id="templatemo_main_wrapper">
            <div id="templatemo_main">
                @include('layout.sidebar')

                <div id="content" class="right">
                    <h2>About</h2>
                    <h5>Comprendre la classification des grandes catégories de fleurs est essentiel pour tout jardinier ou agriculteur souhaitant optimiser la planification et l’entretien de son jardin ou de sa ferme florale. Cette connaissance permet de choisir les bonnes espèces à cultiver selon la zone climatique. Ainsi que de comprendre leurs besoins spécifiques en termes de conditions de culture.

                        Voici un aperçu des grandes catégories de fleurs et de leurs caractéristiques pour vous aider à faire les bons choix de culture.</h5>
                    <ul class="tmo_list_circle">
                        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                        <li>Pellentesque quis nulla id orci malesuada porta posuere quis massa.</li>
                        <li>Nunc vitae purus non augue scelerisque ultricies vitae et velit quis.</li>
                        <li>Aliquam fermentum cursus risus aliquam erat volutpat.</li>
                        <li>Morbi a augue eget orci sodales blandit morbiet mi in mi eleifend adipiscing.</li>
                    </ul>
                    <div class="cleaner h20"></div>
                    <h3>Praesent pede massa, feugiat auctor</h3>
                    <p>Nam nec leo. Curabitur quis eros a arcu feugiat egestas. Nunc sagittis, dui non porttitor tincidunt, mi tortor tincidunt sem, et aliquet mi tortor eu turpis. Ut nisi ligula, viverra ac, placerat sed, ultricies vitae, neque. Morbi feugiat neque non odio eleifend pulvinar.</p>
                    <div class="cleaner"></div>
                    <blockquote>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque quis nulla id orci malesuada porta posuere quis massa. Nunc vitae purus non augue scelerisque ultricies vitae et velit quis nulla id orci malesua.
                    </blockquote>
                </div>
                <div class="cleaner"></div>
            </div> <!-- END of main -->
        </div> <!-- END of main wrapper -->

        @include('layout.footer')
    </div>

</body>

</html>