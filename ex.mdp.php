<!DOCTYPE html>

<html lang="fr">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <title>Mon site en local</title>
  <meta name="description" content="Mon site en local">
  <meta name="author" content="Alexandre Delaistre">

  <meta property="og:title" content="Mon super site en local">
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://urldemonsite.com">
  <meta property="og:description" content="Ce site est mon premier, soyez indulgent !">
  <!--meta property="og:image" content="image.png"-->

  <link rel="icon" href="/favicon.ico">
  <link rel="icon" href="/favicon.svg" type="image/svg+xml">
  <link rel="apple-touch-icon" href="/apple-touch-icon.png">

  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <?php 
    
        include './src/devtool/debug.devtool.php';
        //http://localhost/PHP/SiteCeline-cours-php/ex.mdp.php?password=untruko
        if($_GET['password'] == 'untrukopif') {
            include './src/includes/accueil.inc.php';
        } else {
            include './src/includes/oups.inc.php';
          //  echo "Trop nul, tu ne connais pas le mot magique";
        }

    ?>
    <script src="js/scripts.js"></script> 
</body>
</html>
