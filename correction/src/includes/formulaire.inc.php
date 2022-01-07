<h1> Mon super formulaire </h1>
<?php

    //$dataBase->query($sql);

    //debug($dataBase->query($sql));

    /*foreach($dataBase->query($sql) as $key => $value){
        echo $value["title_experience"];
        echo '</br>';
        echo $value["long_text_experience"];
        echo '</br>';
    }*/

   /* $sql = "INSERT INTO `experiences` 
    (`idexperience`, `long_text_experience`, `title_experience`, `date`) 
    VALUES (NULL, 'Il faut travailler et reviser PHP', 'methode PHP', '2022-01-07 ')";

    $dataBase->exec($sql);*/

  //   debug($_POST);
    
if(isset($_POST) && !empty($_POST)){
    echo 'Conditions valides';
    echo $_POST['description'];
    
    $sql = "INSERT INTO `experiences` 
    (`idexperience`, `long_text_experience`, `title_experience`, `date`) 
    VALUES (NULL,'".  $_POST['description'] ."' , '".$_POST['titre']."', '". $_POST['date']."')";

    $dataBase->exec($sql);
}else{
    echo   
'<form id="formulaire" class="form spacer-container" action="#" method="POST">
    <div>
        <label for="date">Date :</label></br>
        <input type="date" name="date" id="date" class="form-control"></br>
        <label for="titre">Titre :</label></br>
        <input type="text" name="titre" id="titre" class="form-control"></br>
        <label for="description">Description :</label></br>
        <textarea name="description" id="description" class="form-control"></textarea>
        <input type="submit" value="envoyer" />
    </div>
</form>';
};


/*foreach (debug(getAll($dataBase, 'experiences')) as $value){
    debug($value);
}*/

include './src/includes/experiences.inc.php' ;


?>


