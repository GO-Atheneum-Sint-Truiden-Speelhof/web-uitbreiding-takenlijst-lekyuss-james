<?php
	include("scripts/function.php");
	// cookie inlezen en datum weergeven
	$c_naam = 'cco_cookie';
	if (isset($_COOKIE[$c_naam])) {
		echo '<div class="row"><div class="col tegel"><p>Je hebt deze website het laatst bezocht op '.$_COOKIE[$c_naam].'.</p></div></div>';
	} 
	else {
		echo '<div class="row"><div class="col tegel"><p>Je hebt deze website de laatste drie maanden niet bezocht.</p></div></div>';
}
if(isset($_GET["actie"])&& !strcmp($_GET["actie"],"delete")){
	deleteRow($_GET["id"]);
}

?>
<div class="container">
	<div class="jumbotron">
		<h1 class="display-4">Takenlijst</h1>
	</div>
		<div class="container">
    		<div class="col-md-12">
				<table class="table table-bordered table-dark table-striped table-sm text-center">
					<thead>
						<tr>
							<td>Maker Taak</td>
							<td>Naam Taak</td>
							<td>Beschrijving Taak</td>
							<td>Status Taak</td>
							<td>Deadline Taak</td>
							<td>Taak Aanpassen</td>
							<td>Taak Verwijderen</td>
						</tr>
					</thead>
					<tbody>
						<?php
							printDB();
						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
<?php
	// cookie plaatsen met een datum
	$c_naam = 'cco_cookie';
	$c_waarde = date("j/m/Y").' om '.date("G:i");
	$c_verloopt = time() + 60 * 60 * 24 * 90;
	setcookie($c_naam, $c_waarde, $c_verloopt);
?>