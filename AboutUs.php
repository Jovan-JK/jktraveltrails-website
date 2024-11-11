<!DOCTYPE html>
<html>
    <head>
        <title>About Us | JK Travel Trails</title>
        <link rel="icon" type="image/x-icon" href="Logos/JK TRAVELS.png">

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        
        <link rel="stylesheet" href="styles/aboutus.css">
        <link rel="stylesheet" href="styles/styles.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    </head>
    <body class="gallery-body" style="position: relative; padding-bottom: 300px; font-family: Roboto;">

        <header class="header">
            <div class="navbar">
              <a href="home.php"><img class="logo" src="Logos/JK TRAVELS.png"></a>
              <ul class="links">
                <li><a href="home.php">Home</a></li>
                <li><a href="AboutUs.php">About</a></li>
                <li><a href="safarisUganda.php">Safaris</a></li>
                <li><a href="experiences.php">Experiences</a></li>
                <li><a href="gallery.php">Gallery</a></li>
                <li><a href="blog.php">Blog</a></li>
                
              </ul>
              <a class="action_btn2" aria-label="chat on WhatsApp" href="https://wa.me/256780433746" style="color: white;"> <i class="fa-brands fa-whatsapp"></i> Lets Chat</a>
              <a href="contact.php" class="action_btn" style="color: white;">Contact Us</a>
              <div class="toggle_btn">
                <i class="fa-solid fa-bars"></i>
              </div>
            </div>
  
            <div class="dropdown_menu">
              <li><a href="home.php">Home</a></li>
              <li><a href="AboutUs.php">About</a></li>
              <li><a href="safarisUganda.php">Safaris</a></li>
              <li><a href="experiences.php">Experiences</a></li>
              <li><a href="blog.php">Blog</a></li>
              <li><a href="contact.php" class="action_btn">Contact Us</a></li>
              
            </div>


            <script>
                const toggleBtn = document.querySelector('.toggle_btn')
                const toggleBtnIcon = document.querySelector('.toggle_btn i')
                const dropDownMenu = document.querySelector('.dropdown_menu')
        
                toggleBtn.onclick = function () {
                    dropDownMenu.classList.toggle('open')
        
                    // CODE FOR THE 'X' MARK ON THE DROPDOWN MENU
                    const isOpen = dropDownMenu.classList('open')
        
                    toggleBtnIcon.classList = isOpen
                    ? 'fa-solid fa-xmark'
                    : 'fa-solid fa-bars'
                  }
            </script>
          </header>
  
       


       <div class="hero">
        <div class="heading">
            <h1>About Us</h1>
        </div>
        <div class="container">
            <div class="hero-content">
                <h2>Welcome to Our Website</h2>
                <p>At JK Travel Trails, we are passionate about crafting unforgettable travel experiences that leave lasting memories.
                    Founded with a vision to inspire exploration and adventure, our journey began with the belief that every trail tells a story.
                    Our team is dedicated to curating unique and immersive travel adventures that capture the essence of discovery and wonder.
                    With a commitment to excellence and a focus on customer satisfaction, we strive to create meaningful connections between travelers and the world around them.
                    From breathtaking landscapes to cultural immersion, our goal is to ignite your sense of adventure and leave you with memories to cherish for a lifetime.
                    Join us as we embark on a journey of exploration, discovery, and connection. Together, let's create memories and craft trails that inspire and delight.
                    Welcome to JK Travel Trails—where every journey is an unforgettable adventure. Creating memories, Crafting Trails
                </p>
            </div>
            
            <div class="hero-image">
                <img src="photos murchison/coasterwindow.jpg">
            </div>

        </div>

        <div class="container">
            <div class="hero-content">
              <h2>Our Story</h2>
              <p>
                At JK Travel Trails, our journey began in September of last year, fueled by an unwavering love for adventure and a passion for creating unforgettable memories.
                What started as a small initiative among friends has rapidly grown into a dedicated tours and travel company, committed to sharing the beauty and excitement of
                Uganda and beyond with our clients.<br>
                Our inspiration came from the simple joy of exploring new places and the desire to bring those experiences to others. Each trip we organized for friends and family
                sparked a deeper commitment to turning this passion into a professional venture. We recognized a need for personalized, memorable travel experiences and set out to fill that gap.<br>
                From the breathtaking landscapes to the rich cultural heritage, our trips are designed to immerse you in the heart of each destination. We believe that travel is more than just seeing
                new places – it’s about experiencing the world in ways that enrich your life and create lasting bonds.<br>
                Join us on this incredible journey. With JK Travel Trails, adventure awaits around every corner, and we're here to ensure that every moment is a memory you'll cherish forever.
              </p>
            </div>
            <div class="hero-image">
              <img src="others/tourist-sitting-phu-sub-lek-viewpoint-sunset-lopburi-thailand.jpg" style="height: 450px;">
            </div>
        </div>
        <!-- <p>
            <i class="fa-brands fa-x-twitter"></i>
            <i class="fa-brands fa-instagram"></i>
            <i class="fa-brands fa-facebook-f"></i>
            <i class="fa-brands fa-linkedin"></i>
            <i class="fa-brands fa-whatsapp"></i>
            <i class="fa-brands fa-youtube"></i>
        </p> -->
       </div>
       

       <footer>
            <div class="footer-grid">
              <div class="footer-left">
                <h3>Connect with US</h3>
                <p>Write to us on <a href="mailto:inquiries@jktaveltrails.com">enquiries@jktaveltrails.com</a> or send us a message
                  via the form on our <a href="contact.php">contact us page</a>. <br>
                  You can call Us on:<br>
                  <strong>Uganda:</strong> +256 (0) 780 433 746<br>
                  <strong>Uganda:</strong> +256 (0) 705 145 554<br>
                  You can also chat to one of our sales consultants via our Lets Chat
                  button.          
                </p>            
                <p class="socials-footer">
                  <a href="https://x.com/jktraveltrails"><i class="fa-brands fa-x-twitter"></i></a>
                  <a href="https://www.instagram.com/jktraveltrails?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="><i class="fa-brands fa-instagram"></i></a>
                  <a href="https://wa.me/256780433746"><i class="fa-brands fa-whatsapp"></i></a>
                  <a href="https://www.youtube.com/channel/UCjvwDzr3z6bqXnNsc8_7VDw"><i class="fa-brands fa-youtube"></i></a>
                </p>
              </div>
                  <!--footer menu-->
              <div class="footer-middle">
                <h3>Quick links</h3><br>
              <div class="link-container">
                <a href="home.php">Home</a>
                <a href="AboutUs.php">About</a>
                <a href="safarisUganda.php">Safaris</a>
                <a href="experiences.php">Experiences</a>
                <a href="contact.php">Contact</a>
                <a href="blog.php">Blog</a>
              </div><br>
            </div>
            <div class="footer-right">
              <h3>Useful information</h3><br>
              <div class="link-container">
                <a href="faqs.php">Frequently Asked Questions</a>
                <a href="terms-and-conditions.php">Terms and conditions</a>
                <a href="privacy-policy.php">Privacy Policy</a>
                <a href="protection.php">Your Protection</a>
                <a href="payment.php">Make a Payment</a>
                <a href="mailto:inquiries@jktraveltrails.com">New Question</a>
              </div>
            </div>
            </div>
                
          <div class="footer-bottom">
          <hr> <hr>
          <p class="footer-words">copyright © <script>document.write(new Date().getFullYear())</script> <strong>JK Travel Trails. </strong>All Rights Reserved</p>
          </div>     
          </footer>
        
    </body>
</html>