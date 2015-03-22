<!-- Jumbotron -->
<div class="jumbotron">
	<div class="container">
		<h1><?php echo $database_item['title'] ?></h1>
		<p><?php echo $database_item['description'] ?></p>
        <p><a class="btn btn-primary btn-lg" href="/index.php/users/view/<?php echo $database_item['userid']; ?>" role="button">Contact seller</a></p>
		<p><a class="btn btn-primary btn-lg" href="/index.php" role="button">Back to Campusbox</a></p>
	</div>
</div>