<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
</head>
<style>
*{
  margin: 0;
  padding: 0;
	box-sizing: border-box;
}

html,body{
  min-width: 100%;
  overflow-x: hidden;
  font-size: 16px;
  font-family: 'Montserrat', sans-serif;
}

header .navigation {
  display: flex;
  justify-content: space-between;
  align-items: center;
  position: fixed;
  min-height: 10vh;
  min-width: 100%;
  z-index: 10;
  background: rgb(12, 20, 45);
  border-bottom: 2px solid #6f5f0e;
}

header .navigation .logo{
  margin-left: 20px;
}

header .navigation .menu-list {
  list-style: none;
  display: flex;
  justify-content: space-between;
  align-items: center;
  width: 45%;
  margin: auto 100px auto 0;
}

header .navigation .menu-list li a {
  /* color: #b1d4e0; */
  color: goldenrod;
  font-size: 1.25rem;
  letter-spacing: 2px;
  text-transform: uppercase;
  cursor: pointer;
  transition: color 0.3s ease, border 0.3s ease;
  text-decoration: none;
}
.navigation .menu-list li a:hover{
  color: #b1d4e0;
}
.navigation .menu-list li a.active{
  text-decoration: underline;
}
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #8332AB;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #000000;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
<body>
    <!--====== Header Section Start ======-->
	<header>
		<nav class="navigation">

			<!-- Logo -->
			<div class="logo">
        <img src="images/logo.png" width="100px" height="50px">
			</div>
			
			<!-- Navigation -->
      <ul class="menu-list">
        <li><a href="index.php">Home</a></li>
        <li><a href="aboutus.php">About Us</a></li>
        <li><a href="services.php">Services</a></li>
        <li><a href="contactus.php">Contact us</a></li>
    </ul>

			<div class="humbarger">
				<div class="bar"></div>
				<div class="bar2 bar"></div>
				<div class="bar"></div>
			</div>
		</nav>
	</header>
    <br><br><br><br>
    <center><h2>Contact Us</h2></center>
    <div class="container">
    <form method="post" action="contact.php">
        <label for="name">Full Name</label>
        <input type="text" id="name" name="name" placeholder="Your Name">

        <label for="email">Email Address</label>
        <input type="text" id="email" name="email" placeholder="Your Email Address">

        <label for="subject">Subject</label>
        <select id="subject" name="subject">
        <option value="default" disabled selected hidden>Select Subject</option>
        <option value="Destination Management">Destination Management</option>
        <option value="Venue Selection">Venue Selection</option>
        <option value="Bridal Care">Bridal Care</option>
        <option value="Designer Invitations">Designer Invitations</option>
        <option value="General Query" selected>General Query</option>        
        </select>

        <label for="message">Message</label>
        <textarea id="message" name="message" placeholder="Write out your queries" style="height:140px"></textarea>

        <input type="submit" value="Submit" formaction="contact.php">
    </form>
    </div>
</body>
</html>
