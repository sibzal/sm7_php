<?php

include('include/goods.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <h2>Категории</h2>

        <?php
        $categories = getGoodsCountByCategory();

        foreach ($categories as $category) { ?>
        <p>
            <?= $category['name'] ?>:
            <?= $category['count'] ?>
        </p>
        <? } ?>
    </div>

    <div class="container">
        <h2>Список товаров</h2>

        <?php
        $goods = getGoodsList();

        foreach ($goods as $good) { ?>
        <p>
            <?= $good['name'] ?>:
            <?= $good['price'] ?> ₽,
            <?= $good['weight'] / 1000 ?> кг.,
            <?= $good['category_name'] ?>
        </p>
        <? } ?>
    </div>

    <div class="container">
        <h2>Средняя цена товара:
        <?= getGoodsAvgPrice() ?> ₽
        </h2>
    </div>

    <div class="container">
        <h2>Общий вес товаров:
        <?= getGoodsWeightSum() ?> г.
        </h2>
    </div>
</body>

</html>