<?php
if (!session_id()) {
	session_start();
}

require_once __DIR__ . './core/database/edit-imgProfilDB.php';
require_once __DIR__ . './core/database/edit-profilDB.php';
include_once __DIR__ . './public/common/head.php';

?>

<title><?= $title  = 'Page de connexion'; ?></title>

<?php include_once __DIR__ . './public/common/header.php'; ?>

<body>
	<div>
		<h1>Modifier votre profil</h1>
	</div>

	<section class="box-profil">
		<form action="./edit-profil.php" method="POST" enctype="multipart/form-data" id="profil-image">
			<img src="./public/images/uploads/<?= $_FILES['imageToUpload']['name'] ?? ''; ?>" id="img-profil">
			<p id="nameImage"><?= $_FILES['imageToUpload']['name'] ?? ''; ?></p>
			<p class="errorsMsg" style="text-align:center"><?= $status['status'] ?? ''; ?></p>
			<input type="file" name="imageToUpload">
			<input type="submit" name="submit" value="Upload">
		</form>

		<div class="box-editProfil">
			<form action="<?= htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
				<div>
					<label for="pseudo">Pseudo : </label>
					<input type="text" name="pseudo" id="pseudo" value="" disabled placeholder="Pseudo...">
				</div>
				<div>
					<label for="password">Password :</label>
					<input type="text" name="password" id="password" value="" disabled placeholder="Mot de passe...">
				</div>
				<div>
					<label for="email">Email :</label>
					<input type="text" name="email" id="email" value="" disabled placeholder="Email...">
				</div>
				<div>
					<label for="card">Numéro CB :</label>
					<input type="text" name="card" id="card" value="" disabled placeholder="VISA...">
				</div>
				<div>
					<input type="submit" value="Modifier">
				</div>
			</form>
		</div>
	</section>
</body>