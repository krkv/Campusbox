<div class="container list-section">

    <div class="row text-center">

        <?php if ($item_list): ?>

            <?php $counter = 0; ?>

            <?php foreach ($item_list as $item): ?>

                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="thumbnail">
                        
                        <a href="<?php echo site_url(array('item', 'view', $item->id)); ?>">
                            <img src="<?php echo base_url('images/item.png') ?>">
                        </a>
                        
                        <div class="caption">

                            <h3><?php echo word_wrap($item->title, 20) ?></h3>

                            <p><?php echo $item->description ?></p>

                            <p>

                                <?php if ($this->session->userdata('user_id') == $item->userid): ?>

                                <div class="btn-group">
                                    <a href="<?php echo site_url(array('item', 'view', $item->id)); ?>" class="btn btn-default">
                                        Details
                                    </a>
                                    <a aria-expanded="false" href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="<?php echo site_url(array('item', 'edit', $item->id)); ?>">
                                                Edit
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo site_url(array('item', 'delete', $item->id)); ?>">
                                                Delete
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                            <?php else: ?>

                                <a class="btn btn-default" href="<?php echo site_url(array('item', 'view', $item->id)); ?>" role="button">
                                    Details
                                </a>

                            <?php endif; ?>

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

        <?php endif; ?>    

    </div>

</div>