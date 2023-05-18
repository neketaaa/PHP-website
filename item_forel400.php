<?php
session_start();
if (isset($_GET['naming'])) {
    if (!isset($_SESSION['naming'])) {
        $_SESSION['naming'] = [];
    }
    $_SESSION['naming'][] = $_GET['naming'];
}
require "header.php";
?>
<main>
    <div class="item-container">
        <div class="item-wrap">
            <div class="item-photo"><img src="../css/images/tile_forel400.png"></div>
            <div class="item-info">
                <div class="item-title">Ікра Форель 400гр</div>
                <div class="item-price">Ціна: 2100грн</div>
                <div id="counter-title"><strong>Кількість</strong></div>
                <div id="counter">
                    <input type="button" id="buttonCountMinus" value="-">
                    <div id="buttonCountNumber">1</div>
                    <input type="button" id="buttonCountPlus" value="+">
                </div>
                <a href="item_forel400.php?naming=Ікра Форель 400гр" class="order gold">У кошик</a>

                </div>
            </div>
        </div>
    </div>
</main>
<?php
require "footer.php";
?>

