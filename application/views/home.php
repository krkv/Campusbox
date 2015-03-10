
<?php
    $query = $this->db->query('SELECT id, name, description FROM item');
?>

<!DOCTYPE html>
<html lang="en">
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="../../favicon.ico">

	<title>Home | Campusbox</title>

	<link href="/css/bootstrap.min.css" rel="stylesheet">
	<link href="/css/home.css" rel="stylesheet">

	<!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
	<!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
	<script src="/js/ie-emulation-modes-warning.js"></script>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	</head>

	<body>

        <!-- Navbar -->
	    <nav class="navbar navbar-inverse navbar-fixed-top">		
            
            <div class="container">		
                
                <div class="navbar-header">
			        
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
			            <span class="sr-only">Toggle navigation</span>
			            <span class="icon-bar"></span>
			            <span class="icon-bar"></span>
			            <span class="icon-bar"></span>
			        </button>
			        
                    <a class="navbar-brand" href="#">Campusbox</a>

		        </div>

		    <div id="navbar" class="navbar-collapse collapse">
			    
                <form class="navbar-form navbar-left">
			        <div class="form-group">
				        <input type="text" placeholder="Search" class="form-control">
			        </div>
                    <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
			    </form>

                <form class="navbar-form navbar-right">
			        <button type="submit" class="btn btn-default">Sign in</button>
			    </form>

		    </div><!--/.navbar-collapse -->

		    </div>

	    </nav>

	    <!-- Jumbotron -->
	    <div class="jumbotron">
		    <div class="container">
		        <h1>Welcome to Campusbox!</h1>
		        <p>Message to new users.</p>
		        <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
		    </div>
	    </div>

	    <div class="container">

		    <!-- Items -->
		    <div class="row">

                <?php
                    foreach ($query->result() as $row)
                        {
                            echo
                            '<div class="col-md-4">
			                <h2>'.$row->name.'</h2>
			                <p>'.$row->description.'</p>
			                <p><a class="btn btn-default" href="#" role="button">User name &rarr;</a></p>
		                    </div>';
                        }  
                ?>

		    </div>

		    <hr>

		    <footer>
		        <p>&copy; Campusbox 2015</p>
		    </footer>

	    </div> <!-- /container -->


	<!-- Bootstrap core JavaScript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="/js/bootstrap.min.js"></script>
	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	<script src="/js/ie10-viewport-bug-workaround.js"></script>
    </body>
</html>