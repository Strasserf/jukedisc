<!DOCTYPE html>
<html lang="cs">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/ScrollTrigger.min.js"></script>

</head>

<body>

    <?php
    include("includes/header.php");
        
    include("includes/side.php");

    $json = file_get_contents('products.json');
    $products = json_decode($json, true)
        ?>


    <div class="hero">
        <div class="hero__right">
            <h1>Kytary</h1>
            <div class="type">
                <a class="type__element">Akustické</a>
                <a class="type__element">Elektrycké</a>
                <a class="type__element">Elektroakustické</a>
                <a class="type__element">Basové</a>
                <a class="type__element">Efekty na kytary</a>
            </div>
            <div class="shop">

<?php
      foreach ($products as $product) {
        $popis = (mb_strlen($product['popis'], 'UTF-8') > 50) ? mb_substr($product['popis'], 0, 50, 'UTF-8') . '...' : $product['popis'];
        echo('

                <a href="shop__item.php?id=' . $product['id'] . '" class="shop__element">
                    <img class="shop__image" src="images/shop__images/' . $product['obrazek'] .'" alt="">
                    <h2> ' . $product['nazev'] . ' </h2>
                    <p> ' . $product['cena'] . ' </p>
                </a>');
    }
?>
            </div>
        </div>
    </div>

<?php
    include("includes/footer.php")
?>

    <script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/gsap.min.js"></script>
    <script src="script.js"></script>
</body>

</html>