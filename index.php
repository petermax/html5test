<?php
//load config and mysql_my_manager object
require 'php/config.php';

/* Connect to database */
$db->conn();
//get results form database
$results = $db->select('certificate_number, certificate_name, certificate_expiry', 'vouchers_certificates', "WHERE id='1'");
//convert it to array
$results = $results->fetch_assoc();
//check is any records came
if ($results !== null) {
	//put details from to variables from database
	$cert_number = $results['certificate_number'];
	$cert_name = $results['certificate_name'];
	$cert_expiry = $results['certificate_expiry'];
	
}
//close connection to databse
$db->close();
//if all fields from form has datails
if ($_POST['certificate_number'] != "" && $_POST['certificate_name'] != "" && $_POST['certificate_expiry'] != ""){
	//replace data from database to data from form
	$cert_number = $_POST['certificate_number'];
	$cert_name = $_POST['certificate_name'];
	$cert_expiry = $_POST['certificate_expiry'];
}
?>

<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="for test purposes">
    <meta name="keywords" content="HTML,CSS,PHP">
    <meta name="author" content="PeterMax(R) Peter Software Solution">
    
    <title>HTML5 test</title>
    
    <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    
    <!-- Latest compiled JavaScript -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    <link rel="stylesheet" type="text/css" href="css/my_css.css">
</head>

<body>
	<!------------------- HEADER ------------->
    <header class="page-header">
    	<div class="logo">Peter Software Solution</div>
    </header>
    <!------------------- HEADER END --------------->
    <!------------------------ MAIN CONTAINER ---------------->
    <div class="container">
        <!----------------------------- FORM ------------------>
        <form action="index.php" method="post" >
            <div class="form-group">
              <label for="name">To:</label>
              <input type="text" name="certificate_name" class="form-control" id="name" placeholder="Enter person name">
            </div>
            <div class="form-group">
              <label for="cert">Certificate number:</label>
              <input type="text" name="certificate_number" class="form-control" id="cert" placeholder="Certificate Number">
            </div>
            <div class="form-group">
              <label for="date">Expiry date:</label>
              <input type="date" name="certificate_expiry" class="form-control" id="date" placeholder="YYYY-MM-DD HH:MM:SS">
            </div>
            <button type="submit" id="click" class="btn btn-default">Submit</button>
         </form>
         <!--------------------------- FORM END ------------------------------------------->
        <!------------------------- DISPLAY CERTIFICATE ----------------------------------->
        <div class="certificate">
        	<div style="position:absolute; top:670px; left: 350px"><?php echo $cert_number; ?></div>
            <div style="position:absolute; top:525px; left: 275px"><font style="font-weight:bold; font-size:24px;"><?php echo $cert_name; ?></font></div>
            <div style="position:absolute; top:700px; left: 350px"><?php echo $cert_expiry; ?></div>
        </div>
        <!------------------------- DISPLAY CERTIFICATE END ------------------------------->
    </div>
    <!--------------------------- MAIN CONTAINER END --------------------------->
    <!--------------------------- FOOTER --------------------------------------->
	<footer class="panel-footer">Copyright &copy; 2016 Piotr "PeterMax" Martficki</footer>
    <!---------------------------- Footer END ---------------------------------->
</body>
</html>
