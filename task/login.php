<?php
	define("TITLE", "Task");
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
					<?php
						$username = "root";
						$password = "";
						$hostname = "localhost"; 
						$user = $_POST['name'];
						$pwd = $_POST['pwd'];
						//connection to the database
						$dbhandle = mysql_connect($hostname, $username);
						if (!$dbhandle)
						{
							die('Could not connect: ' . mysql_error());
						}
						mysql_select_db("shri_db", $dbhandle);						
						$query="SELECT * FROM signup where name = '$user' and password = '$pwd'";
						$result=mysql_query($query);
						if (!$result) {
						    echo 'Could not run query: ' . mysql_error();
						    exit;
						}
						$row = mysql_fetch_row($result);
						
						$query="UPDATE signup SET log = 'loggedin' where name = '$user' and password = '$pwd'";
						$result=mysql_query($query);
						/*while($array= mysql_fetch_row($result))
						{
							echo $array;
							print "<tr>
								<td> $array[1] </td>
								<td> $array[2] </td>
								<td> $array[3] </td> </tr>";
						}*/
						/*$row=mysql_fetch_array($result);
						//echo "Login succesful";
						if ($row['name']== $user && $row['password']== $pwd){
							echo "Login succesful! Welcome '$row[name]'";
						}
						$query="SELECT * FROM eventm where posted_by='$user'";
						$result=mysql_query($query);
						while($array= mysql_fetch_row($result))
						{
							print "<tr>
								<td> $array[1] </td>
								<td> $array[2] </td>
								<td> $array[3] </td> </tr>";
						}*/
						mysql_close($dbhandle);
					?>
					<form action="logout.php" method="post">
                		<br>
                    		<div class="form-group col-lg-12">
                        		<label for="inputEmail">Name</label>
                        		<input type="text"  name="name" class="form-control" placeholder="Name">
                    		</div>
                    		<br>
                       	<center><button type="submit" class="btn btn-primary">LOGOUT</button></center>
                    </form>

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
