<div class="jumbotron">
	<h1 class="display-4">Voeg hier een taak toe!</h1>
</div>
<form method="post" action="begin.php?page=confirm">
	<div class="row">
		<div class="col tegel">
			<div class="form-group row">
				<div class="col">
					<label for="makerN">Naam Maker:</label><br>
					<p><input type="text" id="naam" class="form-control"name="naam"></p>
				</div>
			</div>
			
			<div class="form-group row">
				<div class="col">
					<label for="taakN">Naam Taak:</label><br>
					<p><input type="text" id="adres" class="form-control"name="adres"></p>
				</div>
			</div>
			<div class="form-group row">
				<div class="col">
					<label for="beschrijving">Beschrijving Taak:</label><br>
					<p><input type="text" id="beschrijving" class="form-control" name="beschrijving"></p>
				</div>
			</div>
			<div class="form-group row">
				<div class="col">
					<label for="geboortedatum">Datum Deadline:</label><br>
					<p><input type="date" id="geboortedatum" name="geboortedatum"></p>
				</div>
			</div>
		</div>
		<div class="col tegel">
			<div class="form-group row">
				<div class="col">
					<label for="fotoTitel">Titel van je foto:</label><br>
					<p><input type="text" id="fotoTitel" class="form-control" name="fotoTitel"></p>
				</div>
			</div>
			<div class="form-group row">
				<div class="col">
					<label for="camera">Camera:</label><br>
					<p><input type="text" id="camera" class="form-control" name="camera"></p>
				</div>
			</div>
			<div class="form-group row">
				<div class="col">
					<label for="lens">Lens:</label><br>
					<p><input type="text" id="lens" class="form-control" name="lens"></p>
				</div>
			</div>	
			<div class="form-group row">
				<div class="col">
					<label for="fotoBeschrijving">Beschrijf je foto:</label><br>
					<p><textarea id="fotoBeschrijving" class="form-control" name="fotoBeschrijving" rows="10" ></textarea></p>
				</div>
			</div>
			<div class="form-group row">
				<div class="col">
					<input type="submit" id="deelnemenKnop" value="deelnemen">
				</div>
			</div>
		</div>
	</div>
</form>