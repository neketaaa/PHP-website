<?php
require "header.php";
?>
<main>
    <div class="container-wrap">
        <div class="help-container">
            <div class="title-wrap">
                <div class="title-line"></div>
                <div class="title gold">Каталог</div>
                <div class="title-line"></div>
            </div>
        </div>
        <div class="slider-field">
            <i class="fa-solid fa-chevron-left slider-prev"></i>
            <div class="slider">

                <div class="slider-line">
                    <a href="item_shuka100.php"><img src="../css/images/catalog-mixed.png" class="slide-single"></a>
                    <a href="red_tile.php"><img src="../css/images/catalog-red.png" class="slide-single"></a>
                    <a href="black_tile.php"><img src="../css/images/catalog-black.png" class="slide-single"></a>
                </div>

            </div>
            <i class="fa-solid fa-chevron-right slider-next"></i>
        </div>
        <div class="catalog-text-wrap">
            <a href="black_tile.php" id="catalog-black-text" class="catalog-text">Чорна ікра</a>
            <a href="item_shuka100.php" id="catalog-offer-text" class="catalog-text">Пропозиція</a>
            <a href="red_tile.php" id="catalog-red-text" class="catalog-text">Червона ікра</a>
        </div>
    </div>
</main>
<?php
require "footer.php";
?>

