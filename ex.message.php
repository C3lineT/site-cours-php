<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">

</head>
<body>


<?php

function debug($variableToDump)
{
  echo '<pre>';
  var_dump($variableToDump);
  echo '</pre>';
}

    


$liste_personne_message = [
    "Alexandre" => [
        'messages' => [
            [
                'date' => "Aujoud'hui", 
                'message' => 'Salut Alexandre, tu peux faire des cours de PHP plus simple ?'
            ],
            [
                'date' => "Demain", 
                'message' => 'Salut Alexandre, tu as pensé a prendre ton sac'
            ],
            [
                'date' => "Hier", 
                'message' => 'Quelle est ta couleur préf ?'
            ],
        ]
        ],
        "Celine" => [
            'messages' => [
                [
                    'date' => "Aujoud'hui", 
                    'message' => 'Salut Celine, tu peux faire des cours de PHP plus simple ?'
                ],
                [
                    'date' => "Demain", 
                    'message' => 'Salut Celine, tu as pensé a prendre ton sac'
                ],
                [
                    'date' => "Hier", 
                    'message' => 'Quelle est ta couleur préf ?'
                ],
            ]
            ],
];


    function direTousLesMessageDe($liste_personne_message,$name )
    {
        echo $name;
        foreach($liste_personne_message[$name]['messages'] as $key => $value){
            echo ' a reçu ce messages : ' . $value['message'] . " " . $value['date'] . '</br>';

        }

    }
    
    echo direTousLesMessageDe($liste_personne_message,'Celine') ;
    
?>
</div>

    </body>
</html>