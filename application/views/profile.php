<div class="jumbotron">

    <div class="container">

        <h1>
            <?php echo $selected_user->name; ?>
        </h1>

        <p>
            Uploaded <?php echo $item_count; ?> items.
        </p>
        
        <?php if ($this->session->userdata('user_id') == $selected_user->id): ?>
        
        <p>
            
            <a class="btn btn-danger" href="<?php echo site_url('user/delete/'.$selected_user->id); ?>" role="button" title="Delete profile">
                <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                Delete profile
            </a>
           
        </p>

        <?php else: ?>
        
        <p>

            <?php
            echo safe_mailto($selected_user->email, 'Send e-mail', array('class' => 'btn btn-info',
                'role' => 'button',
                'title' => 'Send e-mail',
                'id' => 'send_mail_button'));
            ?>

            <?php endif; ?>
            
            <script>
                document.getElementById("send_mail_button").innerHTML = "<span class=\"glyphicon glyphicon-envelope\" aria-hidden=\"true\"></span> Send e-mail";
            </script>

        </p>

        <p>

            <a class="btn btn-default" href="<?php echo site_url('/'); ?>" role="button" title="Campusbox home">
                <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
                Campusbox
            </a>

        </p>

    </div>

</div>