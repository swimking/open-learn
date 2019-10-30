<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>regForm</title>
	<style type="text/css">
		html, body{
			padding: 0px;
			margin: 0px;
			width: 100%;
			height: 100%;
			background-image: url(pics/x.jpg);
			background-size: cover;
			background-attachment: fixed;


		}
		#main{
			background: black;
			opacity: .8;
			height: 100%;
			width: 100%;
			margin: 0px;
			display: table;
			top: 0;
		}
		#main p{
			text-align: center;
			color: white;
			font-size: 20px;
			font-family: century gothic;
		}
		#lb{
			color: white;
			font-family: century gothic;
		}
		#sel{
			width: 400px;
			background: transparent;
			color: white;
			height: 30px;
			border: 1px solid grey;
		}
		#sel option{
			background: black;
		}
		#form{
			padding: 30px;
		}
		input{
			width: 400px;
			background: transparent;
			border:1px solid white;
			font-family: arial;
			font-size: 15px;
			color: white;
			height: 30px;
		}
		#btn{
			text-decoration: none;
    		background:  transparent;
    		border:1px solid white;
    		font-family:century gothic;
    		font-size:18px;
    		color: white;
    		padding: 10px 20px;
		}
		#a{
			text-decoration: none;
			color: white;
		}

	</style>
</head>
<body>
<section id="main">
	<form id="form" action="reg2.php" method="POST">
		<p>
			Signup Form

		</p>
		<p>
			Enter the details As instructed
			
		</p>
		<label id="lb">
			First Name:
		</label><br><br>
		<input type="" name="fname" required=""><br><br>
		<label id="lb">
			Last Name:
		</label><br><br>
		<input type="" name="lname" required=""><br><br>
		<label id="lb">
			Course to Mentor:
		</label><br><br>
		<select id="sel" required="" name="course">
			<option name="course">
				Digital Technology
			</option>
			<option name="course">
				Videography
			</option>
			<option name="course">
				Graphics
			</option>
			<option name="course">
				Art Education
			</option>
			<option name="course">
				Networking
			</option>
			<option name="course">
				Human centered design
			</option>
			<option>
				Entreprenuership
			</option>
			<option name="course">
				Computer Skills
			</option>
			<option name="course">
				life Skills
			</option>
			
		</select><br><br>
		<label id="lb">
				Date of birth
		</label><br><br>
			<input type="Date" name="dob" required="">
			<label id="lb"><br><br>
				 Years of Experience:
			</label><br><br>
			<input type="" name="experience" required="">
			<label id="lb"><br><br>
				Skills:
			</label><br><br>
			<input type="" name="skills" required="">
			<label id="lb"><br><br>
				PhoneNumber
			</label><br><br>
			<input type="" name="contact" required=""><br><br>
			<label id="lb">
				Email
			</label><br><br>
			<input type="Email" name="email" required=""><br><br>
			<label id="lb">
				Password
			</label><br><br>
			<input type="Password" name="password" required=""><br><br>
			<label id="lb">
				Retype password
			</label><br><br>
			<input type="Password" name="password" required=""><br><br>


		   <button id="btn" href="#">
		     Submit	
		   </button>
		
	</form>
</section>
</body>
</html>