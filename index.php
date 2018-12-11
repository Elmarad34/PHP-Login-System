<? php 
	//allow the config
	define ('__CONFIG__'. true);
	//require the config
	require_once "inc/config.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<!-- UIkit CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.25/css/uikit.min.css" />
	<title></title>
</head>
		<body>
		<div class="uk-section uk-container">
			<?php
				echo "Hello World. Today is : ";
				echo date("Y md d");
			?>
			<p>
				<a href="/index.php">Login</a>
				<a href="/register.php">Register</a>
			</p>
		</div>
	    </div>	    

</form>
	<? php requre_once "inc/footer.php"; ?>
	</body>
</html>