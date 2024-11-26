<div class="jumbotron">
	<h1 class="display-4">Update hier je taak!</h1>
</div>
<form method="post" action="begin.php?page=wijzig">
	<div class="row">
		<div class="col tegel">
			<div class="col-md-6">
				<div class="form-group row">
					<div class="col">
						<label for="UmakerN">Wijzig Naam Maker:</label><br>
						<p><input type="text" id="UmakerN" class="form-control"name="UmakerN"></p>
					</div>
				</div>
				
				<div class="form-group row">
					<div class="col">
						<label for="UtaakN">Wijzig Naam Taak:</label><br>
						<p><input type="text" id="UtaakN" class="form-control" name="UtaakN"></p>
					</div>
				</div>
				<div class="form-group row">
					<div class="col">
						<label for="Ubeschrijving">Wijzig Beschrijving Taak:</label><br>
						<p><textarea id="Ubeschrijving" class="form-control" name="Ubeschrijving" rows="5"></textarea></p>
					</div>
				</div>
				<div class="form-group row">
					<div class="col">
						<label for="Ustatus">Wijzig Status Taak:</label><br>
						<p><input type="text" id="Ustatus" class="form-control" name="Ustatus"></p>
					</div>
				</div>
				<div class="form-group row">
					<div class="col">
						<label for="Udeadline">Wijzig Datum Deadline:</label><br>
						<p><input type="date" id="Udeadline" name="Udeadline"></p>
					</div>
				</div>
				<div class="form-group row">
					<div class="col">
						<input type="submit" id="toevoegen-btn" value="Wijzig Taak">
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php 
		include("scripts/function.php");
		updateRow(); 
	?>
</form>