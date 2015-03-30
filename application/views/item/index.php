<div class="container">

    <h1 class="page-header text-center">On sale today:</h1>

	<div class="row text-center">

        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
            <div class="thumbnail">
                <div class="caption">
			        <h3>Your item</h3>
                    <p>Click here to upload a new item</p>
			        <p>
                        <?php if ($this->session->userdata('logged_in')): ?>

                            <a class="btn btn-success" href="<?php echo site_url('item/add'); ?>" role="button">
                                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                                Upload
                            </a>

                        <?php else: ?>

                            <a class="btn btn-warning" href="<?php echo site_url('login'); ?>" role="button">
                                <span class="glyphicon glyphicon-lock" aria-hidden="true"></span>
                                Upload
                            </a>

                        <?php endif; ?>
                    </p>
                </div>
			</div>
		</div>

        <?php foreach ($item_list as $item): ?>

                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="thumbnail">
                            <div class="caption">
			                    <h3><?php echo $item->title ?></h3>
                                <p><?php echo $item->description ?></p>
			                    <p>
                                    <a class="btn btn-primary" href="<?php echo site_url(array('item','view',$item->id)); ?>" role="button">
                                        <span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span>
                                        Details
                                    </a>
                                </p>
                            </div>
			            </div>
		            </div>

        <?php endforeach ?>

	</div>

</div>