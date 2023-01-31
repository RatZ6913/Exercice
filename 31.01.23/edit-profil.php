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
		<input type="submit" name="" value="Upload">

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
			</form>
		</div>

	</section>
</body>