<!-- templatemo 385 floral shop -->
<!-- 
Floral Shop Template 
http://www.templatemo.com/preview/templatemo_385_floral_shop 
-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Check Out - Floral Template</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <link href="{{ asset ('templatemo_style.css')}}" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="{{ asset('css/orman.css') }}" type="text/css" media="screen" />
    <link rel="stylesheet" href="{{ asset ('css/nivo-slider.css') }}" type="text/css" media="screen" />

    <link rel="stylesheet" type="text/css" href="{{ asset('css/ddsmoothmenu.css') }}" />

    <script type="text/javascript" src="{{ asset ('js/jquery.min.js') }}"></script>
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
        <div id="templatemo_header_wsp">
            <div id="templatemo_header" class="header_subpage">
                <div id="site_title"><a href="#">Floral Shop</a></div>
                <div id="templatemo_menu" class="ddsmoothmenu">
                    <ul>
                        <li><a href="{{ route ('home')  }}">Home</a></li>
                        <li><a href="{{ route ('about') }}">About</a></li>
                        <li><a href="{{ route ('product') }}">Products</a> </li>
                        <li><a href="{{ route ('checkout') }}" class="selected">Checkout</a></li>
                        <li><a href="{{ route ('contact') }}">Contact</a></li>
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
                    <h2>Checkout</h2>

                    <h3>BILLING DETAILS</h3>




                    <div class="container">
                        <!-- Message de succès -->
                        @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                        @endif

                        <!-- Formulaire de Checkout -->
                        <form action="{{ route('checkout.store') }}" method="POST">
                            @csrf
                            <div class="content_half left form_field">
                                Full Name (must be the same as on credit card)
                                <input name="fullname" type="text" id="fullname" maxlength="40" required />
                                Address:
                                <input name="address" type="text" id="address" maxlength="40" required />
                                City:
                                <input name="city" type="text" id="city" maxlength="40" required />
                                Country:
                                <input name="country" type="text" id="country" maxlength="40" required />
                            </div>

                            <div class="content_half right form_field">
                                Email:
                                <input name="email" type="email" id="email" maxlength="40" required />
                                Phone:
                                <input name="phone" type="text" id="phone" maxlength="40" required />
                            </div>

                            <div class="form-group">
                                <button type="submit" class="submit-button">Submit</button>
                            </div>

                        </form>
                    </div>


                    <div class="cleaner h40"></div>

                    <h3>SHOPPING CARD</h3>
                    <h4>TOTAL: <strong>$560</strong></h4>
                    <p><input name="terms" type="checkbox" id="terms" />
                        I have read and accept the <a href="#">Terms of Use</a>. Validate <a href="http://validator.w3.org/check?uri=referer" rel="nofollow"><strong>XHTML</strong></a> &amp; <a href="http://jigsaw.w3.org/css-validator/check/referer" rel="nofollow"><strong>CSS</strong></a>.</p>
                    <p><a href="#"><img src="images/1311260370_paypal-straight.png" alt="paypal" align="middle" /></a>&nbsp;(recommended if you have a PayPal account. Fastest way to complete your order.)</p>
                    <p><a href="#"><img src="images/flagship.jpg" alt="Flagship" align="middle" /></a>&nbsp;(free shipping for orders above $500)</p>
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