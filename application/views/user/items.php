<div class="container">

    <h1 class="page-header text-center">Offers:</h1>

    <div class="row text-center">

        <?php foreach ($item_list as $item): ?>

            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <div class="thumbnail">
                    <div class="caption">
                        <h3><?php echo $item->title ?></h3>
                        <p><?php echo $item->description ?></p>
                        <p>
                            <a class="btn btn-primary" href="<?php echo site_url(array('item', 'view', $item->id)); ?>" role="button">
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