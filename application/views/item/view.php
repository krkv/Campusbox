<div class="container">

    <div class="page-header">
		<h1><?php echo $selected_item->title ?></h1>
    </div>

    <blockquote>
		<p><?php echo $selected_item->description ?></p>
    </blockquote>

    <p>
        <a class="btn btn-warning" href="<?php echo site_url('user/'.$selected_item->userid); ?>" role="button">
            <span class="glyphicon glyphicon-lock" aria-hidden="true"></span>
            Contact seller
        </a>
    </p>

	<p>
        <a class="btn btn-default" href="<?php echo site_url('/'); ?>" role="button">
            <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
            Back to Campusbox
        </a>
    </p>

</div>
