<!-- templatemo 385 floral shop -->
<!-- 
Floral Shop Template 
http://www.templatemo.com/preview/templatemo_385_floral_shop 
-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Contact - Floral Template</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="{{ asset ('templatemo_style.css')}}" rel="stylesheet" type="text/css" />

<link rel="stylesheet" href="{{ asset ('css/orman.css')}}" type="text/css" media="screen" />
<link rel="stylesheet" href="{{ asset ('css/nivo-slider.css')}}" type="text/css" media="screen" />

<link rel="stylesheet" type="text/css" href="{{ asset ('css/ddsmoothmenu.css')}}" />

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
                <li><a href="{{route ('home')}}">Home</a></li>
                <li><a href="{{route ('about')}}">About</a></li>
           		<li><a href="{{route ('product')}}">Products</a></li>
                <li><a href="{{route ('checkout')}}">Checkout</a></li>
                <li><a href="{{route ('contact')}}" class="selected">Contact</a></li>
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
		<h2>Contact</h2>
        <p>Morbi adipiscing gravida lacus, id rhoncus neque sollicitudin ac. Sed eget purus vitae enim pulvinar viverra. Cras ut elit et ligula blandit eleifend. Nam at odio sem, sed tempor justo.</p>
        <div class="cleaner h20"></div>
        <div class="col col13">
            <h4>Mailing Address</h4>
        	<h6><strong>Office One</strong></h6>
            800-220 Fusce nec ante at odio, <br />
            In vitae lacus in purus, 66770<br />
            Diam a mollis tempor<br /><br />
            
			<strong>Phone:</strong> 010-440-5500<br />
            <strong>Email:</strong> <a href="mailto:contact@company.com">contact@company.com</a> <br />
            
            <div class="cleaner h20"></div>
            
            <h6><strong>Office Two</strong></h6>
            600-110 Duis lacinia, <br />
            Ullamcorper mattis, 88770<br />
            Maecenas a diam, mollis magna<br /><br />
            
			<strong>Phone:</strong> 020-660-8800<br />
            <strong>Email:</strong> <a href="mailto:info@company.com">info@company.com</a> <br />

            Validate <a href="http://validator.w3.org/check?uri=referer" rel="nofollow"><strong>XHTML</strong></a> &amp; <a href="http://jigsaw.w3.org/css-validator/check/referer" rel="nofollow"><strong>CSS</strong></a>
		</div>
        <div class="col col23 no_margin_right">
        	<div class="map_border">
                <iframe width="430" height="340" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Central+Park,+New+York,+NY,+USA&amp;aq=0&amp;sll=14.093957,1.318359&amp;sspn=69.699334,135.263672&amp;vpsrc=6&amp;ie=UTF8&amp;hq=Central+Park,+New+York,+NY,+USA&amp;ll=40.778265,-73.96988&amp;spn=0.033797,0.06403&amp;t=m&amp;output=embed"></iframe></div>
			
        </div>
        <div class="cleaner h40"></div>
        <div id="contact_form">
           <form method="post" name="contact" action="#">
           		<div class="col col13">
                
                    <label for="name">Name:</label> 
              		<input name="name" type="text" class="input_field" id="name" maxlength="40" />
                	<div class="cleaner h10"></div>
                    <label for="email">Email:</label> 
          			<input name="email" type="text" class="required input_field" id="email" maxlength="40" />
                	<div class="cleaner h10"></div>
                    <label for="phone">Phone:</label> 
        			<input name="phone" type="text" class="input_field" id="phone" maxlength="20" />
                	<div class="cleaner h10"></div>
                	
                
			 	</div>
                
                <div class="col col23 no_margin_right">
                    <label for="message">Message:</label> 
               	  	<textarea id="message" name="message" rows="0" cols="0" class="required"></textarea>
                    <div class="cleaner h10"></div>
                    <input type="submit" class="submit_btn left" name="submit" id="submit" value="Send" />
                    <input type="reset" class="submit_btn submit_right" name="reset" id="reset" value="Reset" />
				</div>
                
                
            </form>
        </div>
        <div class="cleaner h40"></div>        
        <div class="blank_box">
        	<a href="#"><img src="images/free_shipping.jpg" alt="Free Shipping" /></a>
        </div>  
        <div class="cleaner"></div>  
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
		<p><a href="{{route ('home')}}">Home</a> | <a href="{{ route ('product')}}">Products</a> | <a href="{{route ('about')}}">About</a> | <a href="faqs.html">FAQs</a> | <a href="{{route ('checkout')}}">Checkout</a> | <a href="{{route ('contact')}}">Contact</a></p>
        <p>Copyright © 2084 <a href="#">Company Name</a></p>
	</div>
    <div class="cleaner"></div>
</div> <!-- END of footer -->
</div> <!-- END of footer wrapper -->
</div>

</body>
</html>