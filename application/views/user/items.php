<div class="container white-section">

    <div class="row text-center">

        <?php $counter = 0; ?>

        <?php foreach ($item_list as $item): ?>

            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="thumbnail">
                    <div class="caption">
                        <h3><?php echo word_wrap($item->title, 20) ?></h3>
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

            <?php
                $counter++;
                if ($counter % 2 == 0) {
                    echo '<div class="clearfix visible-sm-block"></div>';
                }
                if ($counter % 3 == 0) {
                    echo '<div class="clearfix visible-md-block visible-lg-block"></div>';
                }
            ?>

        <?php endforeach ?>

    </div>

</div>