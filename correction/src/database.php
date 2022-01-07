<?php
    $dataBase = new PDO('mysql:host=localhost;dbname=php_ddb', 'root', '');


    //CRUD /* (Create Read Update Delete)*/
function getAll($dataBase,$table):array
    {
    $sql ="SELECT * FROM `$table`";
    $result =[];
    foreach($dataBase->query($sql) as $key => $value){
        $result[] = $value;
     /* echo "<h1>" . $value["title_experience"] . "<h1>";
        echo '</br>';
        echo "<p>" .  $value["long_text_experience"] . "</p>" ;
        echo '</br>'; */
        }
    return $result;
    }