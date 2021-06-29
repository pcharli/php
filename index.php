<?php 
$panier = array(
    "pommes",
    "poires",
    "bananes"
);

$personne = [
    "nom" => "Charlier",
    "prenom" => "Pierre",
    "ddn" => "1969-04-25",
    "inscription" => true,
    "niveau" => 2,
    "enfants" => ["Arthur","Chloé","Charlotte"],
    "hobbies" => array(
        "tennis",
        "moto",
        "bière"
    )
];
?>
<!doctype html>
    <html lang="fr">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>First php</title>
            <style>
                h1 {
                    color: <?php echo $color;?>
                }
            </style>
        </head>
        <body>
            <h1>Bonjour <?php echo $firstname;?> <?php echo $name;?></h1>
            <p>Vous avez dans votre panier :</p>
            <ul>
                <?php for ($i = 0; $i < count($panier); $i++) : ?>
                    <li data-id="<?php echo $i;?>"><?php echo $panier[$i];?></li>
                <?php endfor; ?>
            </ul>

            <ul>
                <?php foreach ($panier as $index => $value) : ?>
                    <?php if(0 < 2) :?>
                    <li data-id="<?php echo $index;?>"><?php echo $value;?></li>
                    <?php endif; ?>
                <?php endforeach; ?>
            </ul>

            <hr>

            <h2><?php echo $personne["prenom"]." ".$prenom["nom"];?></h2>
            <p>Vos hobbies</p>
            <ul>
                <?php foreach($personne["hobbies"] as $key => $value):?>
                    <li data-idhobbies="<?php echo $key;?>"><?php echo $value;?></li>
                <?php endforeach;?>
            </ul>
   
            <script>
                //alert('<?php echo $name;?>')
            </script>
        </body>
    </html>
    <?php 
   echo '<pre>';
    print_r($panier);
    /*var_dump($panier);*/
   echo '</pre>';
   //phpinfo(32);
    ?>