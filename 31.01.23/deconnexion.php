<?php
if (!session_id()) {
    session_start();
}

require_once __DIR__ . './core/database/parameters/database.php';
include_once __DIR__ . './public/common/head.php';




echo "<pre>";
var_dump($_SESSION);
echo "</pre>";

?>




<title><?= $title  = 'Page de connexion'; ?></title>

<?php include_once __DIR__ . './public/common/header.php'; ?>

<body>
    <h1>Page de deconnexion</h1>
</body>