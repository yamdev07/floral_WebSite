<!-- templatemo 385 floral shop -->
<!-- 
Floral Shop Template 
http://www.templatemo.com/preview/templatemo_385_floral_shop 
-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Product Detail - Floral Template</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <link href="{{asset ('templatemo_style.css')}}" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="{{ asset('css/orman.css')}}" type="text/css" media="screen" />
    <link rel="stylesheet" href="{{asset ('css/nivo-slider.css')}}" type="text/css" media="screen" />

    <link rel="stylesheet" type="text/css" href="{{asset ('css/ddsmoothmenu.css')}}" />

    <script type="text/javascript" src="{{asset ('js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset ('js/ddsmoothmenu.js')}}">
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

    <script type="text/javascript" src="{{asset ('js/jquery-1-4-2.min.js')}}"></script>
    <link rel="stylesheet" href="{{asset ('css/slimbox2.css')}}" type="text/css" media="screen" />
    <script type="text/JavaScript" src="{{asset ('js/slimbox2.js')}}"></script>

</head>

<body>

    <div id="templatemo_wrapper_sp">
        <div id="templatemo_header_wsp">
            <div id="templatemo_header" class="header_subpage">
                <div id="site_title"><a href="#">Floral Shop</a></div>
                <div id="templatemo_menu" class="ddsmoothmenu">
                    <ul>
                        <li><a href="{{route ('home')}}">Home</a></li>
                        <li><a href="{{route ('about')}}">About</a></li>
                        <li><a href="{{route ('product')}}">Products</a></li>
                        <li><a href="{{route ('checkout')}}">Checkout</a></li>
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

            </div> <!-- END of header -->
        </div> <!-- END of header wrapper -->
        <div id="templatemo_main_wrapper">
            <div id="templatemo_main">
                @include('layout.sidebar')
                <div id="content" class="right">
    <!-- Titre du produit -->
    <h2>{{ $product->name }}</h2>
    
    <!-- Partie gauche : image du produit -->
    <div class="content_half left">
        <a rel="lightbox" href="{{ asset('images/product/' . $product->image) }}">
            <img src="{{ asset($product->image) }}" alt="{{ $product->name }}" width="165" height="165">
        </a>
    </div>
    
    <!-- Partie droite : détails du produit -->
    <div class="content_half right">
        <table>
            <!-- Affichage du prix -->
            <tr>
                <td width="130">Price:</td>
                <td width="84">${{ $product->price }}</td>
            </tr>

            <!-- Affichage de la disponibilité du produit -->
            <tr>
                <td>Availability:</td>
                <td>
                    <strong>{{ $product->availability ? 'In Stock' : 'Out of Stock' }}</strong>
                </td>
            </tr>

            <!-- Champ de quantité (par défaut 1) -->
            <tr>
                <td>Quantity:</td>
                <td><input type="number" value="1" min="1" size="6" maxlength="2" /></td>
            </tr>
        </table>

        <!-- Espace vertical entre les éléments -->
        <div class="cleaner h20"></div>

        <!-- Bouton Ajouter au panier -->
        <a href="{{ route('shoppingcart') }}" class="button">Add to Cart</a>
    </div>

    <!-- Espace vertical supplémentaire entre les sections -->
    <div class="cleaner h40"></div>

    <!-- Description du produit -->
    <h4>Product Description</h4>
    <p>{{ $product->description }}</p>

    <!-- Espace vertical entre les sections -->
    <div class="cleaner h40"></div>

    <!-- Box supplémentaire (exemple : promo ou autre image) -->
    <div class="blank_box">
        <a href="#"><img src="{{ asset('images/free_shipping.jpg') }}" alt="Free Shipping" /></a>
    </div>
</div>

<!-- Espace pour nettoyer le layout (vider les flottants) -->
<div class="cleaner"></div>

            </div> <!-- END of main -->
        </div> <!-- END of main wrapper -->
        @include('layout.footer')
    </div>

</body>

</html>