<?php 
    session_start();
    $history = [];

    if ( isset($_GET['restart']) ) :
        session_destroy();
        header("location:input-post.php");
        exit;
    endif;

    if( isset($_SESSION['history'] )) :
        $history = $_SESSION['history'];
    endif;
    
    if( isset($_POST['prenom']) AND $_POST['prenom'] != '') :
        $_SESSION['history'][] = $_POST['prenom'];
        $history = $_SESSION['history'];
        header("location:input-post.php");
        exit;
    endif;
?>
<!doctype html>
    <html lang="fr">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Inputs en php</title>
        </head>
        <body>
            <h1>Qui êtes-vous ?</h1>
            <form action="" method="post">
                <input type="text" name="nom" placeholder="votre nom">
                <input type="text" name="prenom" placeholder="votre prénom" required>
                <button>Envoyer</button>
            </form>
            <?php if( count($history) > 0) :?>
                <h2>Historique des passages</h2>
                <ul>
                    <?php foreach($history as $key => $value) :?>
                        <li data-id="<?php echo $key;?>"><?php echo $value;?></li>
                    <?php endforeach;?>
                </ul>
                <a href="input-post.php?restart">Vider l'historique</a>
            <?php endif;?>
        </body>
    </html>
    <?php 
    //phpinfo(32);
    echo '<hr>';
    print_r($history);
    ?>