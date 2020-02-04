<?php
$art1 = ["Tour de Rovaniemi", "700", "img/tour_rovaniemi.jpg"];
$art2 = ["Tour de Levi", "1000", "img/levi.jpg"];
$art3 = ["Tour de Luosto", "1200", "img/luosto.jpg"];
$cat = [$art1, $art2, $art3];
$imageHero = "img/header_laponie.jpg";
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
    <img src="<?php echo $imageHero ?>" alt="photo header"/>
    <h1>Lapland Safari</h1>
</header>
<form action="panier.php" method="post">
<?php foreach ($cat as $article) { ?>
    <div class="cadre article">
        <h2 class="nom"> Venez profitez du superbe <span><?php echo $article[0]; ?></span></h2>
        <input type="checkbox" name="value_1" value="Vous souhaitez réserver cette offre?" <?php if ( isset( $_POST[
            'value_1'])) echo  'checked="checked"'; ?>>Vous souhaitez réserver cette offre?<br />
        <img src="<?php echo $article[2]; ?>" alt="Photo du tour">
        <p class="prix"> Pour la maudique somme de <span><?php echo $article[1]; ?></span> euros</p>
    </div>
<?php }; ?>
<input type="submit" name="envoie" value="Envoyer">
</form>
</html>
