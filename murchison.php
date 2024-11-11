<!DOCTYPE html>
<html>
    <head>
        <title>3 Day Murchison Falls | JK Travel Trails</title>
        <link rel="icon" type="image/x-icon" href="Logos/JK TRAVELS.png">


        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="styles/styles.css">
        <link rel="stylesheet" href="/styles/styles.css">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
        />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    </head>
    <body class="mbody" style="background-color: #163c07;">

        <!-- Header -->
            <header class="header">
              <div class="navbar">
                <a href="home.php"><img class="logo" src="Logos/JK TRAVELS.png"></a>
                <ul class="links">
                  <li><a href="home.php">Home</a></li>
                  <li><a href="AboutUs.php">About</a></li>
                  <li><a href="safarisUganda.php">Safaris</a></li>
                  <li><a href="experiences.php">Experiences</a></li>
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
          <!-- End -->
           <main>

            <div class="background-section">
              <h1 style="color: #fff; font-size: 30px;">3 Day Murchison Falls National Park Tour</h1>
          </div>
            
            <div class="timeline">

                <div class="mcontainer left-mcontainer">
                  <img src="Logos/JK TRAVELS.png">
                    <div class="text-box">
                        <h2>DAY 1</h2>
                        <small>Arrival and Travel to Murchison Falls National Park</small>
                        <p>Your journey to Murchison Falls National Park begins with your arrival at Entebbe International Airport,
                          where our driver-guide will warmly welcome you and provide a brief overview of your safari. From the airport,
                          you’ll head north through the scenic Ugandan countryside, stopping at Ziwa Rhino Sanctuary for rhino tracking,
                          giving you a unique opportunity to see these majestic creatures up close. After the stop, you'll continue your
                          drive to Murchison Falls, arriving at your lodge in time for lunch. After some rest, embark on a late afternoon
                          game drive where you’ll encounter animals such as elephants, buffalos, giraffes, and various antelope species.
                          The day ends with dinner and an overnight stay at your lodge, giving you a chance to unwind and take in the
                          peaceful sounds of the African wilderness.</p>
                            <span class="left-mcontainer-arrow"></span>
                    </div>
                </div>

                <div class="mcontainer right-mcontainer">
                  <img src="Logos/JK TRAVELS.png">
                  <div class="text-box">
                      <h2>DAY 2</h2>
                      <small>Game Drive and Nile River Cruise</small>
                      <p>On your second day, rise early for a morning game drive on the northern bank of the park, where the wildlife is most active.
                        This is your best chance to spot big cats like lions and leopards, as well as hyenas and a variety of herbivores such as giraffes,
                        antelopes, and Uganda kobs. After an exciting morning, return to the lodge for a late breakfast or early lunch. In the afternoon,
                        head out for a thrilling boat cruise along the Nile, which takes you to the base of the mighty Murchison Falls. As you glide along
                        the river, you’ll see hippos, crocodiles, elephants, and a rich variety of birdlife, including the rare and elusive shoebill stork.
                        After the cruise, you’ll have the opportunity to hike to the top of the falls, where you can witness the powerful surge of the Nile
                        as it forces its way through a narrow gorge. Enjoy the breathtaking views before returning to your lodge for dinner and another
                        peaceful night.</p>
                      <span class="right-mcontainer-arrow"></span>
                  </div>
              </div>

              <div class="mcontainer left-mcontainer">
                <img src="Logos/JK TRAVELS.png">
                <div class="text-box">
                    <h2>DAY 3</h2>
                    <small>Return to Kampala</small>
                    <p>After a leisurely breakfast at the lodge, you can choose to either relax or partake in an optional nature walk around the area.
                      Later in the morning, you’ll begin your journey back to Kampala, with a stop in Masindi for lunch. As you drive through the
                      picturesque countryside, you can reflect on the unforgettable wildlife encounters and natural beauty you experienced during your
                      time at Murchison Falls. You’ll arrive back in Kampala in the late afternoon, marking the end of your 3-day safari adventure.</p>
                    <span class="left-mcontainer-arrow"></span>
                </div>
            </div>

            <div class="mcontainer right-mcontainer">
              <img src="Logos/JK TRAVELS.png">
              <div class="text-box">
                  <h2>Don't Miss Out on a Once-in-a-Lifetime Adventure!</h2>
                  <small>Start your journey now</small>
                  <p>The roar of the mighty Murchison Falls, the sight of majestic wildlife in their natural habitat, and the serenity of the Nile River await you.
                    Whether it's witnessing the big cats in action or cruising along the Nile with hippos and crocodiles by your side, every moment is unforgettable.
                    Book now and take the first step toward your dream safari—adventure, wonder, and memories that will last a lifetime are just one click away!</p>
                  <span class="right-mcontainer-arrow"></span>
              </div>
          </div>
          <a href="contact.php" class="action_btn">Book Now</a>
            </div>
            
  
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