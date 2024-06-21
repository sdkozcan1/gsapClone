<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link rel="stylesheet" href="./style.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" />
    <style>
        #dropUl {
            list-style: none !important;
            overflow: hidden !important;
            text-align: left !important;
            width: 100px !important;
            max-height: 0 !important;
            opacity: 0 !important;
            -webkit-transition: all .5s ease-in-out 0s !important;
            transition: all .5s ease-in-out 0s !important;
        }

        #dropUl.open {
            max-height: 500px !important;
            opacity: 1 !important;
            z-index: 9999 !important;
        }
    </style>

</head>
<script>
    function toggleNav() {
        let $menu = $('#indexSideNav'); // Menüyü seç
        let $button = $('#button'); // Butonu seç
        let isOpen = $menu.is(':visible'); // Menünün açık olup olmadığını kontrol et

        if (isOpen) {
            // Menü açıksa kapat
            $menu.fadeOut();
            $("#sideNavFooter").fadeOut();
            $(".navbar").removeClass("yellow-nav");
            $("#logo").removeClass("yellow-nav-text");
            $(".open-menu-btn").removeClass("sidenav-menu-btn");
            // Menü kapalıyken 'Menu' butonunun yanında menuIcon simgesi göster
            $('#menuIcon').removeClass('d-none');
            $('#closeBtn').addClass('d-none');

        } else {
            // Menü kapalıysa aç
            $menu.fadeIn();
            $("#sideNavFooter").fadeIn();
            $(".navbar").addClass("yellow-nav");
            $("#logo").addClass("yellow-nav-text");
            $(".open-menu-btn").addClass("sidenav-menu-btn");
            // Menü açıkken 'Menu' butonunun yanında closeBtn simgesi göster
            $('#menuIcon').addClass('d-none');
            $('#closeBtn').removeClass('d-none');
        }
    }

    $(function() {
        $('#button').click(function() {
            console.log("tiklandi");
            $('#dropUl').toggleClass('open');
        });
    });
</script>