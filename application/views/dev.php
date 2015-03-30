<div class="jumbotron jumbotron-alt">

    <div class="container">

        <h1>
            <i class="fa fa-cog fa-spin"></i>
        </h1>

        <h3>
            Campusbox is under development.
        </h3>
        
        <p>
            Thank you for your interest!
            Leave us your e-mail and we will let you know when Campusbox is ready to rock.
        </p>

        <?php echo form_open('welcome/subscribe'); ?>

        <div class="form-group <?php if (form_error('email')) { echo 'has-error'; } ?> col-md-4 col-md-offset-2">
            <label class="sr-only control-label" for="email">Password</label>
            <input class="form-control" type="email" id="email" name="email" placeholder="you@example.com" value="<?php echo set_value('email'); ?>">
        </div>

        <div class="form-group col-md-4">
            <button type="submit" name="submit" class="btn btn-default btn-block">
                <span class="glyphicon glyphicon-send" aria-hidden="true"></span>
                Let me know
            </button>
        </div>

        <?php echo form_close(); ?>

    </div>

</div>