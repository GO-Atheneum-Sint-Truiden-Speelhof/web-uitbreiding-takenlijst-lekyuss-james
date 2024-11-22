<?php 
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
	<form method="POST" action="begin.php?page=login">
		<div class="row">
			<div class="col tegel">
				<div class="col-md-6">
					<div class="form-group row">
						<div class="col">
							<label for="username">Username:</label><br>
							<input class="form-control" type="text" id="username" name="username" required><br><br>
						</div>
					</div>
					<div class="form-group row">
						<div class="col">
							<label for="pwd">Passwoord:</label><br>
							<input class="form-control" type="password" id="pwd" name="pwd" required><br><br>
						</div>
					</div>
					<div class="form-group row">
						<div class="col">
							<button id="submit-btn" type="submit">Login</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</form>
<?php } ?>