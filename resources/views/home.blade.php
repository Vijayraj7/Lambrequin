<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Lambrequin.in</title>
        <!-- Link to external CSS file -->
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <!-- Navigation Bar -->
        <header>

            <nav>
                <div class="logo">
                    <h1 id="lambtitle">LAMBREQUIN PRIVATE LIMITED</h1>
                </div>
                <ul class="nav-links">
                    <li><a href="#home">Home</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#about">About Us</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>
            <!--  -->
            <img class="header_img" src="./images/picture16.jpg">
        </header>
        <section>
            <img src="/images/pic14.webp"
                alt class="image2">
        </section>

        <!-- Hero Section -->
        <section id="home" class="hero">
            <h2>WELCOME TO LAMBREQUIN</h2>
            <p>
                <div class="level">
                    <h1>WEBSITE DESIGNING</h1> </div>
                <div class="level1">
                    <h2>ANDROID AND IOS APP DEVELOPING</h2>
                </div>
                <div class="level2">
                    <h3>POSTER AND LOGO DESIGNING</h3>
                </div>
                <div class="level3">
                    <h4>DIGITAL MARKETING</h4>

                </div>
                <div class="level4">
                    <h5>WEB 3.0 TECHNOLOGY TRAINING</h5>

                </div>
                <div class="level5">
                    <h6>SALES & BUSINESS TRAINING

                    </div>
                    <div class="level6">
                        FINANCIAL MANAGEMENT TRAINING</h6>
                </div>

                .</p>
            <a href="#contact" class="btn">Get in Touch</a>
        </section>

        <!-- Services Section -->
        <section id="services" class="services">
            <h2>Our Services</h2>
            <div class="service-item">
                <h3>Web Development</h3>
                <p>We build responsive and engaging websites.</p>
            </div>
            <div class="service-item">
                <h3>Mobile App Development</h3>
                <p>Custom mobile apps tailored for your needs.</p>
            </div>
            <div class="service-item">
                <h3>Cloud Solutions</h3>
                <p>We offer scalable and secure cloud services.</p>
            </div>
        </section>

        <!-- Footer -->
        <footer>
            <p>© 2024 Lambrequin Private Limited. All Rights Reserved.</p>
        </footer>
    </body>
</html>
<style>
    /* Global Styles */
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    line-height: 1.6;
}

/* Navigation Bar */
header {
    position: relative;
    /*  */
    background-size: cover;
    background-color: #275245;
    color: #fff;
    padding: 10px 0;
    width: 100%;
}

header .header_img{
width: 100%;
}
  .image2{
width: 100%;
}
nav {
    position: absolute;
    /*  */
    display: flex;
    justify-content: space-between;
    align-items: center;
    max-width: 1200px;
    height: 200px;
    margin: 0 auto;
    padding: 0 20px;
}

nav .logo h1 {
    margin: 0;
    font-size: 70px;
}

nav ul {
    list-style: none;
    margin: 0;
    padding: 0;
    display: flex;
}

nav ul li {
    margin-left: 20px;
}

nav ul li a {
    color: #ff0000;
    text-decoration: none;
    font-size: 16px;
}

nav ul li a:hover {
 color: #f0a500;
}
#lambtitle
{
   font-size: 28px; 
}
@media(max-width:800px){
    #lambtitle{
        font-size: 12px;
    }
    nav ul{
        flex-direction: column;
    }
}
/* Hero Section */
.hero {
    background: #000000;
    text-align: center;
    font-size: 25px;
    font-family: cursive;
    font-weight: bold;
    padding: 100px 20px;
}

.hero h2 {
    font-size: 36px;
    color: #333;
}

.hero p {
    font-size: 36px;
    color: #666;
}

.hero .btn {
    display: inline-block;
    margin-top: 20px;
    padding: 10px 20px;
    background-color: #f0a500;
    color: #fff;
    text-decoration: none;
    border-radius: 5px;
    font-size: 18px;
}

.hero .btn:hover {
    background-color: #333;
}

/* Services Section */
.services {
    background-color: #000000;
    padding: 50px 20px;
    text-align: center;
}

.services h2 {
    font-size: 32px;
    color: #333;
}

    .level{
    padding: 5px;
    background-color: #ff0000;
    
}
     .level1{
        padding: 5px;
    background-color: #8f2c2c;
}
     .level2{
        padding: 5px;
    background-color: #ff0000;
    display: block;
    font: size 25px;;
    margin-block-start: 0.83em;
    margin-block-end: 0.83em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    font-weight: bold;
    unicode-bidi: isolate;
}
     .level3{
        padding: 5px;
    background-color: #8f2c2c;
    display: block;
    font-size: 25px;
    margin-block-start: 0.83em;
    margin-block-end: 0.83em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    font-weight: bold;
    unicode-bidi: isolate;
 }
      .level4{
        padding: 5px;
    background-color: #ff0000;
}
    .level5{
        padding: 5px;
        background-color: #8f2c2c
    }
    .level6{
        padding: 5px;
        background-color: #ff0000;
    }
   
.service-item {
    margin: 20px 0;
    background-color: aquamarine;
}

.service-item h3 {
    font-size: 24px;
    color: #f0a500;
}

.service-item p {
    font-size: 16px;
    color: #666;
}

/* Footer */
footer {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 20px 0;
}

</style>