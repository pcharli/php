<?php 
$carnet = [
    [
        "nom" => "Pereira",
        "prenom" => "Latiffa",
        "email" => "atiffa.pereira@example.com",
        "vignette" => "https://randomuser.me/api/portraits/thumb/women/76.jpg",
        "photo" => "https://randomuser.me/api/portraits/women/76.jpg",
        "ddn" => "2015-11-04",
        "pays" => "Brazil"
    ],
    [
        "nom" => "Tütüncü",
        "prenom" => "Esat",
        "email" => "esat.tutuncu@example.com",
        "vignette" => "https://randomuser.me/api/portraits/thumb/men/41.jpg",
        "photo" => "https://randomuser.me/api/portraits/men/41.jpg",
        "ddn" => "2003-11-25",
        "pays" => "Turkey"
     ],
     [
         "nom" => "Hughes",
         "prenom" => "Suzy",
         "email" => "suzy.hughes@example.com",
         "vignette" => "https://randomuser.me/api/portraits/thumb/women/55.jpg",
         "photo" => "https://randomuser.me/api/portraits/women/55.jpg",
         "ddn" => "1969-06-06",
         "pays" => "Ireland"
      ],
      [
          "nom" => "Jones",
          "prenom" => "Marie",
          "email" => "marie.jones@example.com",
          "vignette" => "https://randomuser.me/api/portraits/thumb/women/56.jpg",
          "photo" => "https://randomuser.me/api/portraits/women/56.jpg",
          "ddn" => "989-02-16",
          "pays" => "Ireland"
       ]
]
?>
<!doctype html>
    <html lang="fr">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Carnet</title>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.3/css/bulma.min.css">
            <style>
                .qui {
                    margin-left: 1rem;
                    font-weight: bold;
                }
                dt {
                    font-weight: bold;
                }
            </style>
        </head>
        <body>
            <div class="container content">
                <header class="hero is-primary">
                    <div class="hero-body">
                        <h1>Mon carnet</h1>
                    </div>
                </header>
                <div class="columns">
                    <div class="column is-one-quarter">
                        <section class="section">
                            <ul class="panel list-group">
                                <?php foreach($carnet as $key => $value) : ?>   
                                <li data-id="<?php echo $key;?>" class="list-group-item panel-block"><a href="carnet.php?id=<?php echo $key;?>"><img src="<?php echo $value['vignette'];?>" alt="Vignette de <?php echo $value['prenom'];?>"><span class="qui"><?php echo $value['prenom'];?></span></a></li>
                                <?php endforeach;?>
                            </ul>
                        </section>
                    </div>
                    <div class="column is-half">
                    <?php if (isset($_GET['id']) ) :
                        $contact = $carnet[$_GET['id']];
                    ?>    
                    <section class="section">
                        <div class="card" data-id="<?php echo $_GET['id'];?>">
                            <div class="card-image">
                                <figure class="image is-3by2">
                                <img src="<?php echo $contact['photo'];?>" alt="Photo de <?php echo $contact['prenom'];?>">
                                </figure>
                            </div>
                            <div class="card-content">
                                <div class="media">
                                <div class="media-content">
                                    <p class="title is-4"><?php echo $contact['prenom']." ".$contact['nom'];?></p>
                                    <p class="subtitle is-6"><?php echo $contact['email'];?></p>
                                </div>
                                </div>

                                <div class="content">
                                <dl>
                                    <dt>Date de naissance</dt>
                                    <dd><time datetime="<?php echo $contact['ddn'];?>"><?php echo date("d/m/Y", $contact['ddn']);?></time></dd>
                                    <dt>Pays</dt>
                                    <dd><?php echo $contact['pays'];?></dd>
                                </dl>
                                <br>
                                
                                </div>
                            </div>
                            </div>
                        </section>
                        <?php endif;?>
                    </div>
                </div>
                <footer class="footer">
                    <p class="content has-text-centered">&copy; 2021 - P. Charlier</p>
                </footer>
            </div>
        </body>
    </html>


    <?php

$url = "https://randomuser.me/api/";
$essai = file_get_contents($url);
$personneApi = json_decode($essai);
echo '<pre>';
print_r($personneApi);
?>