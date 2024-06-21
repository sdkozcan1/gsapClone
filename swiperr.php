<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Swiper demo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- Demo styles -->
    <style>
        html,
        body {
            position: relative;
            height: 100%;
        }

        body {
            background: #eee;
            font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
            font-size: 14px;
            color: #000;
            margin: 0;
            padding: 0;
        }

        .swiper {
            width: 100%;
            height: 100%;
        }

        .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
        }



        .swiper {
            margin-left: auto;
            margin-right: auto;
        }
    </style>

</head>

<body>
    <!-- Swiper -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="slide-img-div">
                                <img style="width: 25%;height:25%" src="https://images.pexels.com/photos/21915598/pexels-photo-21915598/free-photo-of-kent-sehir-sanat-kent-simgesi.jpeg?auto=compress&cs=tinysrgb&w=800&lazy=load" alt="">

                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="slide-img-div">
                                <img style="width: 25%;height:25%" src="https://images.pexels.com/photos/22941109/pexels-photo-22941109/free-photo-of-menorca-daki-deniz-feneri.jpeg?auto=compress&cs=tinysrgb&w=800&lazy=load" alt="">

                            </div>
                        </div>
                        <div class="swiper-slide">
                            <img style="width: 25%;height:25%" src="https://images.pexels.com/photos/22857393/pexels-photo-22857393/free-photo-of-peyzaj-manzara-doga-alan.jpeg?auto=compress&cs=tinysrgb&w=800&lazy=load" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img style="width: 25%;height:25%" src="https://images.pexels.com/photos/5808410/pexels-photo-5808410.jpeg?auto=compress&cs=tinysrgb&w=800&lazy=load" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img style="width: 25%;height:25%" src="https://images.pexels.com/photos/21940156/pexels-photo-21940156/free-photo-of-deniz-siyah-ve-beyaz-yol-safak.jpeg?auto=compress&cs=tinysrgb&w=800&lazy=load" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img style="width: 25%;height:25%" src="https://images.pexels.com/photos/21038758/pexels-photo-21038758/free-photo-of-siyah-ve-beyaz-kent-sehir-doga.jpeg?auto=compress&cs=tinysrgb&w=800&lazy=load" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img style="width: 25%;height:25%" src="https://images.pexels.com/photos/23221538/pexels-photo-23221538/free-photo-of-isik-parlak-acik-hafif.jpeg?auto=compress&cs=tinysrgb&w=800&lazy=load" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img style="width: 25%;height:25%" src="https://images.pexels.com/photos/18717344/pexels-photo-18717344/free-photo-of-kent-simgesi-gorulecek-yer-kayalar-seyahat.jpeg?auto=compress&cs=tinysrgb&w=800&lazy=load" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img style="width: 25%;height:25%" src="https://images.pexels.com/photos/23383925/pexels-photo-23383925/free-photo-of-deniz-tatil-su-el-sallamak.jpeg?auto=compress&cs=tinysrgb&w=800&lazy=load" alt="">
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 1,
            spaceBetween: 30,
            loop: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>
</body>

</html>