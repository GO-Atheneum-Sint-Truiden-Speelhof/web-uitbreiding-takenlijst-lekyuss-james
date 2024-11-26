<div class="jumbotron">
	<h1 class="display-4">Jouw gewijzigde gegevens</h1>
</div>
<div class="row">
    <div class="col-md-12 invoer">
        <?php
            include("scripts/function.php");
            updateRow($id); 
            echo '<p>Naam Maker: '.$_POST["UmakerN"].'</p>';
            echo '<p>Naam Taak: '.$_POST["UtaakN"].'</p>';
            echo '<p>Beschrijving Taak: '.$_POST["Ubeschrijving"].'</p>';
            echo '<p>Status Taak: '.$_POST["Ustatus"].'</p>'; 
            echo '<p>Deadline Taak: '.$_POST["Udeadline"].'</p>';
        ?>
    </div>
</div>