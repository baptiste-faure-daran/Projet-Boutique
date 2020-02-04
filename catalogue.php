<?php
$name=["Tour de Rovaniemi","Tour de Levi","Tour de Luosto"];
$price=[700, 1000, 1200];
$image=["img/tour_rovaniemi.jpg","img/levi.jpg","img/luosto.jpg"];
$imageHero="img/header_laponie.jpg";
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
    <img src="<?php echo $imageHero?>" alt="photo header" />
    <h1>Lapland Safari</h1>
</header>
<?php for ($i=0; $i<count($name);$i++){?>
    <div class="cadre article">
        <h2 class="nom"> Venez profitez du superbe <span><?php echo $name[$i]?></span></h2>
        <img src="<?php echo $image[$i]?>" alt="Photo du tour">
        <p class="prix"> Pour la maudique somme de  <span><?php echo $price[$i]?></span>  euros</p>
    </div>
<?php }; ?>
</body>
<footer>

</footer>
</html>