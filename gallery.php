<!DOCTYPE html>
<html>
    <head>
        <title>Gallery | JK Travel Trails</title>
        <link rel="icon" type="image/x-icon" href="Logos/JK TRAVELS.png">

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="styles/gallery.css">
        <link rel="stylesheet" href="styles/footer.css">
        <link rel="stylesheet" href="styles/header.css">
        <link rel="stylesheet" href="styles/general.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">



        <style>
            .header {
                background-image: url(styles/background/traveller-sitting-rock-holding-camera-take-photo-doi-pha-mon-mountains-chiang-rai-thailand.jpg);
                background-size: cover;
                background-position: left;
                background-repeat: no-repeat;
                height: 300px;
                position: static;
                right: 0;
                left: 0;
                top: 0;
                padding: 4px;
                z-index: 50;
                position: relative;
            }
        </style>
    </head>
    <body class="gallery-body">

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


        <div class="container">
            <div class="heading">
                <h3>Photo <span>Gallery</span></h3>
            </div>

            <div class="full-img" id="fullImgBox">
                <img src="gallery/gallery (1).jpg" id="fullImg">
                <span onclick="closefullImg()">X</span>
            </div>
            <div class="box">

                <div class="dream">
                    <img src="gallery/gallery (1).jpg" onclick="openfullImg(this.src)">
                     <img src="gallery/gallery (2).jpg" onclick="openfullImg(this.src)">
                      <img src="gallery/gallery (3).jpg" onclick="openfullImg(this.src)">
                       <img src="gallery/gallery (4).jpg" onclick="openfullImg(this.src)">
                        <img src="gallery/gallery (5).jpg" onclick="openfullImg(this.src)">
                         
                </div>

                <div class="dream">
                    <img src="gallery/gallery (19).jpg" onclick="openfullImg(this.src)">
                     <img src="gallery/gallery (7).jpg" onclick="openfullImg(this.src)">
                      <img src="gallery/gallery (8).jpg" onclick="openfullImg(this.src)">
                       <img src="gallery/gallery (9).jpg" onclick="openfullImg(this.src)">
                        <img src="gallery/gallery (10).jpg" onclick="openfullImg(this.src)">
                         
                </div>

                <div class="dream">
                    <img src="gallery/gallery (11).jpg" onclick="openfullImg(this.src)">
                     <img src="gallery/gallery (12).jpg" onclick="openfullImg(this.src)">
                      <img src="gallery/gallery (17).jpg" onclick="openfullImg(this.src)">
                       <img src="gallery/gallery (14).jpg" onclick="openfullImg(this.src)">
                        <img src="gallery/gallery (15).jpg" onclick="openfullImg(this.src)">
                         
                </div>
            </div>
        </div>
        <script>
            var fullImgBox = document.getElementById ("fullImgBox");
            var fullImg = document.getElementById ("fullImg");

            function openfullImg(pic){
                fullImgBox.style.display = "flex";
                fullImg.src = pic;
            }

            function closefullImg (){
                fullImgBox.style.display = "none";
            }
        </script>

        <div class="google-photo-link">
            <a href="https://drive.google.com/drive/folders/15PWtRbYLXVoEPEAvY69CBYtOG31D3tCK?usp=drive_link" target="_blank">Unlocking Murchison Falls</a>
            <a href="https://drive.google.com/drive/folders/1oy81cnk_OVfZLVDGdMN-mOmp5hHwlyL1?usp=drive_link" target="_blank">Unlocking Kabale - Kisoro</a>
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