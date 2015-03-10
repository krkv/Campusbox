<div class="container">

	<!-- Items -->
	<div class="row">

        <div class="col-md-12">

            <?php echo form_open('items/add') ?>

            <form class="form-horizontal">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="...">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" rows="3" id="description" name="description"></textarea>
                </div>
                <button type="submit" name="submit" class="btn btn-default">Add item</button>
            </form>

            <?php echo validation_errors(); ?>

        </div>

	</div>

</div> <!-- /container -->