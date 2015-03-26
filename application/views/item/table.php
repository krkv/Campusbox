<div class="jumbotron">

    <div class="container">

        <h2 class="page-header text-center">All items</h2>

        <table class="table table-hover">
        
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Offered by</th>
                </tr>
            </thead>

            <tbody>

                <?php foreach ($item_table as $item): ?>

                    <tr>
                        <td>
                            <a href="<?php echo site_url('item/'.$item->id) ?>">
                                <?php echo $item->title ?>
                            </a>
                        </td>
			            
                        <td>
                            <a href="<?php echo site_url('user/'.$item->user_id) ?>">
                                <?php echo $item->name ?>
                            </a>
                        </td>
		            </tr>

                <?php endforeach ?>
        
            </tbody>

        </table>    

    </div>

</div>