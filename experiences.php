<!DOCTYPE html>
<html>
    <head>
        <title>Experiences | JK Travel Trails</title>
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
              <li><a href="gallery.php">Gallery</a></li>
              <li><a href="blog.php">Blog</a></li>
              <li><a href="contact.php" class="action_btn">Contact Us</a></li>
              
            </div>
  
          </header>
  
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


       <div class="hero">
        <div class="heading">
            <h1>Tailor-Made experiences</h1>
        </div>
        <div class="container">
            <div class="hero-content">
                <h2>Photography Safaris</h2>
                <p>Capture the beauty of Uganda like never before with our specialized Photography Safaris.
                    Designed for both amateur and professional photographers, these unique tours provide
                    unparalleled opportunities to photograph stunning landscapes, diverse wildlife, and
                    vibrant cultures. Whether you're aiming to snap the perfect shot of a majestic lion in
                    the wild or the serene beauty of a sunset over the Nile, our expert guides will take you
                    to the best locations and offer tips to enhance your photography skills. Join us for an
                    unforgettable journey where every moment is a picture-perfect adventure.
                </p>
            </div>
            
            <div class="hero-image">
                <img src="others/woman-8007247_1280.jpg">
            </div>

        </div>

        <div class="container">
            <div class="hero-image">
                <img src="others/three-african-men-with-red-blankets-wrapped-around-them.jpg">
            </div>


            <div class="hero-content">
                <h2>Culture exploration</h2>
                <p>Dive into the heart of Uganda's rich and diverse cultural heritage with our carefully curated culture exploration tours. Experience the vibrant traditions,
                    captivating stories, and unique lifestyles of various communities. From traditional dances and music to local crafts and cuisine, our tours offer an immersive
                    journey that connects you deeply with the spirit of the land and its people. Join us in celebrating and preserving Uganda’s cultural treasures while creating
                    unforgettable memories.
                </p>
            </div>

        </div>

        <div class="container">
            <div class="hero-content">
                <h2>fishing adventures</h2>
                <p>Embark on an exhilarating fishing adventure with JK Travel Trails! Uganda’s pristine lakes and rivers offer a paradise for anglers, from beginners
                    to seasoned fishermen. Experience the thrill of casting your line into the waters of Lake Victoria or the Nile River, known for their abundant fish
                    species, including the legendary Nile perch and tilapia. Whether you're looking to catch your first fish or aiming for a record-breaker, our guided
                    fishing trips promise an unforgettable experience in some of the most beautiful and serene settings. Join us for a day of relaxation, excitement,
                    and great catches
                </p>
            </div>
            
            <div class="hero-image">
                <img src="others/side-view-fisher-standing-bank-lake-river-looking-his-fishing-rod-hands-fishing-sunset-beautiful-nature-wearing-green-t-shirt-trousers.jpg">
            </div>

        </div>
        
       </div>

       <button class="btn" style="justify-content: center; background-color: red; margin-left: 50px; margin-bottom: 40px;">
        <a href="booking.html" style="color: white;">Start your Experience</a>
    </button>
       

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