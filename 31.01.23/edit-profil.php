<?php
require_once __DIR__ . './core/database/parameters/database.php';
include_once __DIR__ . './public/common/head.php';
?>




<title><?= $title  = 'Page de connexion'; ?></title>

<?php include_once __DIR__ . './public/common/header.php'; ?>

<body>
    <div>
        <h1>Modifier votre profil</h1>
    </div>

    <section class="box-profil">
        <img src="./public/images/profil-0.jpg" alt="" id="img-profil">

        <div>
            <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
                <label for=""></label>
                <input type="text" name="">
            </form>
        </div>

    </section>
</body>