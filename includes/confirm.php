<div class="jumbotron">
	<h1 class="display-4">Jouw gegevens</h1>
</div>
<div class="row">
    <div class="col-md-12 invoer">
        <?php
            include("scripts/function.php");
            saveToDB();
            echo '<p>Naam Maker: '.$_POST["makerN"].'</p>';
            echo '<p>Naam Taak: '.$_POST["taakN"].'</p>';
            echo '<p>Beschrijving Taak: '.$_POST["beschrijving"].'</p>';
            echo '<p>Status Taak: '.$_POST["status"].'</p>'; 
            echo '<p>Deadline Taak: '.$_POST["deadline"].'</p>';
        ?>
    </div>
</div>