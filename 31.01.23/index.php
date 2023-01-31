<?php
session_start();

if(empty($_SESSION['pseudo']) && empty($_SESSION['email'])){
    header('location: ./connexion.php');
    echo "Veuillez vous connecter";
}

require_once __DIR__ . './core/database/parameters/database.php';
include_once __DIR__ . './public/common/head.php';



?>




<title><?= $title  = 'Page de connexion'; ?></title>

<?php include_once __DIR__ . './public/common/header.php'; ?>

<body>
    <div>
        <h1>Page d'accueil</h1>
    </div>

    <!-- <div>
        <img src="./public/images/profil-0.jpg" alt="">
    </div> -->

</body>