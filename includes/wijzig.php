<div class="jumbotron">
	<h1 class="display-4">Update hier je taak!</h1>
</div>
<?php
include("scripts/function.php");
$id = $_GET["id"];
$row = fetchRow($id);
if(isset($_POST['MakerNaam']) && !empty($_POST['MakerNaam'])){
	UpdateRow($row);
?>
<form method="post" action="begin.php?page=wijzig">
	<div class="row">
		<div class="col tegel">
			<div class="col-md-6">
				<div class="form-group row">
					<div class="col">
						<label for="UmakerN">Wijzig Naam Maker:</label><br>
						<p><input type="text" id="UmakerN" class="form-control"name="UmakerN" value="<?php echo $row["NaamMaker"]; ?>"></p>
					</div>
				</div>
				<div class="form-group row">
					<div class="col">
						<label for="UtaakN">Wijzig Naam Taak:</label><br>
						<p><input type="text" id="UtaakN" class="form-control" name="UtaakN" value="<?php echo $row["NaamTaak"]; ?>"></p>
					</div>
				</div>
				<div class="form-group row">
					<div class="col">
						<label for="Ubeschrijving">Wijzig Beschrijving Taak:</label><br>
						<p><textarea id="Ubeschrijving" class="form-control" name="Ubeschrijving" rows="5" value="<?php echo $row["Beschrijving"]; ?>"></textarea></p>
					</div>
				</div>
				<div class="form-group row">
					<div class="col">
						<label for="Ustatus">Wijzig Status Taak:</label><br>
						<p><input type="text" id="Ustatus" class="form-control" name="Ustatus" value="<?php echo $row["Status"]; ?>"></p>
					</div>
				</div>
				<div class="form-group row">
					<div class="col">
						<label for="Udeadline">Wijzig Datum Deadline:</label><br>
						<p><input type="date" id="Udeadline" name="Udeadline" value="<?php echo $row["Deadline"]; ?>"></p>
					</div>
				</div>
				<div class="form-group row">
					<div class="col">
						<input type="submit" id="toevoegen-btn" value="Wijzig Taak">
						<input type="hidden" value="ID">
					</div>
				</div>
			</div>
		</div>
	</div>
</form>
<?php
} else {
	echo "Fout";
}
?>