<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Campusbox</title>

        <!-- Bootstrap -->
        <link href="<?php echo base_url("css/bootstrap-paper.css") ?>" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <link href="<?php echo base_url("css/campusbox.css") ?>" rel="stylesheet">
        <link rel="icon" type="image/png" href="<?php echo base_url("images/favicon.ico") ?>">

    </head>

    <body>

        <nav class="navbar navbar-inverse navbar-fixed-top">		

            <div class="container">		

                <div class="navbar-header">

                    <a class="navbar-brand" href="<?php echo base_url(index_page()); ?>">Campusbox</a>

                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                </div>

                <div class="collapse navbar-collapse" id="navbar">

                    <?php echo form_open('item/search', array('class' => 'navbar-form navbar-left')) ?>

                    <div class="form-group">

                        <div class="input-group">

                            <label class="sr-only control-label" for="search">Search</label>
                            <input type="text" id="search" name="search" placeholder="Search" class="form-control">

                            <span class="input-group-btn">
                                <button class="btn btn-primary" type="submit">
                                    <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                                    Go
                                </button>
                            </span>                            

                        </div>

                    </div>

                    <?php echo form_close(); ?>

                    <ul class="nav navbar-nav navbar-right">
                    
                        <li>
                        <span id="hours">0</span>:<span id="minutes">0</span>:<span id="seconds">0</span>
                        </li>

                        <?php if ($this->session->userdata('user_id')): ?>

                            <li>
                                <a href="#" role="button">
                                    <span class="glyphicon glyphicon-globe" aria-hidden="true"></span>
                                    Tartu
                                </a>
                            </li>

                            <li>
                                <a href="<?php echo site_url('user/view/' . $this->session->userdata('user_id')); ?>" role="button">
                                    <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                                    <?php echo $this->session->userdata('user_name'); ?>
                                </a>
                            </li>

                            <li>
                                <a href="<?php echo site_url('logout'); ?>" role="button">
                                    <span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>
                                    Log out
                                </a>
                            </li>

                        <?php else: ?>

                            <li>
                                <a href="<?php echo site_url('signup'); ?>" role="button">
                                    <span class="glyphicon glyphicon-check" aria-hidden="true"></span>
                                    Sign up
                                </a>
                            </li>

                            <li>
                                <a href="<?php echo site_url('login'); ?>" role="button">
                                    <span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>
                                    Log in
                                </a>
                            </li>

                        <?php endif; ?>

                    </ul>

                </div><!--/.navbar-collapse -->

            </div>

        </nav>
