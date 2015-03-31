<div class="jumbotron">

    <div class="container">

        <h1>
            <?php echo $selected_user->name; ?>
        </h1>

        <p>
            Uploaded <?php echo $item_count; ?> items.
        </p>

        <p>

            <?php
            echo safe_mailto($selected_user->email, 'Send e-mail', array('class' => 'btn btn-lg btn-info',
                'role' => 'button',
                'title' => 'Send e-mail to '));
            ?>

        </p>

        <p>

            <a class="btn btn-default btn-sm" href="<?php echo site_url('/'); ?>" role="button" title="Campusbox home">
                <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
                Campusbox home
            </a>

        </p>

    </div>

</div>