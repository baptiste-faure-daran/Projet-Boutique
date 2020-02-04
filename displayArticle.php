<?php
$imageHero="img/header_laponie.jpg";
?>
<html>
<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="css/style.css"/>
    <title>Mon Super questionnaire</title>
</head>
<header class="hero">
    <img src="<?php echo $imageHero ?>" alt="photo header"/>
    <h1>Lapland Safari</h1>
</header>
<div class="cadre article">
    <h2 class="nom"> Vous souhaitez découvrir <?php echo $_POST['Destination']; ?></h2>
    <img src="img/img_temp/<?php echo basename($_FILES['Image']['name']); ?>" // PROGRAMMATION AVEC VARIABLE
         alt="Photo de <?php $_POST['Destination'] ?>">
    <p class="prix"> Pour la modique somme de <?php echo $_POST['Prix'] ?> euros</p>
</div>
</html>

