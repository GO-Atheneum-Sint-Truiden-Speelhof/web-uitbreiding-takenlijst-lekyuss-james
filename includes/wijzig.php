<div class="jumbotron">
	<h1 class="display-4">Update hier je taak!</h1>
</div>
<form method="post" action="begin.php?page=confirm">
	<div class="row">
		<div class="col tegel">
			<div class="col-md-6">
				<div class="form-group row">
					<div class="col">
						<label for="makerN">Naam Maker:</label><br>
						<p><input type="text" id="makerN" class="form-control"name="makerN"></p>
					</div>
				</div>
				
				<div class="form-group row">
					<div class="col">
						<label for="taakN">Naam Taak:</label><br>
						<p><input type="text" id="taakN" class="form-control" name="taakN"></p>
					</div>
				</div>
				<div class="form-group row">
					<div class="col">
						<label for="beschrijving">Beschrijving Taak:</label><br>
						<p><textarea id="beschrijving" class="form-control" name="beschrijving" rows="5"></textarea></p>
					</div>
				</div>
				<div class="form-group row">
					<div class="col">
						<label for="status">Status Taak:</label><br>
						<p><input type="text" id="status" class="form-control" name="status"></p>
					</div>
				</div>
				<div class="form-group row">
					<div class="col">
						<label for="deadline">Datum Deadline:</label><br>
						<p><input type="date" id="deadline" name="deadline"></p>
					</div>
				</div>
				<div class="form-group row">
					<div class="col">
						<input type="submit" id="toevoegen-btn" value="Voeg Taak Toe">
					</div>
				</div>
			</div>
		</div>
	</div>
</form>