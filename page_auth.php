<?php 

//controle des champs vides
if (empty($_POST['userid']) || empty($_POST['password'])) {
    echo 'Veuillez remplir tous les champs';
}

else {
    $id= $_POST['userid'];
    $mdp= $_POST['password'];

    if ($id == 'namakan' && $mdp == 'magassouba1' ) {
        echo 'Félicitation vous êtes connecté !';
    } else {
        echo'id incorrect';
    }
    
}


// Compte correspondant





// echo $user . ' : and :'. $mdp;
