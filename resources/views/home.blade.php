<!-- templatemo 385 floral shop -->
<!-- 
Floral Shop Template 
http://www.templatemo.com/preview/templatemo_385_floral_shop 
-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Floral Merveille_divine</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <link href="{{ asset('templatemo_style.css') }}" rel="stylesheet" type="text/css" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playwrite+GB+S:ital,wght@0,100..400;1,100..400&display=swap" rel="stylesheet">

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

    <link rel="stylesheet" href="{{ asset ('css/slimbox2.css') }}" type="text/css" media="screen" />
    <script type="text/JavaScript" src="{{ asset ('js/slimbox2.js') }}"></script>


</head>

<body>

    <div id="templatemo_wrapper_h">
        <div id="templatemo_header_wh">
            <div id="templatemo_header" class="header_home">
                <div id="site_title"><a href="#">Floral Shop</a></div>
                <div id="templatemo_menu" class="ddsmoothmenu">
                    <ul>
                        <li><a href="{{ route('home') }}" class="selected">Home</a></li>
                        <li><a href="{{ route('about') }}">About</a></li>
                        <li><a href="{{route ('product') }}">Products</a> </li>
                        <li><a href="{{route('checkout')}}">Checkout</a></li>
                        <li><a href="{{route ('contact')}}">Contact</a></li>
                        <li><a href="faqs.html">FAQs</a></li>
                    </ul>
                    <div id="templatemo_search">
                        <form action="#" method="get">
                            <input type="text" value="Site Search" name="keyword" id="keyword" title="keyword"
                                onfocus="clearText(this)" onblur="clearText(this)" class="txt_field" />
                            <input type="submit" name="Search" value="" alt="Search" id="searchbutton" title="Search" class="sub_btn" />
                        </form>
                    </div>
                    <br style="clear: left" />
                </div> <!-- end of templatemo_menu -->

                <div class="slider-wrapper theme-orman">
                    <div class="ribbon"></div>
                    <div id="slider" class="nivoSlider">
                        <img src="images/portfolio/03.jpg" alt="slider image 1" />
                        <a href="#">
                            <img src="images/portfolio/02.jpg" alt="slider image 2" title="This is an example of a caption" />
                        </a>
                        <img src="images/portfolio/03.jpg" alt="slider image 3" />
                        <img src="images/portfolio/04.jpg" alt="slider image 4" title="#htmlcaption" />
                        <img src="images/portfolio/05.jpg" alt="slider image 5" title="#htmlcaption" />
                    </div>

                </div>
                <script type="text/javascript" src="{{ asset ('js/jquery-1.6.1.min.js') }}"></script>
                <script type="text/javascript" src="{{ asset ('js/jquery.nivo.slider.pack.js') }}"></script>
                <script type="text/javascript">
                    $(window).load(function() {
                        $('#slider').nivoSlider({
                            controlNav: false
                        });
                    });
                </script>
            </div> <!-- END of header -->
        </div> <!-- END of header wrapper -->
        <div id="templatemo_main_wrapper">
            <div id="templatemo_main">
                @include('layout.sidebar')


                <div id="content" class="right">
                    <h2>Welcome to Floral Shop</h2>
                    <h4>Bienvenue sur notre boutique florale en ligne, où la beauté de la nature s'invite chez vous. Nous croyons que les fleurs ont le pouvoir de transformer 
                        un espace, d'apporter de la joie et de célébrer chaque instant de la vie. Que ce soit pour une occasion spéciale ou simplement pour égayer votre quotidien, 
                        nos bouquets soigneusement confectionnés sont là pour exprimer les émotions que les mots ne suffisent pas à décrire. Découvrez notre vaste sélection de 
                        compositions florales, chacune pensée pour capturer l'élégance et la magie des saisons, et laissez-nous vous aider à créer des moments inoubliables, pleins de
                         couleurs et de parfums enchanteurs.</strong></a>.</h4>

                    <div class="product_box">
                        <a href="productdetail.html"><img src="images/product/01.jpg" alt="floral set 1" /></a>
                        <h3>Ut eu feugiat</h3>
                        <p class="product_price">$240</p>
                        <p class="add_to_cart">
                            <a href="productdetail.html">Detail</a>
                            <a href="shoppingcart.html">Add to Cart</a>
                        </p>
                    </div>
                    <div class="product_box">
                        <a href="productdetail.html"><img src="images/product/02.jpg" alt="flowers 2" /></a>
                        <h3>Donec Est Nisi</h3>
                        <p class="product_price">$160</p>
                        <p class="add_to_cart">
                            <a href="productdetail.html">Detail</a>
                            <a href="shoppingcart.html">Add to Cart</a>
                        </p>
                    </div>
                    <div class="product_box">
                        <a href="productdetail.html"><img src="images/product/03.jpg" alt="floral 3" /></a>
                        <h3>Tristique Vitae</h3>
                        <p class="product_price">$140</p>
                        <p class="add_to_cart">
                            <a href="productdetail.html">Detail</a>
                            <a href="shoppingcart.html">Add to Cart</a>
                        </p>
                    </div>
                    <div class="product_box no_margin_right">
                        <a href="productdetail.html"><img src="images/product/04.jpg" alt="flowers 4" /></a>
                        <h3>Hendrerit Eu</h3>
                        <p class="product_price">$320</p>
                        <p class="add_to_cart">
                            <a href="productdetail.html">Detail</a>
                            <a href="shoppingcart.html">Add to Cart</a>
                        </p>
                    </div>

                    <div class="product_box">
                        <a href="productdetail.html"><img src="images/product/05.jpg" alt="floral set 5" /></a>
                        <h3>Tincidunt Nisi</h3>
                        <p class="product_price">$150</p>
                        <p class="add_to_cart">
                            <a href="productdetail.html">Detail</a>
                            <a href="shoppingcart.html">Add to Cart</a>
                        </p>
                    </div>
                    <div class="product_box">
                        <a href="productdetail.html"><img src="images/product/07.jpg" alt="flowers 7" /></a>
                        <h3>Curabitur et turpis</h3>
                        <p class="product_price">$110</p>
                        <p class="add_to_cart">
                            <a href="productdetail.html">Detail</a>
                            <a href="shoppingcart.html">Add to Cart</a>
                        </p>
                    </div>
                    <div class="product_box">
                        <a href="productdetail.html"><img src="images/product/06.jpg" alt="flower set 6" /></a>
                        <h3>Mauris consectetur</h3>
                        <p class="product_price">$130</p>
                        <p class="add_to_cart">
                            <a href="productdetail.html">Detail</a>
                            <a href="shoppingcart.html">Add to Cart</a>
                        </p>
                    </div>
                    <div class="product_box no_margin_right">
                        <a href="productdetail.html"><img src="images/product/08.jpg" alt="floral 8" /></a>
                        <h3>Proin volutpat</h3>
                        <p class="product_price">$170</p>
                        <p class="add_to_cart">
                            <a href="productdetail.html">Detail</a>
                            <a href="shoppingcart.html">Add to Cart</a>
                        </p>
                    </div>

                    <div class="blank_box">
                        <a href="#"><img src="images/free_shipping.jpg" alt="Free Shipping" /></a>
                    </div>
                </div>
                <div class="cleaner"></div>
            </div> <!-- END of main -->
        </div> <!-- END of main wrapper -->

        @include('layout.footer')
    </div>

</body>

</html>