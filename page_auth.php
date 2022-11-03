<?php 

try {
$db = new PDO ('mysql:host=localhost;dbname=users;charset=utf8', 'root', 'root');

}

catch (Exception $e){
    echo 'Erreur : '. $e->getMessage;
}

$req = 'SELECT * FROM users';
$userStatement = $db->prepare($req);

$userStatement->execute();
$userListe = $userStatement->fetchAll();

$tokenConnexion =false;

foreach ($userListe as $value){

    if ($_POST['userid'] == $value['logs'] && $_POST['password'] == $value['mdp'] )   {
        $tokenConnexion= true; 
        $loggedUser = $_POST['userid'];
    }

}

?>
<!-- //controle des champs vides -->

<?php if (!$tokenConnexion) {
    echo '<h1> ERREUR SUR LE LOGIN </h1>';
}
    ?>

<?php if ($tokenConnexion) :  ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>Document</title>
    </head>
    <body>

    <header>
            <nav class="navbar">
                <img src="Logo.png" class="LOGO"> </a>
                    <div class="navlink">

                        <ul>
                            <li><a href="#" class="">Accueil</a></li>
                            <li><a href="#sect3" class="">Compétences</a></li>
                            <li><a href="#sect4" class="">Parcours</a></li>
                            <li><a href="#" class="">Projets</a></li>
                            <li><a href="#" class="">Contact </a></li>
                        </ul>
                        
                    </div>

            
            </nav>
        </header>

    <div class="site">
    <h1> Bienvenue sur mon site <?php echo $loggedUser ?> </h1>


    <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum eius vitae libero alias rerum tempore ratione itaque fugit beatae labore laborum aliquam asperiores, officiis fuga corporis sit voluptatum praesentium! Tempora.
    Dolore ab aperiam nostrum veritatis? Ex, minus debitis rerum expedita quas, harum repudiandae totam voluptatum architecto nisi facere qui aliquam earum veniam. Soluta eum earum sed, quibusdam consequatur aliquid culpa?
    Eius eaque aliquid cumque necessitatibus sit architecto dolores eligendi deserunt quis doloremque consectetur fuga repellat quisquam placeat hic quo deleniti, voluptatem nesciunt fugit illum ipsum commodi ducimus repudiandae mollitia. Nesciunt?
    Voluptatem, quas illo. Saepe, inventore obcaecati quis et explicabo consectetur adipisci optio cum aut iusto tenetur distinctio? Corrupti, assumenda maiores accusamus soluta similique eveniet, sequi, dolorem eligendi beatae illum deleniti.
    Harum ducimus pariatur, illum incidunt magnam inventore rerum odio fuga, sunt esse, possimus quasi velit. Molestias veritatis placeat quia blanditiis sapiente, inventore delectus animi impedit repellendus, vel cum fugit exercitationem.
    Dignissimos, soluta pariatur eius, consequatur impedit molestias corporis ipsa ex repellat ab nesciunt recusandae nostrum laudantium voluptatibus natus enim dolorum eveniet, architecto eum. Culpa voluptas totam alias placeat deserunt quae.
    Officia libero fugit illo. Aperiam hic perferendis nemo architecto est pariatur deleniti in praesentium tempore ipsam incidunt corrupti distinctio, iure minus, dignissimos odit? Adipisci praesentium quam vel velit magnam vero.
    Mollitia non vel nisi quod, nesciunt ipsa totam veritatis asperiores ipsam voluptas consequuntur et? Omnis eos cum ratione at ipsam esse, quos nemo ullam impedit aperiam alias corporis iure magnam. </p>
    </div>


    </body>
    </html>

<?php endif; ?>

