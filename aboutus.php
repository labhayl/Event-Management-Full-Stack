<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
    *{
  margin: 0;
  padding: 0;
	box-sizing: border-box;
}

@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@600;900&display=swap');

a{
  color: black;
}

a:hover{
  color: #8332AB;
}

.wrapper{
  display: flex;
  justify-content: center;
  align-items: center;
  height: 30vh;
}

.btn{
  width: 280px;
  height: 60px;
  border: 3px solid #8332AB;
  border-radius: 30px;
  display: flex;
  justify-content: space-evenly;
  align-items: center;
  position: relative;
  color: black;
  cursor: pointer;
  overflow: hidden;
  font-size: 24px;
  transition: all 0.5s ease;
}

.btn:before{
  content: "FOLLOW US";
  font-family: "Poppins", sans-serif;
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translate(-50%, -50%);
  color: white;
  font-size: 16px;
  letter-spacing: 1px;
  width: 100%;
  height: 100%;
  border-radius: 30px;
  display: flex;
  justify-content: center;
  align-items: center;
  background: #8332AB;
  transition: all 0.5s ease;
}

.btn:hover{
  background: #FFF
}

.btn:hover:before{
  top: -50%;
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

body {
    font-family: Arial, Helvetica, sans-serif;
    margin: 0;
}

html {
    box-sizing: border-box;
}
*, *:before, *:after {
    box-sizing: inherit;
}
    
.column {
    float: left;
    width: 25%;
    margin-bottom: 16px;
    padding: 0 8px;
}

.card {
    box-shadow: 0 4px 8px 0 rgba(192, 4, 239, 0.2);
    margin: 8px;
}
    
.about-section {
    padding: 50px;
    text-align: center;
    background-color: #8332AB;
    color: white;
}
   
.container {
    padding: 0 16px;
}
    
.container::after, .row::after {
    content: "";
    clear: both;
    display: table;
}
    
.title {
    color: grey;
}
    
.button {
    border: none;
    outline: 0;
    display: inline-block;
    padding: 8px;
    color: white;
    background-color: #8332AB;
    text-align: center;
    cursor: pointer;
    width: 100%;
}
    
.button:hover {
    background-color: #555;
}
    
@media screen and (max-width: 650px) {
    .column {
    width: 100%;
    display: block;
    }
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
    <br>
    <br>
    <div class="about-section">
        <h1>About Us</h1>
        <br>
        <br>
        <p>Bliss Events provides comprehensive wedding planning and management services to couples from all over the world. Having successfully planned, managed and conceptualized weddings in over 23 countries, our team of creative wedding planners are constantly raising the bar in order to deliver the finest and most memorable wedding celebrations worldwide.</p>
        <br>
        <p>Positioned as one of the finest destination wedding planning company in India, Bliss Events operates globally for Destination Weddings. Whether you’re looking for wedding planners or destination wedding planning, Bliss Events has planned, conceptualized, and managed weddings for some of the most prestigious families in different parts of the world. Offering bespoke solutions for every aspect of wedding planning, our services include everything from initial planning to event operations and wrap up of events.</p>
        <br>
        <p>Being recognized as one of the most successful wedding agencies in India, we specialize in Indian traditional weddings. Our team of wedding consultants in New Delhi help to shape up your big day better than you may have imagined and deliver the most memorable moments for the biggest celebration of your life. Providing you wedding planning assistance from beginning to end, we ensure that your experience is stress-free, efficient, structured and cost effective.</p>
        <br>
        <p>At Bliss Events, we work within your defined parameters of budgets, client’s sensitivities and requirements. Our range of services include identifying ideal wedding destinations, the most unique venues, renowned teams of wedding photographers and videographers, creative wedding designers and decorators, bridal couture, wedding entertainment, and lots more.</p>
      </div>
      <br>
      <br>
      <h2 style="text-align:center">Our Team</h2>
      <br>
      <br>
      <div class="row">
        <div class="column">
          <div class="card">
            <div class="container">
              <br>
              <h3>Tausif Rizwan</h3>
              <br>
              <p class="title">CEO & Founder</p>
              <br>
              <p>A world renowned award-winning wedding planner.</p>
              <br>
              <p>tausifrizwan@mail.com</p>
              <br>
              <p><button class="button" ><a href="contactus.php">Contact</a></button></p>
              
              <br>
            </div>
          </div>
        </div>
      
        <div class="column">
          <div class="card">
            <div class="container">
              <br>
              <h3>Abhay Pratap Singh</h3>
              <br>
              <p class="title">Partnership Manager</p>
              <br>
              <p>A Project Manager well known for his communication skills.</p>
              <br>
              <p>aps@mail.com</p>
              <br>
              <p><button class="button" ><a href="contactus.php">Contact</a></button></p>
              <br>
            </div>
          </div>
        </div>
        
        <div class="column">
          <div class="card">
            <div class="container">
              <br>
              <h3>Faizan Ahmed</h3>
              <br>
              <p class="title">Art Designer</p>
              <br>
              <p>A popular artist well known for his digital arts.</p>
              <br>
              <p>faizanahmed@mail.com</p>
              <br>
              <p><button class="button" ><a href="contactus.php">Contact</a></button></p>
              <br>
            </div>
          </div>
        </div>

        <div class="column">
            <div class="card">
              <div class="container">
                <br>
                <h3>Mallikarjun</h3>
                <br>
                <p class="title">Designer</p>
                <br>
                <p>Well known specific events designer.</p>
                <br>
                <p>malli@mail.com</p>
                <br>
                <p><button class="button" ><a href="contactus.php">Contact</a></button></p>
                <br>
              </div>
            </div>
          </div>
      </div>
      
    <div class="wrapper">
    <div class="btn">
      <a href="#"><i class="fa fa-youtube-play"></i></a>
      <a href="#"><i class="fa fa-facebook-square"></i></a>
      <a href="#"><i class="fa fa-twitter-square"></i></a>
      <a href="#"><i class="fa fa-instagram"></i></a>
    </div>
  </div>
</body>
</html>