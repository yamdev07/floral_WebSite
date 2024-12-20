<!-- templatemo 385 floral shop -->
<!-- 
Floral Shop Template 
http://www.templatemo.com/preview/templatemo_385_floral_shop 
-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Shopping Cart - Floral Template</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="{{asset ('templatemo_style.css')}}" rel="stylesheet" type="text/css" />

<link rel="stylesheet" href="{{ asset ('css/orman.css')}}" type="text/css" media="screen" />
<link rel="stylesheet" href="{{ asset ('css/nivo-slider.css')}}" type="text/css" media="screen" />

<link rel="stylesheet" type="text/css" href="{{ asset('css/ddsmoothmenu.css')}}" />

<script type="text/javascript" src="{{ asset('js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/ddsmoothmenu.js')}}">

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

function clearText(field)
{
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
                <li><a href="{{route('home')}}">Home</a></li>
                <li><a href="{{route ('about')}}">About</a></li>
                <li><a href="{{route ('product')}}">Products</a>
                    <ul>
                        <li><a href="#subpage1">Sub Page One</a></li>
                        <li><a href="#subpage2">Sub Page Two</a></li>
                        <li><a href="#subpage3">Sub Page Three</a></li>
                        <li><a href="#subpage4">Sub Page Four</a></li>
                        <li><a href="#subpage5">Sub Page Five</a></li>
                  	</ul>
                </li>
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

    </div> <!-- END of header -->
</div> <!-- END of header wrapper -->
<div id="templatemo_main_wrapper">
<div id="templatemo_main">
	<div id="sidebar" class="left">
    	<div class="sidebar_box"><span class="bottom"></span>
            <h3>Categories</h3>   
            <div class="content"> 
                <ul class="sidebar_list">
                    <li><a href="#">Nulla odio ipsum</a></li>
                    <li><a href="#">Suspendisse posuere</a></li>
                    <li><a href="#">Aliquam euismod</a></li>
                    <li><a href="#">Curabitur ac mauris</a></li>
                    <li><a href="#">Mauris nulla tortor</a></li>
                    <li><a href="#">Nullam ultrices</a></li>
                    <li><a href="#">Vivamus scelerisque</a></li>
                    <li><a href="#">Suspendisse posuere</a></li>
                    <li><a href="#">Quisque vel justo</a></li>
                </ul>
            </div>
        </div>
        <div class="sidebar_box"><span class="bottom"></span>
            <h3>Weekly Special</h3>   
            <div class="content special"> 
                <img src="images/templatemo_image_01.jpg" alt="Flowers" />
                <a href="#">Citrus Burst Bouquet</a>
                <p>
                	Price:
                    <span class="price normal_price">$160</span>&nbsp;&nbsp;
                    <span class="price special_price">$100</span>
                </p>
            </div>
        </div>
    </div>
    
    <div id="content" class="right">
    	<h2>Shopping Cart</h2>
		<table width="700" border="0" cellpadding="5" cellspacing="0">
          	<tr bgcolor="#395015">
                <th width="168" align="left">Item</th> 
                <th width="188" align="left">Description</th> 
                <th width="60" align="center">Quantity</th> 
                <th width="80" align="right">Price</th> 
                <th width="80" align="right">Total</th> 
                <th width="64"> </th>
          	</tr>
            <tr bgcolor="#41581B">
                <td><img src="images/product/01.jpg" alt="flower image 1" /></td> 
                <td>Ut eu feugiat</td> 
                <td align="center"><input name="quantity1" type="text" id="quantity1" value="1" size="6" maxlength="2" /> </td>
                <td align="right">$240</td> 
                <td align="right">$240</td>
                <td align="center"> <a href="#"><img src="images/remove.png" alt="remove" /><br />Remove</a> </td>
            </tr>
      <tr bgcolor="#41581B">
                <td><img src="images/product/02.jpg" alt="flower image 2" /> </td>
                <td>Donec Est Nisi (Validate <a href="http://validator.w3.org/check?uri=referer" rel="nofollow"><strong>XHTML</strong></a> &amp; <a href="http://jigsaw.w3.org/css-validator/check/referer" rel="nofollow"><strong>CSS</strong></a>)</td> 
                <td align="center"><input name="quantity2" type="text" id="quantity2" value="2" size="6" maxlength="2" />  </td>
                <td align="right">$160</td>
                <td align="right">$320</td>
                <td align="center"> <a href="#"><img src="images/remove.png" alt="remove" /><br />Remove</a>  </td>
            </tr>
<tr bgcolor="#41581B">
                <td colspan="3">Have you modified item quantities? Please <a href="{{route('shoppingcart')}}"><strong>Update</strong></a> the Cart.&nbsp;&nbsp;</td>
                <td align="right"><h4>All Total:</h4></td>
                <td align="right"><h4>$560</h4></td>
                <td> </td>
            </tr>
        </table>
		<div class="cleaner h20"></div>
        <div class="right"><a href="{{route ('checkout')}}" class="button">checkout</a></div>
        <div class="cleaner h20"></div>
        <div class="blank_box">
        	<a href="#"><img src="images/free_shipping.jpg" alt="Free Shipping" /></a>
        </div>    
    </div>
    <div class="cleaner"></div>
</div> <!-- END of main -->
</div> <!-- END of main wrapper -->

<div id="templatemo_footer_wrapper">
<div id="templatemo_footer">
	<div class="footer_left">
    	<a href="#"><img src="images/1311260370_paypal-straight.png" alt="Paypal" /></a>
        <a href="#"><img src="images/1311260374_mastercard-straight.png" alt="Master" /></a>
        <a href="#"><img src="images/1311260374_visa-straight.png" alt="Visa" /></a>
    </div>
	<div class="footer_right">
		<p><a href="{{route ('home')}}">Home</a> | <a href="{{route('product')}}">Products</a> | <a href="{{route('about')}}">About</a> | <a href="faqs.html">FAQs</a> | <a href="{{route('checkout')}}">Checkout</a> | <a href="{{route('contact')}}">Contact</a></p>
        <p>Copyright © 2084 <a href="#">Company Name</a></p>
	</div>
    <div class="cleaner"></div>
</div> <!-- END of footer -->
</div> <!-- END of footer wrapper -->
</div>

</body>
</html>