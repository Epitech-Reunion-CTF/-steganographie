<!DOCTYPE html>
<html>
<head>
	<title>Vérification de numéro</title>
</head>
<body>
	<h1>Vérification de numéro</h1>
	<form method="post">
		<label for="numero">Numéro :</label>
		<input type="text" id="numero" name="numero" required>
		<button type="submit">Vérifier</button>
	</form>
	<?php
        $verif = "85023724";
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$numero = $_POST['numero'];
			if ($verif === $numero) {
			    echo "<p>Le numéro est valide. Le flag est epictf{cestpasbiendecouterlesconversationsdesautres}</p>";
			} else {
			    echo "<p>Le numéro est invalide.</p>";
			}
		}
	?>
</body>
</html>