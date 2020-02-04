<?php
$cats = [ //TABLEAU DANS TABLEAU
    ["Tour de Rovaniemi", "700", "img/tour_rovaniemi.jpg"],
    ["Tour de Levi", "1000", "img/levi.jpg"],
    ["Tour de Luosto", "1200", "img/luosto.jpg"]
];
$i = 0;
function afficheArticle($cats)
{
    $i = 0;
    foreach ($cats as $cat) {
        echo('
        <div class="cadre article">
            <h2 class="nom"> Venez profitez du superbe <span>' . $cat[0] . '</span> </h2>
            <p class="prix"> Pour la modique somme de <span>' . $cat[1] . '</span> euros </p>
            <img src="' . $cat[2] . '"/>
            <p>
            <input type="checkbox" name="articles[]" value=" ' . $i . ' " >
            <input type="number" name="quantite[]">  
            </p>          
        </div>
        ');
        $i++;
    }
}
function totalPanier(){


    return $somme;
}

// Fonction qui affiche le nom/prix et image de chaque formule
function afficheArticle1()
{
    $name = "Tour de Rovaniemi";
    $price = "700";
    $image = "img/tour_rovaniemi.jpg";
    return $name . " " . $price . " " . $image;
}

function afficheArticle2()
{
    $name = "Tour de Levi";
    $price = "1000";
    $image = "img/levi.jpg";
    return $name . " " . $price . " " . $image;
}

function afficheArticle3()
{
    $name = "Tour de Luosto";
    $price = "1200";
    $image = "img/luosto.jpg";
    return $name . " " . $price . " " . $image;
}


