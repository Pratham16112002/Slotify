<?php
include("includes/config.php");

//session_destroy(); LOGOUT

if (isset($_SESSION['userLoggedIn'])) {
	$userLoggedIn = $_SESSION['userLoggedIn'];
}
else {
	header("Location: register.php");
}

?>

<html>
<head>
	<title>Welcome to Slotify!</title>
	<link rel="stylesheet" href="assets/css/Index.css">
</head>

<body>
	
	<div class="mainContainer">
		<div id="topContainer">

			<?php
				include("includes/navBarContainer.php");
			?>
			<div id="mainViewContainer">
				<div id="mainContent">

