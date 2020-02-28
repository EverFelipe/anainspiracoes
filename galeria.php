<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="css/swiper.min.css" rel="stylesheet" type="text/css"/>
    <link href="css/galeria.css" rel="stylesheet" type="text/css"/>
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes&display=swap" rel="stylesheet">
    <title>Galeria de Protifolio</title>
</head>
<body>
    <div class="headear">
        <h1>Galeria de Portfolio</h1>
    </div>
    <!-- Swiper-->
    <div class="swiper-container">
        <div class="swiper-wrapper">
             <!--(X)Colocar um For Com PHP 
                 ()puxando do Banco de Dados-->
            <?php 
                for($i=1;$i<=8;$i++):
                    $url="img/cadernos/img".$i.".jpg";
            ?>
            <div class="swiper-slide">  
                <div class="imgBx">
                    <?php
                    echo("<img src=".$url.">");
                    ?>
                </div>
                <div class="details">
                    <h3>Ana Paula</h3><samp>Arte&mino</samp>
                </div>
            </div>
            <?php
                endfor
            ?>
            
            
            <!--
            <div class="swiper-slide">  
                <div class="imgBx">
                    <img src="img/cadernos/img2.jpg" alt="">
                </div>
                <div class="details">
                    <h3>Ana Paula</h3><samp>Arte&mino</samp>
                </div>
            </div>
            <div class="swiper-slide">  
                <div class="imgBx">
                    <img src="img/cadernos/img3.jpg" alt="">
                </div>
                <div class="details">
                    <h3>Ana Paula</h3><samp>Arte&mino</samp>
                </div>
            </div>
            <div class="swiper-slide">  
                <div class="imgBx">
                    <img src="img/cadernos/img4.jpg" alt="">
                </div>
                <div class="details">
                    <h3>Ana Paula</h3><samp>Arte&mino</samp>
                </div>
            </div>
            <div class="swiper-slide">  
                <div class="imgBx">
                    <img src="img/cadernos/img5.jpg" alt="">
                </div>
                <div class="details">
                    <h3>Ana Paula</h3><samp>Arte&mino</samp>
                </div>
            </div>
            <div class="swiper-slide">  
                <div class="imgBx">
                    <img src="img/cadernos/img6.jpg" alt="">
                </div>
                <div class="details">
                    <h3>Ana Paula</h3><samp>Arte&mino</samp>
                </div>
            </div>
            <div class="swiper-slide">  
                <div class="imgBx">
                    <img src="img/cadernos/img7.jpg" alt="">
                </div>
                <div class="details">
                    <h3>Ana Paula</h3><samp>Arte&mino</samp>
                </div>
            </div>
            <div class="swiper-slide">  
                <div class="imgBx">
                    <img src="img/cadernos/img8.jpg" alt="">
                </div>
                <div class="details">
                    <h3>Ana Paula</h3><samp>Arte&mino</samp>
                </div>
            </div>-->

        </div>
        

        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
    </div>
    <script type="text/javascript" src="scripts/swiper.min.js"></script>
<!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper('.swiper-container', {
      effect: 'coverflow',
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: 'auto',
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows : true,
      },
      pagination: {
        el: '.swiper-pagination',
      },
    });
  </script>
</body>
</html>