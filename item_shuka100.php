<?php
require "header.php";
?>
<main>
    <div class="item-container">
        <div class="item-wrap">
            <div class="item-photo"><img src="../css/images/tile_shuka100.png"></div>
            <div class="item-info">
                <div class="item-title">Ікра щука 100гр</div>
                <div class="item-price">Ціна: 399грн</div>
                <div id="counter-title"><strong>Кількість</strong></div>
                <div id="counter">
                    <input type="button" id="buttonCountMinus" value="-">
                    <div id="buttonCountNumber">1</div>
                    <input type="button" id="buttonCountPlus" value="+">
                </div>
                <span class="order gold">У кошик</span>
            </div>
        </div>
    </div>
</main>
<?php
require "footer.php";
?>

