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
            <h1>Kytary</h1>
            <div class="type">
                <a class="type__element">Akustické</a>
                <a class="type__element">Elektrycké</a>
                <a class="type__element">Elektroakustické</a>
                <a class="type__element">Basové</a>
                <a class="type__element">Efekty na kytary</a>
            </div>
            <div class="shop">
                <div class="shop__element">.</div>
                <div class="shop__element">.</div>
                <div class="shop__element">.</div>
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