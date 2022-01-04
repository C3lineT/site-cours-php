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
      function ajouterDix($nombre) 
      {
        $nombre +=10;
        return $nombre .  "<br/>";
      }

      //echo ajouterDix(10);
      

      $a = 4 ;
      $b = 5;
      function somme($a,$b)
      {
        $somme2nb = $a + $b ;
        return $somme2nb .  "<br/>";
      }

      //echo somme(13,24);


      function direBonjourEleve($nom="Nicolas") 
      {
        $bonjourPhrase = "Bonjour " . $nom . ", ça va ? <br/>";
        return $bonjourPhrase;
       }

      //echo direBonjourEleve("Samuel") ;

      function direBonjour2($nom2) 
      {
        $bonjour2 = '<h1> Bonjour ' . $nom2 . ', ça va?</h1> <br/>';
        return $bonjour2;

      }

      //echo direBonjour2("Clémence");


      function debug($variableToDump)
      {
        echo '<pre>';
        var_dump($variableToDump);
        echo '</pre>';
      }

     // echo debug("Coucou");

      $liste = [1, 2, 4, 8, 9];
      debug ($liste);

      $liste_eleves =[
        'Alexandre',
        'Noe',
        'David',
        'Lila',
        'Rudy',
        'Mike',
        'celine',
        'Celine',
        'Laetitia',
        'Mahjoub',
        'Samia',      
      ];

      count($liste_eleves);

      for($i =0; $i < count($liste_eleves); $i++) {
        echo "Bonjour $liste_eleves[$i] ! <br/>";
      }

     /* function direBonjour3($liste_eleves,$balise){
        for($i =0; $i < count($liste_eleves); $i++) {
          echo "<$balise>Bonjour $liste_eleves[$i] !<$balise/> <br/>";
        }
      };

      direBonjour3( $liste_eleves, 'h1'); */

      function direBonjourAvecHtml($name, $balise){
        return "<$balise>Bonjour $name, ça va ?
        <$balise/> <br/>";
      }

      foreach ($liste_eleves as $key => $value) {
       echo direBonjourAvecHtml($value, 'h1');
      };

      function direBonjourANom($name, $balise)
      {
        return "<$balise> Bonjour $name , ça va ?<$balise/>";
      }

      function direBonjourATous($listeDePrenom, $balise)
      {
        foreach ($listeDePrenom as $key =>$value){
          echo direBonjourANom ($value, $balise);
        }
      }

      direBonjourATous($liste_eleves, 'h3');

      $liste_eleves_deux_dimensions = [
        'Alexandre' => [
            'message' => "Bonjour !",
        ],
        'Noe' => [
            'message' => "Salut !",
        ], 
        'David' => [
            'message' => "Ciao !",
        ],
        'Lila' => [
            'message' => "Hello !",
        ],
        'Rudy' => [
            'message' => "Welcome !",
        ],
        'Mike' => [
            'message' => "Hi !",
        ],
        'Celine' => [
            'message' => "Plop !",
        ],
        'Celine' => [
            'message' => "Hola !",
        ],
        'Laetitia' => [
            'message' => "Yo !",
        ],
        'Samia' => [
            'message' => "Hallo !",
        ],
        'Mahjoub' => [
            'message' => "Coucou !",
        ],
    ];

    foreach($liste_eleves_deux_dimensions as $key => $value) {
      echo $key . " dit " . $value['message'];
    }

    $tabAgeEleve = [
      'Juliette' => ['age' => 30],
      'Claire' => ['age' => 20],
      'Lucie' => ['age' => 38],
      'Julie' => ['age' => 19],
      'Marc' => ['age' => 34],
      'Claude' => ['age' => 27],
    ];

    foreach($tabAgeEleve as $key => $value) {
      echo $key . " a " . $value['age'] . ' ans   '; 
    }






    ?> 
    <script src="js/scripts.js"></script>
</body>
</html>