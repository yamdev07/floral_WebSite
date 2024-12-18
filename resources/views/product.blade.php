 <!-- templatemo 385 floral shop -->
 <!-- 
Floral Shop Template 
http://www.templatemo.com/preview/templatemo_385_floral_shop 
-->
 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
 <html xmlns="http://www.w3.org/1999/xhtml">

 <head>
     <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
     <title>Products - Floral Template</title>
     <meta name="keywords" content="" />
     <meta name="description" content="" />
     <link href="{{ asset ('templatemo_style.css') }}" rel="stylesheet" type="text/css" />

     <link rel="stylesheet" href="{{ asset ('css/orman.css') }}" type="text/css" media="screen" />
     <link rel="stylesheet" href="{{ asset ('css/nivo-slider.css') }}" type="text/css" media="screen" />

     <link rel="stylesheet" type="text/css" href="{{ asset ('css/ddsmoothmenu.css') }}" />

     <script type="text/javascript" src="{{ asset ('js/jquery.min.js')}}"></script>
     <script type="text/javascript" src="{{ asset ('js/ddsmoothmenu.js')}}">
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
                     <h2>Products</h2>
                     <h3>Découvrez la Magie des Fleurs : Plus Qu'une Simple Décoration, Une Expérience Émotionnelle</h3>
                     <p>Imaginez entrer dans une pièce où l'air est parfumé de doux arômes floraux, où chaque pétale raconte une histoire de beauté, d'amour et de joie.
                         Les fleurs ne sont pas simplement des ornements ; elles sont des messagères silencieuses qui transmettent des émotions, créent des souvenirs, et transforment
                         n'importe quel espace en un véritable havre de paix.</p>



                     <p>Qu'il s'agisse de célébrer un moment spécial, d'apporter un sourire à un être cher, ou simplement d'ajouter une touche de fraîcheur à votre quotidien, nos collections florales sont soigneusement sélectionnées pour offrir une expérience sensorielle inoubliable.
                         Chaque bouquet est un chef-d'œuvre, conçu pour capturer la beauté de la nature dans toute sa splendeur.</p>

                     <p>Avant de découvrir nos variétés uniques, laissez-vous emporter par la vision que vous souhaitez créer : quel message voulez-vous envoyer avec vos fleurs ?</p>
                     {{-- Affichage des produits de manière dynamique --}}
                     @foreach ($products as $product)
                     <div class="product_box">
                         <a href="{{ route('productdetail', ['id' => $product->id]) }}">
                             <img src="{{ asset($product->image) }}" alt="{{ $product->name }}" width="165" height="165">

                         </a>
                         <h3>{{ $product->name }}</h3>
                         <p class="product_price">${{ number_format($product->price, 2) }}</p>
                         <p class="add_to_cart">
                             <a href="{{ route('product.show', $product->id) }}">Detail</a>
                             <a href="{{ route('shoppingcart', ['id' => $product->id]) }}">Add to Cart</a>
                         </p>
                     </div>
                     @endforeach

                     <div class="product_box">
                         <a href="{{route ('productdetail')}}"><img src="images/product/product04.jpg" alt="floral 3" width="165" height="165" /></a>
                         <h3>Tristique Vitae</h3>
                         <p class="product_price">$140</p>
                         <p class="add_to_cart">
                             <a href="{{ route('productdetail')}}">Detail</a>
                             <a href="{{route('shoppingcart')}}">Add to Cart</a>
                         </p>
                     </div>
                     <div class="product_box no_margin_right">
                         <a href="{{route ('productdetail')}}"><img src="images/product/product05.jpg" alt="flowers 4" width="165" height="165" /></a>
                         <h3>Hendrerit Eu</h3>
                         <p class="product_price">$320</p>
                         <p class="add_to_cart">
                             <a href="{{route ('productdetail')}}">Detail</a>
                             <a href="{{route ('shoppingcart')}}">Add to Cart</a>
                         </p>
                     </div>

                     <div class="product_box">
                         <a href="productdetail.html"><img src="images/product/05.jpg" alt="floral set 5" /></a>
                         <h3>Tincidunt Nisi</h3>
                         <p class="product_price">$150</p>
                         <p class="add_to_cart">
                             <a href="{{route ('productdetail')}}">Detail</a>
                             <a href="{{route ('shoppingcart')}}">Add to Cart</a>
                         </p>
                     </div>
                     <div class="product_box">
                         <a href="productdetail.html"><img src="images/product/07.jpg" alt="flowers 7" /></a>
                         <h3>Curabitur et turpis</h3>
                         <p class="product_price">$110</p>
                         <p class="add_to_cart">
                             <a href="{{route ('productdetail')}}">Detail</a>
                             <a href="{{route ('shoppingcart')}}">Add to Cart</a>
                         </p>
                     </div>
                     <div class="product_box">
                         <a href="productdetail.html"><img src="images/product/06.jpg" alt="flower set 6" /></a>
                         <h3>Mauris consectetur</h3>
                         <p class="product_price">$130</p>
                         <p class="add_to_cart">
                             <a href="{{route ('productdetail')}}">Detail</a>
                             <a href="{{route ('shoppingcart')}}">Add to Cart</a>
                         </p>
                     </div>
                     <div class="product_box no_margin_right">
                         <a href="productdetail.html"><img src="images/product/08.jpg" alt="floral 8" /></a>
                         <h3>Proin volutpat</h3>
                         <p class="product_price">$170</p>
                         <p class="add_to_cart">
                             <a href="{{route ('productdetail')}}">Detail</a>
                             <a href="{{route ('shoppingcart')}}">Add to Cart</a>
                         </p>
                     </div>
                     <div class="blank_box">
                         <a href="#" class="button left">Previous</a>
                         <a href="#" class="button right">Next Page</a>
                     </div>
                     <div class="cleaner h20"></div>
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