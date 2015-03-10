<div class="container">

    <div class="page-header">
        <h1>Add new item</h1>
    </div>

    <?php echo form_open('items/add') ?>

    <div class="form-horizontal">

        <?php echo validation_errors('<div class="row"><div class="col-sm-offset-2 col-sm-10 alert alert-danger" role="alert"><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span> ', '</div></div>'); ?>
            
        <div class="form-group">
            <label class="col-sm-2 control-label" for="title">Item title</label>
            <div class="col-sm-10">
                <input class="form-control" type="text" class="form-control" id="title" name="title">
            </div>
        </div>
            
        <div class="form-group">
            <label class="col-sm-2 control-label" for="description">Description</label>
            <div class="col-sm-10">
                <textarea class="form-control" rows="3" id="description" name="description"></textarea>
            </div>
        </div>
            
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" name="submit" class="btn btn-default">Add item</button>
            </div>
        </div>

    </div>

    

</div> <!-- /container -->