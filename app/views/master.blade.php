<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sweet Yams</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link rel="stylesheet" href="/css/main.css">
</head>
<body>
	<header>
		<ul>
			<li><a href="{{{action('AdminController@login')}}}">Login</a></li>
			<li><a href="{{{action('AdminController@logout')}}}">Logout</a></li>
			<li><a href="{{{action('AdminController@menuPanel')}}}">Menu Panel</a></li>
		</ul>
	</header>	
</body>
</html>