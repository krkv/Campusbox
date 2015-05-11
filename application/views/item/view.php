<div class="jumbotron jumbotron-white">

    <div class="container">

        <h1>
            <?php echo $selected_item->title; ?>
        </h1>
        
        <p>
            <img src="<?php echo base_url('images/item.png') ?>" class="img-responsive img-item">
        </p>
        
        <p>
            <?php echo $selected_item->description; ?>
        </p>

        <p>
            <?php if ($this->session->userdata('logged_in')): ?>
            
                <?php if ($this->session->userdata('user_id') == $selected_item->userid): ?>
            
                <a class="btn btn-danger" href="<?php echo site_url('item/delete/'.$selected_item->id); ?>" role="button" title="Delete item">
                    <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                    Delete
                </a>
            
                <?php else: ?>
            
                <a class="btn btn-success" href="<?php echo site_url('user/view/'.$selected_item->userid); ?>" role="button" title="Contact seller">
                    <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                    Contact seller
                </a>
            
                <?php endif; ?>
            
            <?php else: ?>
            
            <a class="btn btn-warning" href="<?php echo site_url('user/view/'.$selected_item->userid); ?>" role="button" title="Contact seller">
                <span class="glyphicon glyphicon-lock" aria-hidden="true"></span>
                Contact seller
            </a>
            
            <?php endif; ?>

        </p>
        
        <p>
            <a class="btn btn-default" href="<?php echo site_url('/'); ?>" role="button" title="Campusbox home">
                <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
                Campusbox
            </a>
        </p>

    </div>

</div>