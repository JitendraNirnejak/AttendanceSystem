<!DOCTYPE html>
<html>

<head>
	<title>Attendance</title>

	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/login.css">


	<link rel="stylesheet" type="text/css" href="css/animate.css">
	
	<script type="text/javascript" src="scripts/sha1.js"></script>

	<script type="text/javascript" src="scripts/script.js"></script>
	<script type="text/javascript" src="scripts/login.js"></script>
	<script type="text/javascript" src="scripts/user.js"></script>

	<meta name="viewport" content="width=device-width,initial-scale=1">


</head>

<body onload="checkLogin()">
<center>

<script type="text/javascript">
	function crypto(){
		var password = document.getElementById("password").value;
		password = CryptoJS.SHA1(password);
		document.getElementById("password").value = password;
		loginFunction();
	}
</script>
<div class="content" id="content">

<!-- load from here -->
	<div  class="animated bounce">
	<div class="login">
		<form action="#" method="post">
			<input type="text" id="username" placeholder="Username" autofocus="autofocus"><br><br>
			<input type="password" id="password" placeholder="Password"><br><br>
			<input type="reset" value="Reset">
			<input type="button" value="Login" onclick="crypto()">
		</form>
	</div>
	</div>
<!-- to here -->

</div>


</center>
<br>
</body>
</html>