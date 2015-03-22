<!-- Jumbotron -->
<div class="jumbotron">
	<div class="container">
        <?php if ($this->session->userdata('user_name')): ?>
		    <h1>Welcome back, <?php echo $this->session->userdata('user_name'); ?>!</h1>
            <p>Would you like to sell something today?</p>
            <p><a class="btn btn-primary btn-lg" href="/index.php/users/view/<?php echo $this->session->userdata('user_id')?>" role="button">My profile</a></p>
            <p><a class="btn btn-primary btn-lg" href="/index.php/items/add" role="button">Add your item!</a></p>
        <?php else: ?>
            <h1>Welcome to Campusbox!</h1>
            <p>You need to sign up to be able to add new items and see other profiles.</p>
            <p><a class="btn btn-primary btn-lg" href="/index.php/users/add" role="button">Sign up now!</a></p>
        <?php endif; ?>
	</div>
</div>

<div class="container">

	<!-- Items -->
	<div class="row text-center">

        <?php foreach ($database_items as $item): ?>

                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="thumbnail">
                            <div class="caption">
			                    <h2><?php echo $item['title'] ?></h2>
                                <p><?php echo $item['description'] ?></p>
			                    <p><a class="btn btn-default" href="/index.php/items/view/<?php echo $item['id'] ?>" role="button">Details</a> <a class="btn btn-default" href="/index.php/users/view/<?php echo $item['userid'] ?>" role="button">Seller</a></p>
                            </div>
			            </div>
		            </div>

        <?php endforeach ?>

	</div>

</div>