<div id="templatemo_header_wsp">
    <div id="templatemo_header" class="header_subpage">
        <div id="site_title"><a href="#">Floral Shop</a></div>
        <div id="templatemo_menu" class="ddsmoothmenu">
            <ul>
                <li><a href="{{route ('home') }}">Home</a></li>
                <li><a href="{{ route ('about') }}">About</a></li>
                <li><a href="{{ route ('product') }}" class="selected">Products</a> </li>
                <li><a href="{{route ('checkout')}}">Checkout</a></li>
                <li><a href="{{ route ('contact')}}">Contact</a></li>
                <li><a href="{{ route ('faqs')}}">FAQs</a></li>
                <li><a href="{{ route ('create')}}">Create</a></li>
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