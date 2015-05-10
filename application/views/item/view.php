<div class="jumbotron">

    <div class="container">

        <h1>
            <?php echo $selected_item->title; ?>
        </h1>

        <p>
            <?php echo $selected_item->description; ?>
        </p>

        <p>
            <?php if ($this->session->userdata('logged_in')): ?>
            
                <?php if ($this->session->userdata('user_id') == $selected_item->userid): ?>
            
                <a class="btn btn-danger btn-lg" href="<?php echo site_url('item/delete/'.$selected_item->id); ?>" role="button" title="Delete item">
                    <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                    Delete
                </a>
            
                <?php else: ?>
            
                <a class="btn btn-success btn-lg" href="<?php echo site_url('user/view/'.$selected_item->userid); ?>" role="button" title="Contact seller">
                    <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                    Contact seller
                </a>
            
                <?php endif; ?>
            
            <?php else: ?>
            
            <a class="btn btn-warning btn-lg" href="<?php echo site_url('user/view/'.$selected_item->userid); ?>" role="button" title="Contact seller">
                <span class="glyphicon glyphicon-lock" aria-hidden="true"></span>
                Contact seller
            </a>
            
            <?php endif; ?>

        </p>
        
        <p>
            <a class="btn btn-default btn-sm" href="<?php echo site_url('/'); ?>" role="button" title="Campusbox home">
                <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
                Campusbox home
            </a>
        </p>

    </div>

</div>