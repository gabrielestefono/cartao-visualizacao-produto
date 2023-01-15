<?php include_once("templates/head.php");?>
<?php include_once("templates/body_essencial.php");?>
    <div class="container">
        <div class="container__presentation"></div>
        <div class="flex">
            <div class="container__title">
                <h3 class="container__title--text"><?= $apresentation["titulo"]?></h3>
            </div>
            <div class="container__product-name">
                <h3 class="container__product-name--text"><?= $apresentation["nome"]?></h3>
            </div>
            <div class="container__description">
                <p class="container__description--text"><?= $apresentation["descricao"]?></p>
            </div>
            <div class="container__price">
                <span class="container__price--promotion">$<?= $apresentation["preco_agora"]?></span>
                <span class="container__price--commom">$<?= $apresentation["preco_antes"]?></span>
            </div>
            <div class="container__buy">
                <button class="container__buy--button"><i class="fa-solid fa-cart-shopping"></i> Add to Cart</button>
            </div>
        </div>
    </div>
<?php include_once("templates/footer.php");?>