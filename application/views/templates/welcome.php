<div class="jumbotron">

    <div class="container text-center">
        
        <!-- User is signed in -->
        <?php if ($this->session->userdata('user_name')): ?>

		    <h1>Welcome, <?php echo $this->session->userdata('user_name'); ?>!</h1>
            <p>Would you like to sell something today?</p>
            <p><a class="btn btn-primary btn-lg" href="<?php echo site_url('user/view').$this->session->userdata('user_id') ?>" role="button">My profile</a></p>
            <p><a class="btn btn-primary btn-lg" href="<?php echo site_url('item/new'); ?>" role="button">Add your item!</a></p>

        <!-- User is not signed in -->
        <?php else: ?>

            <h1>
                Welcome to Campusbox!
            </h1>

            <p>
                <strong>Buy</strong>, <strong>sell</strong>, <strong>share</strong> with other students! Do you want to get more from your campus?
            </p>

            <p>
                <a class="btn btn-success btn-lg" href="<?php echo site_url('signup'); ?>" role="button" title="Sign up">
                    <span class="glyphicon glyphicon-check" aria-hidden="true"></span>
                    Sign up
                </a>

                &nbsp; or &nbsp;

                <a class="btn btn-primary btn-lg" href="<?php echo site_url('login'); ?>" role="button"  title="Log in">
                    <span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>
                    Log in
                </a>

            </p>

        <?php endif; ?>
	
    </div>

</div>