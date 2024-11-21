<?php
	// cookie inlezen en datum weergeven
	$c_naam = 'cco_cookie';
	if (isset($_COOKIE[$c_naam])) {
		echo '<div class="row"><div class="col tegel"><p>Je hebt deze website het laatst bezocht op '.$_COOKIE[$c_naam].'.</p></div></div>';
	} 
	else {
		echo '<div class="row"><div class="col tegel"><p>Je hebt deze website de laatste drie maanden niet bezocht.</p></div></div>';
}

?>
<div class="jumbotron">
	<h1 class="display-4">Takenlijst</h1>
</div>
<?php
	// cookie plaatsen met een datum
	$c_naam = 'cco_cookie';
	$c_waarde = date("j/m/Y").' om '.date("G:i");
	$c_verloopt = time() + 60 * 60 * 24 * 90;
	setcookie($c_naam, $c_waarde, $c_verloopt);
?>