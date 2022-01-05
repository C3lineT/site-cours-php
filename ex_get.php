<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div style ="border-color: black">
        <a href="ex_get.php?menu=Accueil"> Accueil</a>
        <a href="ex_get.php?menu=Contact"> Contact</a>
        <a href="ex_get.php?menu=Information"> Information</a>

    </div>
</body>

    <?php
        $menu = $_GET['menu'];
            switch($menu){
                case $menu ==='Accueil':
                    echo 'Bienvenue';
                    break;
                case $menu === 'Contact':
                    echo 'Vous pouvez nous contacter toute l année';
                    break;
                case $menu === 'Information':
                    echo 'Voici les information';
                    break;

            }
    ?>
</html>