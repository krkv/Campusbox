<div class="jumbotron">

    <div class="container">

        <h1 class="page-header">Add item</h1>

        <?php echo form_open('item/add') ?>

        <div class="form-group col-md-8 col-md-offset-2">
            <label class="sr-only control-label" for="title">Title</label>
            <input class="form-control input-lg" type="text" id="title" name="title" placeholder="Item title"  value="<?php echo set_value('title'); ?>">
        </div>

        <div class="form-group col-md-8 col-md-offset-2">
            <label class="sr-only control-label" for="description">Description</label>
            <textarea class="form-control input-lg" rows="3" id="description" name="description" placeholder="Item description"  value="<?php echo set_value('description'); ?>"></textarea>
        </div>

        <div class="form-group col-md-6 col-md-offset-3">
            <?php echo validation_errors(); ?>
        </div>

        <div class="form-group col-md-4 col-md-offset-4">
            <button type="submit" name="submit" class="btn btn-lg btn-success btn-block">
                <span class="glyphicon glyphicon-check" aria-hidden="true"></span>
                Add item
            </button>
        </div>

        <?php echo form_close(); ?>  

    </div>

</div>

