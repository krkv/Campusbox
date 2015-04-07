<div class="jumbotron">

    <div class="container">

        <h2 class="page-header text-center">All items</h2>

        <table class="table table-hover">
        
            <thead>
                <tr>
                    <th>Item</th>
                    <th>User</th>
                </tr>
            </thead>

            <tbody>

                <?php foreach ($item_table as $item): ?>

                    <tr>
                        <td>
                            <a href="<?php echo site_url('item/view/'.$item->id) ?>">
                                <span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span>
                                <?php echo $item->title ?>
                            </a>
                        </td>
			            
                        <td>
                            <?php if ($this->session->userdata('logged_in')): ?>
                            
                            <a href="<?php echo site_url('user/view/'.$item->user_id) ?>">
                                <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                                <?php echo $item->name ?>
                            </a>
                            
                            <?php else: ?>
                            
                            <a href="<?php echo site_url('login') ?>">
                                <span class="glyphicon glyphicon-lock" aria-hidden="true"></span>
                                Log in to contact seller
                            </a>
                            
                            <?php endif; ?>
                        </td>
		            </tr>

                <?php endforeach ?>
        
            </tbody>

        </table>    

    </div>

</div>