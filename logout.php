<?php 
session_start();
if (isset($_SESSION['userid'])) {
$firstname = $_SESSION['userid'];
unset($_SESSION['userid']);
}

session_destroy();

$name = session_name();
$expire = strtotime('-1 year');
$params = session_get_cookie_params();
$path = $params['path'];
$domain = $params['domain'];
$secure = $params['secure'];
$httponly = $params['httponly'];
setcookie($name, '', $expire, $path, $domain, $secure, $httponly);
?>

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
<p></p>
</div>
</header>
<body>
<h1>Thank you for signing out, <?php echo $firstname ?>.</h1>
<p>
<a href="index.php">Click here</a> to view our vehicle list.
</p>
<br>
</body>

<?php include('view/footer.php'); ?>