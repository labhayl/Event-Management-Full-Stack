<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services</title>
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
body{
    margin:0px;
    padding: 0px;
    background-color: #FFFFFF;
    font-family: calibri;
}
a{
    text-decoration:none;
}
.services{
    width:100%;
    height: 100vh;
    display: flex;
    flex-direction: column;
    justify-content: space-evenly;
    align-items: center;
}
.s-heading{
    text-align:center;
}
.s-heading h1{
    color:#576975;
    font-size: 3rem;
    font-weight: 400;
    letter-spacing: 1px;
    margin: 0px;
}
.s-heading p{
    color: rgba(87,105,117,0.60);
    font-size: 1rem;
    margin: 5px;
    text-align: center;
}
.s-box-container{
    width:100%;
    display: flex;
    justify-content: center;
    align-items: center;
}
.s-box{
    display:flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    border-radius: 10px;
    width:300px;
    padding: 20px 25px;
    height: 400px;
    box-sizing: border-box;
    margin: 30px;
    position: relative;
}
.s-box img{
    height: 75px;
}
.s-box h3{
    color:#576975;
    letter-spacing: 1px;
    font-size: 1rem;
    margin-bottom: 8px;
    
}
.s-box p{
    color: rgba(87,105,117,0.90);
    text-align: center;
}
.s-btn{
    width: 140px;
    height: 40px;
    border-radius: 20px;
    border:1px solid rgba(74,144,226,0.50);
    display: flex;
    justify-content: center;
    align-items: center;
    color:#576975;
    margin-top:10px; 
}
.bar{
    width: 100px;
    height: 6px;
    position: absolute;
    left: 50%;
    top: 0%;
    transform: translateX(-50%);
    background-color:#8332AB; 
    border-radius: 0px 0px 10px 10px;
    display: none;
    animation: bar 0.5s;
}
.s-box:hover{
    box-shadow: 2px 2px 30px rgba(0,0,0,0.08);
    transition: all ease 0.3s;
}
.s-btn:hover{
    background-color:#8332AB;
    border: 1px solid #8332AB;
    color:#FFFFFF;
    transition: all ease 0.3s;
}
.s-box:hover .bar{
    display: block;
}
@keyframes bar{
    0%{
        width:0px;
    }
    100%{
        width:100px;
    }
}
@media(max-width:1050px){
    .s-box-container{
        flex-wrap: wrap;
        
    }	
    .services{
        height: auto;
    }
    .s-heading{
        margin: 15px;
    }
    .s-box{
        flex-grow: 1;
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
    <br><br><br>
    <section class="services">
        <div class="s-heading">
        <h1>Se<font color="#8332AB">rvic</font>es</h1>
        <p>We Provide The Best In Class Servies For Our Customers</p>
        </div>
        <div class="s-box-container">
            <div class="s-box">
            <div class="bar"></div>
            <img alt="1" src="images/1.jpg" width="100" height="50"/>
            <h3>Destination Management</h3>
                <p>Detailed understanding of the wedding destination and the services it has to offer.</p>
            <a class="s-btn" href="dmgmt.html">More</a>
            </div>
            <div class="s-box">
            <div class="bar"></div>
            <img alt="2" src="images/2.jpg" width="100" height="50"/>
            <h3>Venue Selection</h3>
                <p>Identifying and shortlisting suitable venues for all the events is the first step in planning a wedding.</p>
            <a class="s-btn" href="vslcn.html">More</a>
            </div>
            <div class="s-box">
            <div class="bar"></div>
            <img alt="3" src="images/3.jpg" width="100" height="50"/>
            <h3>Bridal Care</h3>
                <p>Ensuring the bride is at her best on her big day is what our team of experts constantly strive towards.</p>
            <a class="s-btn" href="bcare.html">More</a>
            </div>
            <div class="s-box">
                <div class="bar"></div>
                <img alt="3" src="images/4.jpg" width="100" height="50"/>
                <h3>Designer Invitations</h3>
                    <p>First impressions create lasting memories and hence your wedding invites should be unique and impressive.</p>
                <a class="s-btn" href="dinvi.html">More</a>
                </div>
        </div>
    </section>
</body>
</html>