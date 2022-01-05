<?php
    include './src/devtool/debug.devtool.php';
    debug($_GET['MDP']);
    //http://localhost/site-cours-php/mdp.php?MDP=LOULOU
    if($_GET['MDP'] === 'LOULOU'){
        echo "Bon mot de passe";
    } else {
        echo "mauvais mot de passe";
    }

?>