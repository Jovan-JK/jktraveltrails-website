<!DOCTYPE html>
<html>
    <head>
        <title>Your Protection | JK Travel Trails</title>
        <link rel="icon" type="image/x-icon" href="Logos/JK TRAVELS.png">

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="styles/styles.css">
        <!-- <link rel="stylesheet" href="styles/footer.css"> -->
        <!-- <link rel="stylesheet" href="styles/header.css"> -->
        <!-- <link rel="stylesheet" href="styles/general.css"> -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    </head>
    <body>

        <!-- Header -->
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




        <main>
        <div class="title">
            <h1>Your Protection</h1>
            <p>.......UPDATED: 04TH AUGUST 2024</p>
        </div>

        <div class="protection-content">
            <p>At JK Travel Trails, your safety and security are our top priorities. We understand that peace of mind is crucial when traveling,
                which is why we go above and beyond to ensure your protection throughout your journey with us.<br><br> This page is dedicated to outlining
                the measures we take to safeguard your personal information, financial transactions, and overall travel experience. Discover the
                steps we implement to provide you with a secure and worry-free adventure, so you can focus on making memories that last a lifetime.
            </p><br>
            <h2>Insurance</h2><br>
            <P> <strong>It is a condition of booking that all clients must have, and must demonstrate to the
                company prior to their departure, adequate insurance for the duration of the tour. </strong> <br><br>
                Such insurance should cover personal injury; medical expenses; repatriation in the event of accident,
                illness or death; cancellation or curtailment of the tour by either side and loss of, damage to, or
                theft of the clients’ personal property. Activities with a greater inherent risk, such as mountaineering,
                trekking, animal tracking on foot and white-water rafting should be covered if applicable. Theft, personal
                injury or any disruption to arrangements should be reported immediately to the company. It is the client’s
                responsibility to ensure they comply with the terms and condition of their travel insurance policy.<br><br>
                For travel insurance for those residing in the US CSA Freestyle Plan, MedjetAssist or Global Rescue are recommended.<br><br>
                Travel insurance for those wishing to use a UK Insurance company may be arranged through our Insurance brokers Campbell
                Irvine by applying on line at www.campbellirvine.com or by contacting them on 020 7938 1734 or via email at <a href="mailto:info@campbellirvine.com">info@campbellrvine.</a>
                The Insurance is underwritten by ACE European Group. Campbell Irvine ltd and ACE European Group are both authorized and regulated by
                the Financial Conduct Authority.
            </P>
        </div>

        <!-- Testimonial End -->
        
                  
        <!-- News letter -->
        <div class="Nl-container">
            <form action="">
              <h1>Join Our Newsletter</h1>
              <p>Stay in touch, Connected and Updated</p>
              <div class="email-box">
                <i class="fa-solid fa-envelope"></i>
                <input class="tbox" type="email" name="" value="" placeholder="Enter your email" id="" required>
                <button class="Nl-btn" type="submit" name="button" value="submit">Subscribe</button>
              </div>
            </form>
          </div>
  
          <!-- News letter End -->
  
        </main>
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