<?php
session_start();
$is_empty = "Корзина порожня";
$naming = null;
if (isset($_SESSION['naming']) ) {
    $is_empty = null;
    $naming = $_SESSION['naming'];
}
require "header.php";
?>
<main>
    <div class="item-container">
        <div class="basket-wrap">
            <span class="is-empty"><?php echo $is_empty?></span>
            <span><?php if ($naming!=null) foreach ($naming as $item) echo $item."<br>"?></span>
            <a href="catalog.php" class="order gold">До замовлень</a>
        </div>
    </div>
</main>
<?php
require "footer.php";
?>

