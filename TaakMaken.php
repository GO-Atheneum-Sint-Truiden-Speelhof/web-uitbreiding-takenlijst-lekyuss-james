<!doctype html>
<html lang=nl>
    
<?php include('includes/head.php') ?>

<body>
	<div class="container">
		<?php 
			include('includes/menu.php');
			include("includes/".$_GET["page"].".php");
			include('includes/footer.php');
		?>
	</div>
</body>
</html>