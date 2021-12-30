<!DOCTYPE html>
<html lang = "eng">
	<head>
		<meta charset = "utf-8" />
		<title>NARULA INSTITUTEOF TECHNOLOGY Attendance Management System</title>
		<meta name = "viewport" content = "width=device-width, initial-scale=1" />
		<link rel = "stylesheet" type = "text/css" href = "css/bootstrap.css"/>
	</head>
	<body class = "alert-info">
		<nav class = "navbar navbar-inverse navbar-fixed-top" style="background-color: steelblue; color: black;" >
			<div class = "container-fluid">
				<div class = "navbar-header">
					<img src = "admin/images/n.png" width = "200px" height = "100px"/>
					<p class = "navbar-text pull-right" style="color: black;">NARULA INSTITUSTE OF TECHNOLOGY Attendance Management System</p>
				</div>
			</div>
		</nav>
		<div class = "container-fluid">
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<div class = "col-lg-3"></div>
			<div class = "col-lg-6 well" >
				<h2 class = "btn btn-success" style="background-color: green; width:628px;">Attendance Login</h2>
				<br />
				<div id = "result"></div>
				<br />
				<br />
				<form enctype = "multipart/form-data">
					<div class = "form-group">
						<label>Student ID:</label>
						<input type = "text" id = "student" class = "form-control" required = "required"/>
						<br />
						<br />
						<div id = "error"></div>
						<br />
						<button type = "button" id = "login" class = "btn btn-success btn-block"><span class = "glyphicon glyphicon-login"></span>Login</button>
					</div>
				</form>
			</div>
		</div>
		<div class = "navbar navbar-fixed-bottom" style="background-color: orangered; color: darkblue;">
			<div class = "container-fluid">
				<center><label>&copy; NARULA INSTITUTEOF TECHNOGY Attendance Management System 2021</label></center>
				
			</div>	
		</div>	
	</body>
	<script src = "js/jquery.js"></script>
	<script src = "js/bootstrap.js"></script>
	<script src = "js/login.js"></script>
</html>