<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bliss Events</title>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&family=Oleo+Script+Swash+Caps&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&family=Great+Vibes&family=Oleo+Script+Swash+Caps&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&family=Great+Vibes&family=Oleo+Script+Swash+Caps&family=Raleway:ital,wght@1,100;1,300&display=swap"
        rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Peralta&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@1,100&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    html,
    body {
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

    header .navigation .logo {
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

    .navigation .menu-list li a:hover {
        color: #b1d4e0;
    }

    .navigation .menu-list li a.active {
        text-decoration: underline;
    }
    
    .numbertext {
        color: #f2f2f2;
        font-size: 12px;
        padding: 8px 12px;
        position: absolute;
        top: 0;
    }

    .dot {
        height: 5px;
        width: 5px;
        margin: 0 0px;
        background-color: #bbb;
        border-radius: 50%;
        display: inline-block;
        transition: background-color 0.6s ease;
    }

    .active {
        background-color: #717171;
    }

    .fade {
        animation-name: fade;
        animation-duration: 2s;
    }

    @keyframes fade {
        from {
            opacity: .4
        }

        to {
            opacity: 1
        }
    }

    @media only screen and (max-width: 300px) {
        .text {
            font-size: 11px
        }
    }

    .slidee {
        height: 650px;
        opacity: 0.9;
    }

    .mySlides fade {
        position: relative;
        text-align: center;
        color: white;
    }

    .text1 {
        position: absolute;
        top: 60%;
        left: 25%;
        right: 30%;
        transform: translate(-50%, -50%);
        font-size:50px;
        color: rgb(16, 6, 35);
        font-family: 'Peralta', serif;
    }

    .text2 {
        position: absolute;
        top: 70%;
        left: 11%;
        right: 70%;
        transform: translate(-50%, -50%);
        font-size:38px;
        color: rgb(16, 6, 35);
        font-family: 'Pacifico', serif;
    }

    .text3 {
        position: absolute;
        top: 55%;
        left: 20%;
        right: 60%;
        transform: translate(-50%, -50%);
        font-size:50px;
        color: rgb(188, 188, 188);
        font-family: 'Josefin Sans', serif;
        font-weight:bold;
    }

    .content {
        padding-left: 12rem;
        padding-right: 12rem;
    }

    .dw {
        display: flex;
    }

    .couple {
        width: 400px;
        height: 420px;
    }

    .para #blabla {
        font-size: 20px;
        font-family: 'Raleway', sans-serif;
    }

    .para #wedding {
        font-family: 'Great Vibes', cursive;
        color: #bf9559;
        font-size: 55px;
        font-weight: 500;
    }

    .para {
        margin-right: 1rem;
    }

    /* birthday  */
    .bd {
        display: flex;
    }

    .wish #birthday {
        font-family: 'Great Vibes', cursive;
        color: #bf9559;
        font-size: 55px;
        font-weight: 500;
    }

    .cake {
        width: 370px;
        height: 320px;
    }

    .wish #blabla {
        font-size: 20px;
        font-family: 'Raleway', sans-serif;
    }

    .wish {
        margin-left: 1rem;
    }

    /* engagement  */
    .eng{
        display: flex;
    }
    .ring{
        width: 370px;
        height: 420px;
    }
    .writings #blabla{
        font-size: 20px;
        font-family: 'Raleway', sans-serif;
    }
    .writings #engagement{
        font-family: 'Great Vibes', cursive;
        color: #bf9559;
        font-size: 55px;
        font-weight: 500;
    }
    .writings{margin-right: 1rem;}
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
    <div class="slideshow-container">

        <div class="mySlides fade">
            <div class="numbertext">1 / 3</div>
            <img src="images/vk.jpg" style="width:100%" class="slidee">
            <div class="text1">Bespoke wedding planning and management</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">2 / 3</div>
            <img src="images/katrina.jpg" style="width:100%" class="slidee">
            <div class="text2">Destination weddings in iconic locations</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">3 / 3</div>
            <img src="images/candle.jpg" style="width:100%" class="slidee">
            <div class="text3">Crafted perfection to suit your needs</div>
        </div>
    </div>
    <br>

    <div style="text-align:center">
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
    </div>
    <br><br>

    <!-- content -->
    <!-- wedding\ -->
    <div class="content">
        <div class="dw">
            <div class="para">
                <h1 id="wedding">Destination Wedding Planners</h1><br>
                <p id="blabla">Celebrations such as weddings can be very overwhelming, especially when you have to plan
                    events with
                    guests attending from different parts of the world. If you are clueless about where to begin and the
                    right steps to take, our professional team of experienced wedding planners will assist you every
                    step of
                    the way. <br><br>
                    Our award-winning team in the Bangalore has been in the wedding planning business for over a
                    decade which also includes destination wedding planning. Bliss Events is one of the most renowned
                    and prestigious wedding planners in the Bangalore. The highly experienced team of wedding planners
                    is
                    skilled and trained to handle all aspects of the wedding in a seamless and efficient manner.
                    <br><br>

                    Whether you choose to host an intimate wedding celebration or a large destination wedding in
                    Bangalore,
                    our
                    team of professional wedding planners work tirelessly to deliver your memorable wedding celebration.
                </p>
            </div>
            <div class="img">
                <img src="images/destination.png" alt="" class="couple">
            </div>
        </div>
    </div>
    <br><br>
    <!-- birthday -->
    <div class="content">
        <div class="bd">
            <div class="pic">
                <img src="images/bday.png" alt="" class="cake">
            </div>
            <div class="wish">
                <h1 id="birthday">Birthday Celebrations</h1><br>
                <p id="blabla"> Bliss Events, the leading birthday party organizer in Bangalore. Organizing a birthday is not
                    a part but attracting a guest through your royalty is made your guests impressed. <br><br> Bliss Events,
                    recognized as the creative birthday party event Organisor because of our beautiful creative stage
                    decorations, Ballon decorations, Making theme birthday party which matches all your colors for a
                    party. A birthday gets memorable only when the invited guest is impressed with your welcomes and
                    decorations. So book now the top event management company to make your birthday memorable.</p>
            </div>
        </div>
    </div><br><br>
    <!-- engagement -->
    <div class="content">
        <div class="eng">
            <div class="writings">
                <h1 id="engagement">Engagement</h1>
                <p id="blabla">Engagement is a wonderful thing one can cherish for their lifetime. An engagement ceremony is a ceremony that marks the beginning of a wedding ceremony. <br><br> “This little ring implies the special moment for the bride and groom as it marks the rule of the world with support for each other. Engagement creates the pinnacle of the relationship, love, and happiness, after which everything on this earth will be downhill. <br><br> Indian weddings are prized for their beautiful ceremonies and wealthy celebrations. Besides, they are conducted in a very traditional manner to commemorate numerous rituals according to the ancient Vedic era. It has glorified the marriage system, which is one of the most important events in one’s life. The engagement ceremony is a pre-wedding ceremony and is an important part of the wedding in many cultures. This ceremony is of great importance as it is the ceremony that marks the beginning of the romantic journey of marriage.
                </p>
            </div>
            <div class="picture">
                <img src="images/ring.png" alt="" class="ring">
            </div>
        </div>
    </div>
    <br><br>
</body>
<script>
    let slideIndex = 0;
    showSlides();

    function showSlides() {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        let dots = document.getElementsByClassName("dot");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) { slideIndex = 1 }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
        setTimeout(showSlides, 3000); // Change image every 3 seconds
    }
</script>
</html>