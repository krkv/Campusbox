<div class="container menu-section">

    <h1 class="text-center">
        <?php if ($this->session->userdata('logged_in')): ?>

            <a class="btn btn-success btn-lg" href="<?php echo site_url('item/add'); ?>" role="button" title="Add item">
                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                Add item
            </a>

        <?php else: ?>

            <a class="btn btn-warning btn-lg" href="<?php echo site_url('item/add'); ?>" role="button" title="Add item">
                <span class="glyphicon glyphicon-lock" aria-hidden="true"></span>
                Add item
            </a>

        <?php endif; ?>        
    </h1>

</div>