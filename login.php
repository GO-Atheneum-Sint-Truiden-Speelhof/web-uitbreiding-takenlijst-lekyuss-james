<<?php 
	if (session_status() == PHP_SESSION_NONE) {
		session_start();
	}
    include("scripts/function.php");

	// HIER CONTROLE DOE: Wil je het login formulier laten zien? Of de gegeven gebruiker laten inloggen?
	if(isset($_POST['username']) && !empty($_POST['username'])){
		login();
	} else {
?>

<div class="jumbotron">
	<h1 class="display-4">Log hier in!</h1>
</div>
<div class="row">
    <div class="col-md-6">
		<!-- Je verwijst hier naar een javascript function, niet naar een php-actie.
		 	 Je vorige code was beter 
		<form method="post" onsubmit="login()">-->
		<form method="POST" action="begin.php?page=index.php">
		    <div class="form-group row">
				<div class="col">
					<label for="username">Username:</label><br>
					<input type="text" id="username" name="username" required><br><br>
				</div>
			</div>
			<div class="form-group row">
				<div class="col">
					<label for="pwd">Passwoord:</label><br>
					<input type="password" id="pwd" name="pwd" required><br><br>
				</div>
			</div>
            <div class="form-group row">
				<div class="col">
					<button type="submit">Login</button>
				</div>
			</div>
		</form>
    </div>
</div>

<?php } ?>