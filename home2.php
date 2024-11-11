<!DOCTYPE html>
<html>
    <head>
        <title>Home | JK Travel Trails</title>
        <link rel="icon" type="image/x-icon" href="Logos/JK TRAVELS.png">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="styles/about.css">
        <!-- <link rel="stylesheet" href="styles/contact.css"> -->
        <link rel="stylesheet" href="styles/header.css">
        <link rel="stylesheet" href="styles/services.css">
        <link rel="stylesheet" href="styles/slider.css">
        <link rel="stylesheet" href="styles/testimonials.css">
        <link rel="stylesheet" href="styles/destination.css">
        <link rel="stylesheet" href="styles/footer.css">
        <link rel="stylesheet" href="styles/general.css">
        <link rel="stylesheet" href="styles/forms.css">
        <link rel="stylesheet" href="styles/experience.css">
        <link rel="stylesheet" href="styles/park.css">
        <link rel="stylesheet" href="styles/park.css">
        <link rel="stylesheet" href="styles/photoalcove.css">


        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
        />

        <script src="https://kit.fontawesome.com/c41c57a0d9.js" crossorigin="anonymous"></script>
        <script defer src="JK.js"></script>
    </head>
    <body class="body" style="font-family: Roboto">

        <header class="header">
          <div class="navbar">
            <img class="logo" src="Logos/JK TRAVELS.png">
            <ul class="links">
              <li><a href="home.html">HOME</a></li>
              <li><a href="AboutUs.html">ABOUT</a></li>
              <li><a href="hero">SERVICES</a></li>
              <li><a href="popdestinations.html">DESTINATION</a></li>
              
            </ul>
            <a class="action_btn2" aria-label="chat on WhatsApp" href="https://wa.me/256780433746"> <i class="fa-brands fa-whatsapp"></i> Lets Chat</a>
            <a href="contact.html" class="action_btn">Contact Us</a>
            <div class="toggle_btn">
              <img class="toggle_btn" src="Logos/bars-solid.svg">
            </div>
          </div>

          <div class="dropdown_menu">
            <li><a href="home.html">HOME</a></li>
            <li><a href="AboutUs.html">ABOUT</a></li>
            <li><a href="hero">SERVICES</a></li>
            <li><a href="popDestinations.html">DESTINATION</a></li>
            <li><a href="contact.html" class="action_btn">Contact Us</a></li>
            
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
            : 'Logos/bars-solid.svg'
        }
     </script>
        
       
      <!--Slider code-->
        <!-- <div class="slideshow-container">

            <div class="mySlides fade" style=" flex: 1;">
            
              <img src="photos murchison/falls.jpg">
              <div class="slider-text">
                <h2 class="slider-heading">Start Your<span style="color: red;"> Adventure</span> with<br> <span style="color: red;">J</span><span style="color: black;">K</span> Travel Trails</h2>
                <p>Unlock Hidden Gems Around the Globe</p>
              </div>
            
            </div>

            <div class="mySlides fade" style=" flex: 1;">
            
              <img src="photos murchison/elephants.jpg">
              <div class="slider-text">
                <h2 class="slider-head">Start Your<span style="color: red;"> Adventure</span> with <span style="color: red;">J</span><span style="color: black;">K</span> Travel Trails</h2>
                <p>Unlock Hidden Gems Around the Globe</p>
              </div>
            
            </div>

            <div class="mySlides fade" style=" flex: 1;">
            
              <img src="photos murchison/giraffe.jpg">
              <div class="slider-text">
                <h2 class="slider-head">Start Your<span style="color: red;"> Adventure</span> with <span style="color: red;">J</span><span style="color: black;">K</span> Travel Trails</h2>
                <p>Unlock Hidden Gems Around the Globe</p>
              </div>
            
            </div>

            <div class="mySlides fade" style=" flex: 1;">
            
              <img src="others/3d-rendering-gorilla-portrait.jpg">
              <div class="slider-text">
                <h2 class="slider-head">Start Your<span style="color: red;"> Adventure</span> with <span style="color: red;">J</span><span style="color: black;">K</span> Travel Trails</h2>
                <p>Unlock Hidden Gems Around the Globe</p>
              </div>
            
            </div>

            <div class="mySlides fade" style=" flex: 1;">
            
              <img src="photos murchison/buffalos.jpg">
              <div class="slider-text">
                <h2 class="slider-head">Start Your<span style="color: red;"> Adventure</span> with <span style="color: red;">J</span><span style="color: black;">K</span> Travel Trails</h2>
                <p>Unlock Hidden Gems Around the Globe</p>
              </div>
            
            </div>

            <div class="mySlides fade" style=" flex: 1;">
            
              <img src="photos murchison/Monkeyeating.jpg">
              <div class="slider-text">
                <h2 class="slider-head">Start Your<span style="color: red;"> Adventure</span> with <span style="color: red;">J</span><span style="color: black;">K</span> Travel Trails</h2>
                <p>Unlock Hidden Gems Around the Globe</p>
              </div>
            
            </div>

            <div class="mySlides fade" style=" flex: 1;">
            
              <img src="photos murchison/sunset.jpg">
              <div class="slider-text">
                <h2 class="slider-head">Start Your<span style="color: red;"> Adventure</span> with <span style="color: red;">J</span><span style="color: black;">K</span> Travel Trails</h2>
                <p>Unlock Hidden Gems Around the Globe</p>
              </div>
            
            </div>

        </div>
        <br>

        <div style="text-align:center">
          <span class="dot"></span> 
          <span class="dot"></span> 
          <span class="dot"></span>
          <span class="dot"></span>
          <span class="dot"></span>
          <span class="dot"></span> 
        </div>

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
          if (slideIndex > slides.length) {slideIndex = 1}    
          for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
          }
          slides[slideIndex-1].style.display = "block";  
          dots[slideIndex-1].className += " active";
          setTimeout(showSlides, 6000); // Change image every 2 seconds
        }
        </script> -->
        
      <!--End of slider coder-->
      
      <main>

        <section class="home" id="home">
          <div class="content">
            <h3>enjoy the wonderful <br>
            adventure of the <br> animals</h3>
            <a href="#" class="btn">JK Travel Trails</a>
          </div>

            <img src="others/bottom image.png" class="wave">

        </section>



        <!-- <h1 class="about-heading">ABOUT US</h1>
        <div class="about-grid">
          <div class="about-pic-section">
            <img class="about-pic" src="photos murchison/coasterwindow.jpg">
          </div>
          
          <div class="about-words">
            <p>
              At JK Travel Trails, we are passionate about crafting unforgettable travel experiences that leave lasting memories.
              Founded with a vision to inspire exploration and adventure, our journey began with the belief that every trail tells a story.
              Our team is dedicated to curating unique and immersive travel adventures that capture the essence of discovery and wonder.
              With a commitment to excellence and a focus on customer satisfaction, we strive to create meaningful connections between travelers and the world around them.
              From breathtaking landscapes to cultural immersion, our goal is to ignite your sense of adventure and leave you with memories to cherish for a lifetime.
              Join us as we embark on a journey of exploration, discovery, and connection. Together, let's create memories and craft trails that inspire and delight.
              Welcome to JK Travel Trails—where every journey is an unforgettable adventure. Creating memories, Crafting Trails
            </p>
            <a href="AboutUs.html"><button>Read More >></button></a>
          </div>
        </div> -->
        <!--Services section--><!--
        <div class="services-section">
            <div class="heading-section">
              <div class="service-heading-div">
                <h6 class="sub-heading">&#8226; Traveling Services</h6>
                <h1 class="services-heading">OUR SERVICES</h1>
              </div>
              <p class="service-intro">
                At JK Travel Trails, we're dedicated to crafting unforgettable travel experiences tailored to your interests and preferences.
                Explore our diverse range of services designed to inspire, excite, and delight adventurers of all kinds.
                From immersive cultural tours to exhilarating outdoor adventures, we have something for every traveler.
                Discover the world with us and let your journey begin!
              </p>
            </div>
            <div class="service-grid">
              <div class="service-preview">
                <div class="thumbnail-row">
                    <img class="thumbnail" src="others/tourist van.jpg">
                    <div class="service-title">
                        CAR RENTAL
                    </div>
      
                </div>
                <div class="service-info-grid">
                    <div class="service-info">
                        <p class="service-about">
                          Explore with Ease: Rent our reliable and comfortable tourist vehicles for your next adventure.
                          Enjoy the freedom to discover new destinations at your own pace, with the convenience and reliability of JK Travel Trails' vehicle rentals. 
                        </p>
                        <button>
                          Read More >>
                        </button>
                    </div>
                </div>
              </div>

              <div class="service-preview">
                <div class="thumbnail-row">
                    <img class="thumbnail" src="others/spacious-hotel-room-with-rug.jpg">
                    <div class="service-title">
                        HOTELS
                    </div>
      
                </div>
                <div class="service-info-grid">
                    <div class="service-info">
                        <p class="service-about">
                          Seamless Accommodation Solutions: Simplify your travel planning with JK Travel Trails' hotel booking service.
                          Whether you're seeking luxury resorts, cozy boutique hotels, or budget-friendly accommodations, we've got you covered. 
                        </p>
                        <button>
                          Read More >>
                        </button>
                    </div>
                </div>
              </div>

              <div class="service-preview">
                <div class="thumbnail-row">
                    <img class="thumbnail" src="others/african-american-couple-loading-baggage-vehicle-leave-holiday-vacation-trip-partners-travelling-by-car-with-luggage-suitcase-bags-go-summer-adventure-cityscape.jpg">
                    <div class="service-title">
                        FAMILY TOUR
                    </div>
      
                </div>
                <div class="service-info-grid">
                    <div class="service-info">
                        <p class="service-about">
                          Family Adventures Await: Embark on unforgettable journeys tailored to the whole family with JK Travel Trails' family tours.
                          Our family-friendly itineraries are designed to create cherished memories while catering to the needs and interests of every family member.
                        </p>
                        <button>
                          Read More >>
                        </button>
                    </div>
                </div>
              </div>
            </div>
        </div>-->
         
        <!-- Popular Destinations Home --> <!--
        <div class="destinations-home">
          <h6 class="sub-heading">&#8226; Top Picks</h6>
            <h1 class="destination-heading">POPULAR DESTINATIONs</h1>
            <p class="destination-intro">
              Discover the most sought-after travel destinations with JK Travel Trails.
              Dive into a world of breathtaking landscapes, rich cultural heritage, and unforgettable experiences.
              Whether you're dreaming of pristine beaches, ancient ruins, or vibrant cities, our curated list of popular destinations
              has something for every type of traveler. Let us guide you to the wonders of the world and embark on the journey of a lifetime
            </p>
            <div class="destination-grid">
              <div class="destination-preview">
                <div class="thumbnail-row">
                    <img class="thumbnail" src="others/closeup-shot-two-zebras-cuddling.jpg">
                    <div class="destination-title">
                        National Parks
                    </div>
      
                </div>
                <div class="destination-info-grid">
                    <div class="destination-info">
                        <p class="destination-about">
                          Immerse Yourself in Nature's Wonders: Explore the breathtaking beauty of nature with JK Travel Trails' National Park Tours.
                          Our curated itineraries take you on a journey through pristine landscapes, diverse wildlife, and awe-inspiring ecosystems.
                        </p>
                        <lable>
                          <a href="popDestinations.html">Read More></a>
                        </lable>
                    </div>
                </div>
              </div>

              <div class="destination-preview">
                <div class="thumbnail-row">
                    <img class="thumbnail" src="others/high-angle-beautiful-buildings-nighttime.jpg">
                    <div class="destination-title">
                        Cities
                    </div>

                </div>
                <div class="destination-info-grid">
                    <div class="destination-info">
                        <p class="destination-about">
                          Discover the Heartbeat of Vibrant Cities: Dive into the rich tapestry of culture, history, and excitement with JK Travel Trails' City Tours.
                          Our expertly crafted itineraries guide you through the bustling streets, iconic landmarks, and hidden gems of vibrant cities around the world. 
                        </p>
                        <lable>
                          <a href="popDestinations.html">Read More></a>
                        </lable>
                    </div>
                </div>
              </div>

              <div class="destination-preview">
                <div class="thumbnail-row">
                    <img class="thumbnail" src="others/building-pattern.jpg">
                    <div class="destination-title">
                        Accommodation
                    </div>
      
                </div>
                <div class="destination-info-grid">
                    <div class="destination-info">
                        <p class="destination-about">
                          Your Home Away from Home: Experience comfort, convenience, and hospitality with JK Travel Trails' accommodation services.
                          We offer a curated selection of accommodation options ranging from luxurious resorts to cozy guesthouses, ensuring that every traveler finds their perfect retreat. 
                        </p>
                        <lable>
                          <a href="popDestinations.html">Read More></a>
                        </lable>
                    </div>
                </div>
              </div>     
            </div>
        </div> -->
        <!--FEATURED EXPERIENCES--><!--
        <h3 class="experience-heading">FEATURED EXPERIENCES</h3>
        <div class="experience-container">
          
            <div class="experience-pic">
              <img src="others/mountain-gorillas-gorilla-beringei-beringei.jpg">
            </div>
            <div class="experience-about">
              <h4>Gorilla Tracking</h4>
              <p>
              With fewer than 1004 mountain gorillas that still exist on earth today,
              Uganda is home to more than half of all these massive creatures making it
              one of the only three countries in the world where mountain gorilla trekking is conducted.
              The are 18 gorilla families that have been habituated and already set for tourism purposes.
              </p>
            </div>-->
          <!--National Parks-->
          <div class="nationalparks-home">
            <h6 class="sub-heading">&#8226; Wildlife Habitats</h6>
              <h1>National Parks</h1>
              <p class="park-intro">Welcome to our National Parks page, where breathtaking landscapes and awe-inspiring natural
                wonders await your exploration. Immerse yourself in the rich biodiversity and captivating
                beauty of some of the world's most iconic protected areas. From the towering peaks of majestic
                mountains to the serene tranquility of lush forests, each national park offers a unique adventure
                waiting to be discovered. Join us as we embark on a journey through these pristine landscapes, where
                every trail leads to unforgettable experiences and cherished memories.</p>
              <div class="park-grid">
                <div class="park-preview">
                  <div class="park-thumbnail-row">
                      <img class="park-thumbnail" src="others/falls.jpg">
                      <div class="park-title">
                          Murchison Falls National Park
                      </div>
        
                  </div>
                  <div class="park-info-grid">
                      <div class="park-info">
                          <p class="park-about">
                            Embark on a thrilling 3-day adventure to Murchison Falls National Park with JK Travel Trails.
                            Discover the untamed beauty of Uganda's largest national park, home to iconic wildlife, thundering
                            waterfalls, and picturesque landscapes.
                          </p>
                          <lable class="labels">
                            <a href="murchison.html">Read More></a>
                          </lable>
                      </div>
                  </div>    
                </div>

                <div class="park-preview">
                  <div class="park-thumbnail-row">
                      <img class="park-thumbnail" src="others/big-lion-laying-ground-yawning.jpg">
                      <div class="park-title">
                          Kidepo Valley
                      </div>
        
                  </div>
                  <div class="park-info-grid">
                      <div class="park-info">
                          <p class="park-about">
                            Embark on an extraordinary expedition to Kidepo Valley National Park with JK Travel Trails.
                            Delve into the remote wilderness of Uganda's hidden gem, where vast savannahs meet rugged
                            mountains and untouched landscapes. 
                          </p>
                          <lable class="labels">
                            <a href="#">Read More></a>
                          </lable>
                      </div>
                  </div>    
              </div>

              <div class="park-preview">
                <div class="park-thumbnail-row">
                    <img class="park-thumbnail" src="others/african-elephants-together-nature.jpg">
                    <div class="park-title">
                        Queen Elizabeth
                    </div>
      
                </div>
                <div class="park-info-grid">
                    <div class="park-info">
                        <p class="park-about">
                          Explore Uganda's most renowned wildlife reserve, where diverse ecosystems teem with iconic wildlife.
                          From thrilling game drives to scenic boat cruises along the Kazinga Channel, immerse yourself in the
                          natural splendor of this iconic park. Join us for an adventure filled with wildlife encounters and
                          breathtaking landscapes in Queen Elizabeth National Park! 
                        </p>
                        <lable class="labels">
                          <a href="#">Read More></a>
                        </lable>
                    </div>
                </div>    
              </div>

              <div class="park-preview">
                <div class="park-thumbnail-row">
                    <img class="park-thumbnail" src="others/3d-rendering-gorilla-portrait.jpg">
                    <div class="park-title">
                        Bwindi Impenetrable
                    </div>

                </div>
                <div class="park-info-grid">
                    <div class="park-info">
                        <p class="park-about">
                          Embark on an awe-inspiring adventure to Bwindi Impenetrable National Park with JK Travel Trails.
                          Explore the ancient misty forests of this UNESCO World Heritage Site, home to more than half of the
                          world's remaining mountain gorillas. Trek through lush vegetation, encounter diverse wildlife, and witness the magic of up-close gorilla encounters. 
                        </p>
                        <lable class="labels">
                          <a href="#">Read More></a>
                        </lable>
                    </div>
                </div>    
              </div>
              
              <div class="park-preview">
                <div class="park-thumbnail-row">
                    <img class="park-thumbnail" src="others/closeup-shot-two-zebras-cuddling.jpg">
                    <div class="park-title">
                        Lake Mburo
                    </div>

                </div>
                <div class="park-info-grid">
                    <div class="park-info">
                        <p class="park-about">
                          Join JK Travel Trails on a captivating journey to Lake Mburo National Park. Discover
                          the tranquil shores of this picturesque lake, surrounded by rolling hills and acacia
                          woodlands. Encounter diverse wildlife, from zebras and antelopes to hippos and crocodiles,
                          on thrilling game drives and boat safaris. Immerse yourself in the serene atmosphere and natural
                          wonders of Lake Mburo. 
                        </p>
                        <lable class="labels">
                          <a href="#">Read More></a>
                        </lable>
                    </div>
                </div>    
              </div>

              <div class="park-preview">
                <div class="park-thumbnail-row">
                    <img class="park-thumbnail" src="others/FotoJet7.jpg">
                    <div class="park-title">
                        Mountain Rwenzori
                    </div>

                </div>
                <div class="park-info-grid">
                    <div class="park-info">
                        <p class="park-about">
                          Known as the 'Mountains of the Moon,' this UNESCO World Heritage Site offers unparalleled trekking
                          experiences amidst stunning alpine landscapes and diverse ecosystems. Traverse lush forests, navigate
                          glacier-carved valleys, and summit some of Africa's highest peaks.  
                        </p>
                        <lable class="labels">
                          <a href="#">Read More></a>
                        </lable>
                    </div>
                </div>    
              </div>

              <div class="park-preview">
                <div class="park-thumbnail-row">
                    <img class="park-thumbnail" src="others/noble-silverback-gorilla-leader-its-closeknit-family-displaying-strength-intelligence.jpg">
                    <div class="park-title">
                        Mghahinga Gorillas
                    </div>

                </div>
                <div class="park-info-grid">
                    <div class="park-info">
                        <p class="park-about">
                          Join JK Travel Trails on an enchanting journey to Mgahinga Gorilla National Park.
                          Nestled in the Virunga Mountains, this biodiverse haven offers a rare opportunity
                          to encounter endangered mountain gorillas in their natural habitat. Trek through lush
                          forests, volcanic landscapes, and golden bamboo groves as you embark on a captivating
                          gorilla tracking adventure.  
                        </p>
                        <lable class="labels">
                          <a href="#">Read More></a>
                        </lable>
                    </div>
                </div>    
              </div>

              <div class="park-preview">
                <div class="park-thumbnail-row">
                    <img class="park-thumbnail" src="photos murchison/monkey.jpg">
                    <div class="park-title">
                        Kibale NP
                    </div>

                </div>
                <div class="park-info-grid">
                    <div class="park-info">
                        <p class="park-about">
                          Explore lush tropical forests teeming with a remarkable diversity of primates, including chimpanzees,
                          red colobus monkeys, and L'Hoest's monkeys. Experience the thrill of tracking chimpanzees through dense
                          vegetation and witness their playful antics in their natural habitat.   
                        </p>
                        <lable class="labels">
                          <a href="#">Read More></a>
                        </lable>
                    </div>
                </div>    
              </div>

            </div>
          </div>


          <div class="slideshow-container">

            <div class="mySlides fade" style=" flex: 1;">
            
              <img src="others/three-african-men-with-red-blankets-wrapped-around-them.jpg">
              <div class="slider-text">
                <h2 class="slider-heading">African Cultural Tour</h2>
                <p>Unlock Hidden Gems Around the Globe</p>
                <button class="Rbutton">
                  Read More
                </button>
                <button class="Bbutton">BOOK NOW</button>
              </div>
            
            </div>
  
            <div class="mySlides fade" style=" flex: 1;">
            
              <img src="others/three-african-men-with-red-blankets-wrapped-around-them.jpg">
              <div class="cultural-text">
                <h2 class="slider-head">African Cultural Tour</h2>
                <p>Unlock Hidden Gems Around the Globe</p>
                
                <button class="Rbutton">
                  Read More
                </button>
                <button class="Bbutton">BOOK NOW</button>
              </div>
            
            </div>
  
            <div class="mySlides fade" style=" flex: 1;">
            
              <img src="others/three-african-men-with-red-blankets-wrapped-around-them.jpg">
              <div class="slider-text">
                <h2 class="slider-head">African Cultural Tour</h2>
                <p>Unlock Hidden Gems Around the Globe</p>
                
                <button class="Rbutton">
                  Read More
                </button>
                <button class="Bbutton">BOOK NOW</button>
              </div>
            
            </div>
  
            <div class="mySlides fade" style=" flex: 1;">
            
              <img src="others/three-african-men-with-red-blankets-wrapped-around-them.jpg">
              <div class="slider-text">
                <h2 class="slider-head">African Cultural Tour</h2>
                <p>Unlock Hidden Gems Around the Globe</p>
                
                <button class="Rbutton">
                  Read More
                </button>
                <button class="Bbutton">BOOK NOW</button>
              </div>
            
            </div>
  
            <div class="mySlides fade" style=" flex: 1;">
            
              <img src="others/three-african-men-with-red-blankets-wrapped-around-them.jpg">
              <div class="slider-text">
                <h2 class="slider-head">African Cultural Tour</h2>
                <p>Unlock Hidden Gems Around the Globe</p>
                <button class="Rbutton">
                  Read More
                </button>
                <button class="Bbutton">BOOK NOW</button>
              </div>
            
            </div>
  
            <div class="mySlides fade" style=" flex: 1;">
            
              <img src="others/three-african-men-with-red-blankets-wrapped-around-them.jpg">
              <div class="slider-text">
                <h2 class="slider-head">African Cultural Tour</h2>
                <p>Unclok Hiden Gems Around the Globe</p>
                
                <button class="Rbutton">
                  Read More
                </button>
                <button class="Bbutton">BOOK NOW</button>
              </div>
            
            </div>
  
            <div class="mySlides fade" style=" flex: 1;">
            
              <img src="others/three-african-men-with-red-blankets-wrapped-around-them.jpg">
              <div class="slider-text">
                <h2 class="slider-head">African Cultural Tour</h2>
                <p>Unlock Hidden Gems Around the Globe</p>
                <button class="Rbutton">
                  Read More
                </button>
                <button class="Bbutton">BOOK NOW</button>
              </div>
            
            </div>
  
        </div>
        <br>
  
        <div style="text-align:center">
          <span class="dot"></span> 
          <span class="dot"></span> 
          <span class="dot"></span>
          <span class="dot"></span>
          <span class="dot"></span>
          <span class="dot"></span> 
        </div>
  
      


        <!--Gallery Home-->

        <div class="photos-home">
          <h6 class="sub-heading">&#8226; Visual Collection</h6>
            <h1 class="photoalcove-heading">Photo Alcove</h1>
              <p class="alcove-intro">
                Step into the vibrant world of adventure with our captivating gallery.
                Explore stunning visuals capturing the essence of our unforgettable journeys,
                each image a testament to the beauty and excitement awaiting you on your next expedition.
                Let the adventure begin
              </p>
            
              <div class="slider">

            
                <div class="slide-track">
        
        
                  <div class="slide">
                    <img src="gallery/gallery (17).jpg">
                  </div>
        
                  <div class="slide">
                    <img src="gallery/gallery (18).jpg">
                  </div>
        
                  <div class="slide">
                    <img src="gallery/gallery (19).jpg">
                  </div>
        
                  <div class="slide">
                    <img src="gallery/gallery (20).jpg">
                  </div>
        
                  <div class="slide">
                    <img src="gallery/gallery (23).jpg">
                  </div>
        
                  <div class="slide">
                    <img src="gallery/gallery (25).jpg">
                  </div>
        
                  <div class="slide">
                    <img src="gallery/gallery (28).jpg">
                  </div>
        
                  <div class="slide">
                    <img src="gallery/gallery (29).jpg">
                  </div>
        
                  <div class="slide">
                    <img src="gallery/gallery (30).jpg">
                  </div>
        
                  <div class="slide">
                    <img src="gallery/gallery (43).jpg">
                  </div>
        
                  <div class="slide">
                    <img src="gallery/gallery (44).jpg">
                  </div>
        
                  <div class="slide">
                    <img src="gallery/gallery (40).jpg">
                  </div>
        
                  <div class="slide">
                    <img src="gallery/gallery (39).jpg">
                  </div>
        
                  <div class="slide">
                    <img src="gallery/gallery (41).jpg">
                  </div>
        
                  <div class="slide">
                    <img src="gallery/gallery (42).jpg">
                  </div>
        
                  <div class="slide">
                    <img src="gallery/gallery (37).jpg">
                  </div>
        
                  <div class="slide">
                    <img src="gallery/gallery (36).jpg">
                  </div>
        
                  <div class="slide">
                    <img src="gallery/gallery (34).jpg">
                  </div>
        
                
                </div>
                
              </div>
            <label class="more-pics">
              <a href="gallery.html" class="a-more-pics">View more pictures >></a>
            </label>
        </div>
        
        <div class="testimonials">
          <div class="container">
            <div class="section-header">
              <h6 class="sub-heading">&#8226; Testimonial</h6>
              <h2 class="title">What our clients say</h2>
            </div>
            <div class="testimonials-content">
              <div class="swiper testimonials-slider js-testimonials-slider">
                <div class="swiper-wrapper">
                  <div class=" swiper-slide testimonial-item">
                    <div class="info">
                      <img src="others/testimonials p/20240202181406_IMG_6169.jpg" alt="cissy">
                      <div class="text-box">
                        <h3 class="name">Karungi Cissy</h3>
                        <span class="job">Three time traveller</span>
                      </div>
                    </div>
                    <p class="testi-words">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident tempora laudantium velit ut,
                      sunt porro molestias pariatur debitis tempore odio quod quasi officia fuga dolorum! Iure officiis
                      saepe architecto porro!</p>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                  </div>
  
                  <div class="swiper-slide testimonial-item">
                    <div class="info">
                      <img src="others/testimonials p/bridget.jpg" alt="Bridget">
                      <div class="text-box">
                        <h3 class="name">Nyakato Bridget</h3>
                        <span class="job">Three time traveller</span>
                      </div>
                    </div>
                    <p class="testi-words">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident tempora laudantium velit ut,
                      sunt porro molestias pariatur debitis tempore odio quod quasi officia fuga dolorum! Iure officiis
                      saepe architecto porro!</p>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                  </div>
  
                  <div class="swiper-slide testimonial-item">
                    <div class="info">
                      <img src="others/testimonials p/meddy.jpg" alt="meddy">
                      <div class="text-box">
                        <h3 class="name">Tindyebwa Medad</h3>
                        <span class="job">Three time traveller</span>
                      </div>
                    </div>
                    <p class="testi-words">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident tempora laudantium velit ut,
                      sunt porro molestias pariatur debitis tempore odio quod quasi officia fuga dolorum! Iure officiis
                      saepe architecto porro!</p>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                  </div>
  
                  <div class="swiper-slide testimonial-item">
                    <div class="info">
                      <img src="others/testimonials p/20240202181406_IMG_6169.jpg" alt="cissy">
                      <div class="text-box">
                        <h3 class="name">Karungi Cissy</h3>
                        <span class="job">Three time traveller</span>
                      </div>
                    </div>
                    <p class="testi-words">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident tempora laudantium velit ut,
                      sunt porro molestias pariatur debitis tempore odio quod quasi officia fuga dolorum! Iure officiis
                      saepe architecto porro!</p>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                  </div>
  
                  <div class="swiper-slide testimonial-item">
                    <div class="info">
                      <img src="others/testimonials p/20240202181406_IMG_6169.jpg" alt="cissy">
                      <div class="text-box">
                        <h3 class="name">Karungi Cissy</h3>
                        <span class="job">Three time traveller</span>
                      </div>
                    </div>
                    <p class="testi-words">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident tempora laudantium velit ut,
                      sunt porro molestias pariatur debitis tempore odio quod quasi officia fuga dolorum! Iure officiis
                      saepe architecto porro!</p>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                  </div>
  
                  <div class="swiper-slide testimonial-item">
                    <div class="info">
                      <img src="others/testimonials p/20240202181406_IMG_6169.jpg" alt="cissy">
                      <div class="text-box">
                        <h3 class="name">Karungi Cissy</h3>
                        <span class="job">Three time traveller</span>
                      </div>
                    </div>
                    <p class="testi-words">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident tempora laudantium velit ut,
                      sunt porro molestias pariatur debitis tempore odio quod quasi officia fuga dolorum! Iure officiis
                      saepe architecto porro!</p>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-pagination js-testimonials-pagination"></div>
            </div>
          </div>
        </div> 
        
      <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
      <script>
        const swiper = new Swiper('.js-testimonials-slider', {
              grabCursor: true,
              spaceBetween:30,
              pagination:{
                el: '.js-testimonials-pagination',
                clickable: true
              },
              autoplay: {
              delay: 5000,
              disableOnInteraction: false,
              },
              breakpoints: {
                767:{
                  slidesPerView: 2
                }
              }
        });
      </script>
        
                  
        <section class="section-book">
          <div class="book">
              <form action="#" class="form">
                  <h2 class="heading">
                      Start your Experience
                  </h2>
                  <div class="form-group">
                      <input type="text" class="form-input" placeholder="Full Name" id="name" required />
                      <label for="name" class="form-label">Full Name</label>
                  </div>

                  <div class="form-group">
                      <input type="text" class="form-input" placeholder="Email Address" id="email" required />
                      <label for="email" class="form-label">Email Address</label>
                  </div>

                  <div class="form-radio-group">
                      <input type="radio" class="form-radio-input" id="small" name="size" />
                      <label for="small" class="form-radio-label">
                          <span class="form-radio-button"></span>
                          Small
                      </label>
                  </div>

                  <div class="form-radio-group">
                      <input type="radio" class="form-radio-input" id="large" name="size" />
                      <label for="large" class="form-radio-label">
                          <span class="form-radio-button"></span>
                          Large
                      </label>
                  </div>
                  <div class="form-group">
                      <a href="contact.html" class="btn">Next step &rarr;</a>
                  </div>
              </form>
          </div>
        </section>
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

      </main>
      <footer>
        <div class="footer-grid">
          <div class="footer-left">
            <h3>Connect with US</h3>
            <p>Write to us on <a href="mailto:enquiries@jktaveltrails.com">enquiries@jktaveltrails.com</a> or send us a message
              via the form on our <a href="contact.html">contact us page</a>. <br>
              You can call Us on:<br>
              <strong>Uganda:</strong> +256 (0) 780 433 746<br>
              <strong>Uganda:</strong> +256 (0) 705 145 554<br>
              You can also chat to one of our sales consultants via our Lets Chat
              button.          
            </p>            
            <p class="socials-footer">
              <a href="https://x.com/jktraveltrails"><i class="fa-brands fa-x-twitter"></i></a>
              <a href="https://www.instagram.com/jktraveltrails?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="><i class="fa-brands fa-instagram"></i></a>
              <i class="fa-brands fa-facebook-f"></i>
              <i class="fa-brands fa-linkedin"></i>
              <i class="fa-brands fa-whatsapp"></i>
              <i class="fa-brands fa-youtube"></i>
            </p>
          </div>
              <!--footer menu-->
          <div class="footer-middle">
            <h3>Quick links</h3><br>
            <div class="link-container">
              <a href="home.html">Home</a>
              <a href="AboutUs.html">About</a>
              <a href="hero">Services</a>
              <a href="popDestinations.html">Destination</a>
              <a href="contact.html">Contact</a>
              <a href="hero">Blog</a>
            </div><br>
          </div>
          <div class="footer-right">
            <h3>Useful information</h3><br>
            <div class="link-container">
              <a href="hero">Frequently Asked Questions</a>
              <a href="hero">Terms and conditions</a>
              <a href="hero">Privacy Policy</a>
              <a href="hero">Your Protection</a>
              <a href="hero">Make a Payment</a>
              <a href="hero">New Question</a>
            </div>
          </div>
        </div>
            
      <div class="footer-bottom">
      <hr>
      <p class="footer-words">copyright © <script>document.write(new Date().getFullYear())</script> <strong>JK Travel Trails. </strong>All Rights Reserved</p>
      </div>     
      </footer>
      
      </body>
</html> 
