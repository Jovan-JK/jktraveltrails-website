<!DOCTYPE html>
<html>
    <head>
        <title>Safaris Uganda | JK Travel Trails</title>
        <link rel="icon" type="image/x-icon" href="Logos/JK TRAVELS.png">


        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="styles/styles.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
        />
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    </head>
    <body>

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



        <section class="tours" id="tours">
            <h6 class="sub-heading">&#8226; Domestic Tours</h6>
            <h2 class="heading">Ugandan tours</h2>
            <div class="box-container">

              <div class="box">
                <img src="photos murchison/falls.jpg">
                <div class="content">
                  <h3>3-Day Murchison Falls Tour</h3>
                  <p>Discover the untamed beauty of Uganda's largest national park, home to iconic wildlife,
                    thundering waterfalls, and picturesque landscapes.</p>
                  <a href="contact.php" class="Tbtn">Ask about this safari</a>
                </div>
              </div>

              <div class="box">
                <img src="others/group-colorful-birds-are-flying-formation-with-one-being-flown-by-another.jpg">
                <div class="content">
                  <h3>15-Day Birding & Wildlife Tour</h3>
                  <p>Seek out 1000 plus birds on this Uganda safari<br>Request for Quote</p>
                  <a href="#" class="Tbtn">Ask about this safari</a>
                </div>
              </div>

              <div class="box">
                <img src="others/3d-rendering-gorilla-portrait.jpg">
                <div class="content">
                  <h3>3-Day Gorillas & Lake Bunyonyi</h3>
                  <p>Track gorillas in Bwindi and cruise on Lake Bunyonyi</p>
                  <a href="#" class="Tbtn">Ask about this safari</a>
                </div>
              </div>

              <div class="box">
                <img src="others/FotoJet7.jpg">
                <div class="content">
                  <h3>10-Day Trek in the Rwenzori's</h3>
                  <p>Trek to Margherita, Hunwick's Camp through MT. Rwenzori National Park</p>
                  <a href="#" class="Tbtn">Ask about this safari</a>
                </div>
              </div>

              <div class="box">
                <img src="others/masai jump.jpg">
                <div class="content">
                  <h3>5-Day African Culture exploration</h3>
                  <p>Discover African culture in different parts of Uganda</p>
                  <a href="#" class="Tbtn">Ask about this safari</a>
                </div>
              </div>

              <div class="box">
                <img src="others/girl-raft.jpg">
                <div class="content">
                  <h3>3-Day Adventure & Relaxation</h3>
                  <p>Embark on a thrilling water rafting adventure, ziplining course, boat cruise,
                    water massage and
                    peacefulforest walks.</p>
                  <a href="#" class="Tbtn">Ask about this safari</a>
                </div>
              </div>

              <div class="box">
                <img src="others/big-lion-laying-ground-yawning.jpg">
                <div class="content">
                  <h3>5-Day Big five hunt</h3>
                  <p>This extraordinary tour offers you the chance to witness the majestic Big Five—lion, leopard,
                    rhinoceros, elephant, and Cape buffalo—in their natural environment.</p>
                  <a href="#" class="Tbtn">Ask about this safari</a>
                </div>
              </div>

              <div class="box">
                <img src="others/gorilla-sitting-grassy-field.jpg">
                <div class="content">
                  <h3>10-Day Primates of the great rift vallery safari</h3>
                  <p>Discover the primates of the great rift valley.</p>
                  <a href="#" class="Tbtn">Ask about this safari</a>
                </div>
              </div>
            </div>
            <a href="#" class="btn" style="background-color: red; ">Book Now &rarr;</a>


          </section>

          <!-- Footer -->
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
