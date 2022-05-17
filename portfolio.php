<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="fonts/Gilroy/fonts.css">
    <title>Portfolio</title>
</head>

<body>

    <?php require "elements/header.php" ?>

    <div class="portfolio container">
        <h1 class="lng-portfoliolnh1">Портфолио</h1></br>
        <div class="portfolio__proofs"> 
            <p><img src="img/portfolio_1.png" alt=""></br><a class="lng-portfolio1" target="_blank" href="https://lilramzay13.github.io/resume/">Еще одно резюме, но на Bootstrap'e</a></p>
            <p><img src="img/portfolio_2.png" alt=""></br><a class="lng-portfolio2" target="_blank" href="https://github.com/LilRamzay13/php-practice">Небольшая реализация верстки с использованием php</a></p>
            <p><img src="img/portfolio_3.png" alt=""></br><a class="lng-portfolio3" target="_blank" href="https://lilramzay13.github.io/konstruct/">Верстка по макету из интернета</a></p>
            <p><img src="img/portfolio_4.png" alt=""></br><a class="lng-portfolio4" target="_blank" href="https://github.com/LilRamzay13/todo">Наипростейшая реализация todo-приложения на Vue(для практики)</a></p>
            <p><img src="img/portfolio_5.png" alt=""></br><a class="lng-portfolio5" target="_blank" href="https://lilramzay13.github.io/freshmeat/">Тестовое задание в виде одной свертсанной странички</a></p>
            <p><img src="img/portfolio_6.png" alt=""></br><a class="lng-portfolio6" target="_blank" href="https://lilramzay13.github.io/test/">Сверстанные "картинки" + форма авторизации. Одно из первых тестовых заданий</a></p>
        </div>
    </div>

    <?php require "elements/footer.php" ?>

    <script src="js/lang.js"></script>
    <script src="js/app.js"></script>

</body>

</html>