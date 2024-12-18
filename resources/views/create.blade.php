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
        <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data" class="container mt-4">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nom du produit :</label>
                <input type="text" class="form-control" name="name" id="name" required>
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Prix :</label>
                <input type="number" class="form-control" name="price" id="price" required>
            </div>

            <div class="mb-3">
                <label for="description">Description du produit :</label>
                <textarea name="description" id="description" required></textarea>
            </div>


            <div class="mb-3">
                <label for="image" class="form-label">Image du produit :</label>
                <input type="file" class="form-control" name="image" id="image" required>
            </div>

            <button type="submit" class="btn btn-primary">Ajouter le produit</button>
        </form>
    </div>



</body>