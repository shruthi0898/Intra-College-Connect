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
						//connection to the database
						$dbhandle = mysql_connect($hostname, $username);
						if (!$dbhandle)
						{
							die('Could not connect: ' . mysql_error());
						}
						mysql_select_db("shri_db", $dbhandle);
						$sql="INSERT INTO signup (name, email,contact,department,designation,year_of_study,password)
						VALUES
						('$_POST[name]','$_POST[email]','$_POST[contact]','$_POST[dept]','$_POST[des]','$_POST[year]','$_POST[password]')";
						if (!mysql_query($sql,$dbhandle))
						{
							die('Error: ' . mysql_error());
						}
						$query="SELECT * FROM signup";
						$result=mysql_query($query);
						mysql_close($dbhandle);
					?>
					<h2>USERS LIST</h2>
					<table border="2">
						<tr>
							<th> NAME </th>
							<th>EMAIL</th>
							<th>DEPARTMENT</th>
							<th>DESIGNATION</th>
							<th>YEAR OF STUDY</th>
						</tr>
						<?php
							while($array= mysql_fetch_row($result))
							{
								print "<tr>
								<td> $array[1] </td>
								<td> $array[2] </td>
								<td> $array[4] </td>
								<td> $array[5] </td>
								<td> $array[6] </td> </tr>";
							}
						?>
					</table>

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
