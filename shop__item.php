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
    include("includes/header.php")
        ?>
    <?php
    include("includes/side.php")
        ?>
    <div class="hero">
        <div class="hero__right">
            <div class="product">
                <div class="product__element">

                    <div class="product__left">
                        <img class="shop__image" src="images/shop__images/guitar.jpg" alt="">
                    </div>
                    <div class="product__right">
                        <div class="product__info">
                            <h1>Produkt</h1>
                            <p>popis</p>
                        </div>
                        <div class="product__price">

                            <h2>cena</h2>
                            <button class="buy">Přidat do košíku</button>
                        </div>
                    </div>
                </div>
                <div class="reviews">
                    <h2>Recenze</h2>
                    <div class="reviews__element">...</div>
                </div>
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