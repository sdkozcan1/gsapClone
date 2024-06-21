<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Custom Swiper Next Button</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <style>
        /* Swiper container için stil */
        .swiper-container {
            width: 600px;
            margin: 0 auto;
        }

        /* Özelleştirilmiş Next düğmesi için stil */
        .custom-next-button {
            display: block;
            width: 100px;
            margin: 20px auto;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .custom-next-button:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>

    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">Slide 1</div>
            <div class="swiper-slide">Slide 2</div>
            <div class="swiper-slide">Slide 3</div>
            <div class="swiper-slide">Slide 4</div>
            <div class="swiper-slide">Slide 5</div>
            <div class="swiper-slide">Slide 6</div>
            <div class="swiper-slide">Slide 7</div>
            <div class="swiper-slide">Slide 8</div>
        </div>

    </div>

    <!-- Yeni next butonumuz -->
    <button class="custom-next-button">Next</button>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper('.swiper-container', {
            slidesPerView: 3,
            spaceBetween: 30,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });

        // Next butonuna tıklanınca çağrılacak fonksiyon
        document.querySelector('.custom-next-button').addEventListener('click', function() {
            swiper.slideNext(); // Swiper'daki bir sonraki slayta geçişi gerçekleştirir
        });
    </script>

</body>

</html>