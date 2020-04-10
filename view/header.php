<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Zippy Used Autos</title>
<link rel="stylesheet" type="text/css" href="view/css/style.css" />
</head>
<body>
<header>
<div id="pageTitle">
<h1>Zippy Used Autos</h1>
</div>
<div id="pageLinks">
<?php 
session_start();
if (!isset($_SESSION['userid'])) {
?>
<p>
<a href="register.php">Register</a>
</p>
<?php } else { 
$userid = $_SESSION['userid'];
?>
<p>
Welcome <?php echo $userid ?>! (<a href="logout.php">Sign Out</a>)
</p>
<?php } ?>
</div>
</header>
