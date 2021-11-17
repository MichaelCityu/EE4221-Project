<html>
<head>
	<meta charset="UTF-8">
	<title>Example Site;!</title>
	<link rel="stylesheet" href="css/styles.css">
	<style>
		.bodyStyle {
		  background-color: bisque;
		}
	</style>
</head>

<body class="bodyStyle">

	<div id="header" class="mainHeader">
		<hr>
		<div class="center"><H1>Example Social Research Organization</H1></div>
	</div>
	<br>
	<?php
		// Get the application environment parameters from the Parameter Store.
		include ('get-parameters.php');

		// Display the server metadata information if the showServerInfo parameter is true.
	
	?>
	<hr>
	<ul class="topnav">
		<li><a href="#aboutUs">About Us</a></li>
        <li><a href="#contactUs">Contact Us</a></li>
        <li><a href="query.php">Query</a></li>
	</ul>
	<hr>
	<div id="mainContent">

		<div id="mainPictures" class="center">
			
			<hr>
			<p>Welcome to our data query site. You can get data from countries all over the world to use in your research. </p>
			<br>
			<div class="cursiveText">We provide data for a variety of areas including basic demographics and development statistics.</div>
			<hr>
		</div>
	</div>

	<div id="aboutUs" class="center">
		<hr>
		<div>
			<h2>About Us</h2>
		</div>
			<table class="centerTable">
				<tr>
					<td><figure><img src="Shirley.png" height=auto width="400"><figcaption>Shirley Rodriguez</figcaption></figure></td>
				</tr>	
					<tr><td><p>Our site got started when Shirley Rodriguez found that she was frequently looking up data from a variety of databases. <br>Shirley decided to start sharing some of this data with other social researchers. </p></td>
				</tr>
			</table>
			<hr>
		</div>

	<div id="contactUs" class="center">
		<hr>
		<div>
			<h2>Contact Us</h2>
		</div>
		<table class="centerTable">
			<tr>
				<td><img src="Logo.png" height=auto width="120"></td>
			</tr>
		</table>
		<div><p>123 Any Street<br>Any Town, USA<br></p></div>
		<div>
			<h3>Hours</h3>
		</div>
		<div>Weekdays: 6:00am - 6:00pm<br>Saturday: 7:00am - 7:00pm<br>Closed on Sundays</div>
	</div>

	<div id="Copyright" class="center">
		<h5>&copy; 2020, Amazon Web Services, Inc. or its Affiliates. All rights reserved.</h5>
	</div>
</body>
</html>
