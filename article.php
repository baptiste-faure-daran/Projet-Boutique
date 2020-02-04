<?php
$name="Tour de Rovaniemi";
$price=400;
$image1="img/tour_rovaniemi.jpg";
$image2="img/header_laponie.jpg";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css"/>
    <title> Article </title>
    <meta name="article.php" content="CV en ligne">
</head>

<body>
    <header class="hero">
        <img src="<?php echo $image2?>" alt="photo header" />
        <h1>Lapland Safari</h1>

    </header>
    <div class="cadre article">
        <h2 class="nom"> Venez profitez du superbe <?php echo $name?></h2>
        <img src="<?php echo $image1?>" alt="Photo du tour">
        <p class="prix"> Pour la maudique somme de  <span><?php echo $price?></span>  euros</p>
    </div>

</body>
<footer>

</footer>
</html>