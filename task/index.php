<?php
	define("TITLE", "Let's Connect");
	$my_name	= "Shri Shruthi";
	
	if (isset ($_GET['ref'])) {
		$ref = $_GET['ref'];
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>PHP <?php echo TITLE; ?></title>
		<link href="../assets/styles.css" rel="stylesheet">
		<script type="text/javascript" src="../assets/syntaxhighlighter/scripts/shCore.js"></script>
		<script type="text/javascript" src="../assets/syntaxhighlighter/scripts/shBrushPhp.js"></script>
		<link type="text/css" rel="stylesheet" href="../assets/syntaxhighlighter/styles/shCoreDefault.css"/>
		<link rel="stylesheet" href="css/font-awesome.min.css">
    	<script src="https://use.fontawesome.com/7fe139a1a7.js"></script>
    	<link rel="stylesheet" href="css/bootstrap.min.css">
    	<link rel="stylesheet" href="css/main.css">
    	<link rel="stylesheet" href="css/animate.css">

		<script type="text/javascript">SyntaxHighlighter.all();</script>
		<script src="js/jquery.js"></script>
    	<script src="js/bootstrap.min.js"></script> 
	
	</head>
	
	<body>
		<div class="wrapper">
			<header>
				<?php include('includes/header.php'); ?>
			</header>
			
			
			<h1><small><?php echo TITLE; ?></small></h1>
			
			<img src="../assets/img/hr.png" alt="PHP">
			<br>
			<br>
			
			<div class="sandbox">	

				<section>
					<div class="row">
						<center><h2>ABOUT</h2></center>
						<center><h3>Connect is a student made website for providing the entire college about the happenings of one another leading to better intra-college communication.</h3></center>
					</div>
					<br>
					<br>
				</section>

				<section>
					
					<ul class="nav nav-tabs">
        				<li class="active"><a data-toggle="tab" href="#form">Signup</a></li>
        				<li><a data-toggle="tab" href="#login">Login</a></li>
        				<li><a href="event.php">Events</a></li>
        				<li><a data-toggle="tab" href="#postevent">Post Events</a></li>
        				<li><a href="project.php">Projects</a></li>
        				<li><a data-toggle="tab" href="#postproject">Post Projects</a></li>
        				<li><a href="resource.php">Resources</a></li>
        				<li><a data-toggle="tab" href="#postresource">Post Resources</a></li>
        			</ul>
    				<div class="tab-content">
        				<div id="form" class="tab-pane fade in active">
                		<form action="signup.php" method="post">
                		<br>
                    		<div class="form-group col-lg-12">
                        		<label for="inputEmail">Name</label>
                        		<input type="text"  name="name" class="form-control" placeholder="Name">
                    		</div>
                    		<div class="form-group col-lg-12">
                        		<label for="inputEmail">Email</label>
                        		<input type="email" name="email" class="form-control" placeholder="Email">
                    		</div>
                    		<div class="form-group col-lg-12">
                        		<label for="inputPassword">Phone number</label>
                        		<input type="text" name="contact" class="form-control" placeholder="9999999999" minlength="10" maxlength="10">
                    		</div>
                    		<div class="form-group col-lg-12">
                        		<label for="inputEmail">Department</label>
                        		<input type="text"  name="dept" class="form-control" placeholder="Department">
                    		</div>
                    		<div class="form-group col-lg-12">
                        		<label for="inputEmail">Designation</label>
                        		<input type="text"  name="des" class="form-control" placeholder="Designation">
                    		</div>
                    		<div class="form-group col-lg-12">
                        		<label for="inputEmail">Year of Study</label>
                        		<input type="number"  name="year" class="form-control" placeholder="year">
                    		</div>
                    		<div class="form-group col-lg-12">
                        		<label for="inputEmail">Password</label>
                        		<input type="password" name="password" class="form-control" placeholder="password">
                    		</div>
                    		<br>
                       	<center><button type="submit" class="btn btn-primary">SIGN UP</button></center>
                       	</form>
                       	</div>  

                       	<div id="login" class="tab-pane fade in">
                		<form action="login.php" method="post">
                		<br>
                    		<div class="form-group col-lg-12">
                        		<label for="inputEmail">Name</label>
                        		<input type="text"  name="name" class="form-control" placeholder="Name">
                    		</div>
                    		<div class="form-group col-lg-12">
                        		<label for="inputEmail">Password</label>
                        		<input type="password" name="pwd" class="form-control" placeholder="password">
                    		</div>
                    		<br>
                       	<center><button type="submit" class="btn btn-primary">LOGIN</button></center>
                       	</form>
                       	</div>

                       	<div id="postevent" class="tab-pane fade in">
                		<form action="event1.php" method="post">
                		<br>
                    		<div class="form-group col-lg-12">
                        		<label for="inputEmail">Event Name</label>
                        		<input type="text"  name="ename" class="form-control" placeholder="Event Name">
                    		</div>
                    		<div class="form-group col-lg-12">
                        		<label for="inputEmail">Event Description</label>
                        		<input type="text" name="edes" class="form-control" placeholder="Description">
                    		</div>
                    		<div class="form-group col-lg-12">
                        		<label for="inputPassword">Department</label>
                        		<input type="text" name="edept" class="form-control" placeholder="Department">
                    		</div>
                    		<div class="form-group col-lg-12">
                        		<label for="inputEmail">Event Date</label>
                        		<input type="text"  name="edate" class="form-control" placeholder="Date">
                    		</div>
                    		<div class="form-group col-lg-12">
                        		<label for="inputEmail">Posted By</label>
                        		<input type="text"  name="postedby" class="form-control" placeholder="Name">
                    		</div>
                    		<br>
                       	<center><button type="submit" class="btn btn-primary">POST EVENT</button></center>
                       	</form>
                       	</div>

                       	<div id="postproject" class="tab-pane fade in">
                		<form action="project1.php" method="post">
                		<br>
                    		<div class="form-group col-lg-12">
                        		<label for="inputEmail">Project Name</label>
                        		<input type="text"  name="pname" class="form-control" placeholder="Name">
                    		</div>
                    		<div class="form-group col-lg-12">
                        		<label for="inputEmail">Project Field</label>
                        		<input type="text"  name="pf" class="form-control" placeholder="Name">
                    		</div>
                    		<div class="form-group col-lg-12">
                        		<label for="inputEmail">Project Description</label>
                        		<input type="text"  name="pdes" class="form-control" placeholder="Name">
                    		</div>
                    		<div class="form-group col-lg-12">
                        		<label for="inputEmail">Done By</label>
                        		<input type="text"  name="done" class="form-control" placeholder="Name">
                    		</div>
                    		
                    		<br>
                       	<center><button type="submit" class="btn btn-primary">POST PROJECT</button></center>
                       	</form>
                       	</div>

                       	<div id="postresource" class="tab-pane fade in">
                		<form action="resource1.php" method="post">
                		<br>
                    		<div class="form-group col-lg-12">
                        		<label for="inputEmail">Resource Name</label>
                        		<input type="text"  name="rname" class="form-control" placeholder="Name">
                    		</div>
                    		<div class="form-group col-lg-12">
                        		<label for="inputEmail">Subject</label>
                        		<input type="text"  name="rs" class="form-control" placeholder="Name">
                    		</div>
                    		<div class="form-group col-lg-12">
                        		<label for="inputEmail">Posted By</label>
                        		<input type="text"  name="postedby" class="form-control" placeholder="Name">
                    		</div>
                    		<div class="form-group col-lg-12">
                        		<label for="inputEmail">URL</label>
                        		<input type="text"  name="url" class="form-control" placeholder="Name">
                    		</div>
                    		<br>
                       	<center><button type="submit" class="btn btn-primary">POST RESOURCE</button></center>
                       	</form>
                       	</div>
        			</div>

				</section>

			</div><!-- end sandbox -->

			<br>
			<br>
			<img src="../assets/img/hr.png" alt="PHP">
			<br>
			<br>

			<footer>
				<?php include('includes/footer.php'); ?>
			</footer>
			
		</div><!-- end wrapper -->
		
	</body>
</html>
