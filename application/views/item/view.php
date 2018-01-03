<div class="jumbotron jumbotron-white">

    <div class="container">

        <h1>
            <?php echo $selected_item->title; ?>
        </h1>
        
        <?php if ($selected_item->image): ?>
        
        <p>
            <img src="<?php echo base_url('uploads/'.$selected_item->image) ?>" class="img-responsive img-item">
        </p>
        
        <?php endif; ?>

        <p>
            <?php echo $selected_item->description; ?>
        </p>

        <p>
            <?php if ($this->session->userdata('logged_in')): ?>

                <?php if ($this->session->userdata('user_id') == $selected_item->userid): ?>

                <div class="btn-group">
                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                        Options
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="<?php echo site_url(array('item', 'edit', $selected_item->id)); ?>">Edit item</a></li>
                        <li><a href="<?php echo site_url(array('item', 'delete', $selected_item->id)); ?>">Delete item</a></li>
                    </ul>
                </div>

            <?php else: ?>

                <a class="btn btn-success" href="<?php echo site_url('user/view/' . $selected_item->userid); ?>" role="button" title="Contact seller">
                    <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                    Contact seller
                </a>

            <?php endif; ?>

        <?php else: ?>

            <a class="btn btn-warning" href="<?php echo site_url('user/view/' . $selected_item->userid); ?>" role="button" title="Contact seller">
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