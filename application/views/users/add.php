<div class="container">

    <div class="page-header">
        <h1>Sign up</h1>
    </div>

    <?php echo form_open('users/add') ?>

        <div class="form-horizontal">

            <?php echo validation_errors('<div class="row"><div class="col-sm-offset-2 col-sm-10 alert alert-danger" role="alert"><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span> ', '</div></div>'); ?>
            
            <div class="form-group">
                <label class="col-sm-2 control-label" for="name">Name</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" id="name" name="name">
                </div>
            </div>
            
            <div class="form-group">
                <label class="col-sm-2 control-label" for="email">Email</label>
                <div class="col-sm-10">
                    <input class="form-control" type="email" id="email" name="email">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label" for="password">Password</label>
                <div class="col-sm-10">
                    <input class="form-control" type="password" id="password" name="password">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label" for="password">Confirm password</label>
                <div class="col-sm-10">
                    <input class="form-control" type="password" id="password2" name="password2">
                </div>
            </div>
            
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" name="submit" class="btn btn-default">Sign up</button>
                </div>
            </div>

        </div>

    </form>

</div> <!-- /container -->