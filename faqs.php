<!DOCTYPE html>
<html>
    <head>
        <title>FAQs | JK Travel Trails</title>
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
    <body style="position: relative;">

        <!-- Header -->
            <header class="header">
              <div class="navbar">
                <a href="home.php"><img class="logo" src="Logos/JK TRAVELS.png"></a>
                <ul class="links">
                  <li><a href="home.php">Home</a></li>
                  <li><a href="AboutUs.php">About</a></li>
                  <li><a href="safarisUganda.php">Safari</a></li>
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
                <div class="wrapper">
                    
                    <h1>Frequently Asked Questions</h1>

                    <div class="faq active">
                        <button class="accordion">
                            Equipment for Gorilla and Chimpanzee Trekking?
                            <i class="fa-solid fa-chevron-down"></i>
                        </button>
                        <div class="pannel">
                            <p>
                                <span style="color: black; font-weight: bold;">EQUIPMENT FOR GORILLA AND CHIMPANZEE TRACKING</span><br><br>

                                We recommend the following clothing and equipment for tracking the gorillas and the chimpanzees:<br><br>
                                    &bull; Warm ‘moisture-wicking’ clothes, including a fleece or light wool sweater, lightweight wool socks and a long-sleeved shirt<br>
                                    &bull; Strong waterproof walking boots (comfortable for going up and down steep hills)<br>
                                    &bull; Sturdy walking trousers<br>
                                    &bull; A breathable lightweight rain poncho or ‘parka’ with a rain hat<br>
                                    &bull; Gloves to grip vegetation (inexpensive gardening gloves work well)<br>
                                    &bull; Sunglasses, sunscreen and sun hat<br>
                                    &bull; Torch<br>
                                    &bull; A good supply of rechargeable camera batteries and/or fast film<br>
                                    &bull; Binoculars<br>
                                    &bull; A small backpack to carry water and a packed lunch<br>
                                    &bull; Walking stick<br>
                                    &bull; Tips or gratuities for the guides and porters<br><br>
                                
                                It is best to wear layers of clothing as temperatures fluctuate. Early mornings in the mountains can be cold, although as the sun rises in the sky, and you climb, you will start to feel the heat. It rains often, generally in the afternoons.
                                The ranger guides will make you a walking stick if needed, or you can borrow one from your lodge. You will find the walking sticks come in very useful when climbing up and down slippery slopes
                            </p>
                        </div>
                    </div>

                    <div class="faq">
                        <button class="accordion">
                            Clothing?
                            <i class="fa-solid fa-chevron-down"></i>
                        </button>
                        <div class="pannel">
                            <p>
                                Ugandans and Rwandans appreciate modest dressing.
                                <br><br>
                                Uganda and Rwanda are warm - sometimes hot - on the plains but often cold in the hilly and mountainous areas. Layered clothing, a rain jacket, heavy sweater and boots are essential for higher altitude stays at Bwindi Lodge, Gahinga Lodge and Virunga Lodge.
                                <br><br>
                                Have a look at our other FAQs on this page for equipment for hiking and our equipment list for Gorilla tracking.
                            </p>
                        </div>
                    </div>

                    <div class="faq">
                        <button class="accordion">
                            Electricity?
                            <i class="fa-solid fa-chevron-down"></i>
                        </button>
                        <div class="pannel">
                            <p>
                                &bull; Uganda: 240 volts. 3-pin (square) sockets.<br>
                                &bull; Rwanda: 230/240 volts at 50 Hz. 2-pin (round) sockets.
                                Our power is a mixture of solar, generator and main power. There are facilities for charging phones and other gadgets in the main living area and bandas in each lodge.
                                <br><br>
                                We provide adaptors at all our lodges. If you are travelling to other lodges on your trip to Rwanda and Uganda, you may want to bring your own adaptor.
                            </p>
                        </div>
                    </div>

                    <div class="faq">
                        <button class="accordion">
                            Equipment for climbing the Rwenzoris?
                            <i class="fa-solid fa-chevron-down"></i>
                        </button>
                        <div class="pannel">
                            <p>
                                We recommend the following clothing and equipment if you're hiking the Rwenzori Mountains:<br><br>

                                <strong>Clothing</strong><br><br>
                                &bull; Mountain gloves or mittens, or overmitts for climbing; light pair of gloves for camp<br>
                                &bull; Hats for sun/rain; warm hat for high altitude climbing<br>
                                &bull; Mountain jacket and raingear<br>
                                &bull; Fleece jacket and sweater; 'moisture-wicking ' T-shirts and long-sleeve trekking shirts<br>
                                &bull; Hiking or climbing trousers; shorts<br>
                                &bull; Lightweight long underwear<br><br>
                                <strong>Footwear</strong><br><br>
                                &bull; Camp shoes or sandals<br>
                                &bull; Walking shoes (runners)<br>
                                &bull; Gaiters (a set for low and high altitudes)<br>
                                &bull; Mountain boots that can fit crampons<br><br>
                                <strong>Equipment</strong><br><br>
                                &bull; Climbing rope and climbing harness<br>
                                &bull; Crampons and ice axe<br>
                                &bull; Carabiners; slings<br>
                                &bull; Day pack/climbing pack<br>
                                &bull; Tent, sleeping bag and sleeping mat. Waterproof sacks, such as large canoe bags (Ortleib) for packing tent, climbing gear, sleeping bag and clothes<br><br>
                                <strong>Medical</strong><br><br>

                                &bull; Malaria prophylaxis<br>
                                &bull; Diamox (helps acclimatisation and reduces risk of edema)<br>
                                &bull; Non-prescription painkillers (like panadol). Avoid aspirin<br>
                                &bull; Sleeping pills (for those who find it hard to sleep at altitude)<br>
                                &bull; First aid kit<br>
                                &bull; Your personal medication<br>
                                &bull; Sun screen (about SPF 45 or 60); dark sunglasses<br>
                            </p>
                        </div>
                    </div>

                    <div class="faq">
                        <button class="accordion">
                            Insurance?
                            <i class="fa-solid fa-chevron-down"></i>
                        </button>
                        <div class="pannel">
                            <p>
                                It is a condition of booking that all clients must have, and must demonstrate to the company prior to their departure, adequate insurance for the duration of the tour.
                                <br><br>
                                For more information visit our <a href="protection.html">Safari Insurance Page.</a>
                            </p>
                        </div>
                    </div>

                    <div class="faq">
                        <button class="accordion">
                            Visas?
                            <i class="fa-solid fa-chevron-down"></i>
                        </button>
                        <div class="pannel">
                            <p>
                                A valid passport with a minimum six months of validity is mandatory.
                                Single entry tourist visas are available without difficulty. Multiple-entry
                                tourist visas are difficult to obtain. You will need a valid Yellow Fever Certificate
                                to enter Uganda and Rwanda. If you require a visa, you will need to show your Yellow Fever
                                certificate during the visa application process.<br><br>

                                <strong>Rwanda tourists visas</strong><br><br>

                                Visitors can get a visa upon arrival or online. Single entry visa is priced at
                                USD 50 as per the new <a href="https://www.migration.gov.rw/visa/visitors-visa" target="_blank">visa laws</a> but the prevailing price of USD 30 is still on
                                until official communication. <a href="https://irembo.gov.rw/home/citizen/all_services" target="_blank">Please see here.</a>
                                <br><br>
                                An East African tourist visa is also available for clients wishing to travel between
                                Kenya, Uganda & Rwanda, to be applied for <a href="https://www.migration.gov.rw/visa/visitors-visa" target="_blank">online</a> or at arrival at a cost of $100 and
                                valid for 90 days. One has to apply to the respective country of the first point of entry.
                                <br><br>
                                Please visit the <a href="https://www.migration.gov.rw/" target="_blank">Rwanda immigration website</a>  for the latest information on different visa types.
                                <br><br>
                                <strong>For more information about Rwanda tourist visas, contact:</strong>
                                <br><br>
                                &bull; In the UK, the Embassy of the Republic of Rwanda is located at 120 – 122 Seymour Place, London W1H 1NR. Telephone: +44 (0)20 722 49 832.<br>
                                &bull; In the USA, the Embassy of the Republic of Rwanda is located at 1724 New Hampshire Avenue NW, Washington DE 200091. Telephone: +1 202 232 2882.<br>
                                &bull; List of Rwandan diplomatic missions around the world.<br><br>
                                <strong>Uganda tourist visas</strong><br><br>

                                The latest advice from the Uganda immigration service is the following:<br><br>

                                &bull; Nationals of USA, the European Union and Japan require a tourist visa and should apply in advance of travel to Uganda. The visa fee of $50 is payable upon arrival at any Uganda entry point or during an online application.<br>
                                &bull; Uganda tourist visas are NOT required by nationals of Ireland, the East Africa community, COMESA. Other nationals should check the <a href="https://www.immigration.go.ug/content/visas-and-passes" target="_blank">Uganda immigration website.</a><br>
                                &bull; Applications for all Ugandan visas should be madeonline on the <a href="https://visas.immigration.go.ug/" target="_blank">Uganda immigration website.</a><br>
                                &bull; A single entry visa to Uganda costs US$ 50 and is valid for between two weeks and three months.<br><br>
                                <strong>For more information about Uganda tourist visas, contact:</strong><br><br>

                                &bull; In the UK, the Ugandan Embassy is located at Uganda House, 58/59 Trafalgar Square, London WC2N 5DX. Telephone: +44 (0)20 7839 5783.<br>
                                &bull; In the USA, the Uganda Embassy is located at 5811 16th Street NW, Washington DC 20011. Telephone: +1 202 726 7100.<br>
                                &bull; Please visit the <a href="https://visas.immigration.go.ug/" target="_blank">Uganda immigration web site</a> for more information on different visa types.<br>
                                &bull; List of <a href="https://www.immigration.go.ug/search/node?keys=visa" target="_blank">Ugandan diplomatic missions around the world.</a><br><br>
                                Please note that immigration rules and visa costs are subject to change at late notice. For any information on visas to Rwanda and Uganda, you are welcome to <a href="contact.html">contact the JK Travel Trails team. </a>
                            </p>
                        </div>
                    </div>

                    <div class="faq">
                        <button class="accordion">
                            Flights?
                            <i class="fa-solid fa-chevron-down"></i>
                        </button>
                        <div class="pannel">
                            <p>
                                JK Travel Trails does not organize or sell international flights.<br><br>

                                <strong>Flights to Uganda</strong> are available from Emirates, Qatar Airways, Turkish Airlines, Brussels Airlines, KLM, Egyptair, Ethiopian Airlines, African Express, and Kenya Airways.<br><br>
                                
                                <strong>Flights within Uganda</strong> are offered by Aerolink which operates twice daily flights between Murchison Falls, Kibale Forest, Queen Elizabeth, Bwindi and Kidepo. Fly Uganda also offers scheduled flights to Murchison Falls, Kibale Forest, Queen Elizabeth, Bwindi and Kidepo.<br><br>
                                
                                <strong>Flights to Rwanda</strong> are available from Rwandair, KLM, Kenya Airways, Brussels Airlines, Qatar Aiways, Turkish Airlines, and Ethiopian Airlines.<br><br>
                                                                
                                Please note that JK Travel Trails does not handle international flights. The airlines operating to the region are subject to change so please check with the airline concerned. Please also be sure that the timings of your flights connect with the beginning and end times of your safari.
                            </p>
                        </div>
                    </div>

                    <div class="faq">
                        <button class="accordion">
                            Weather?
                            <i class="fa-solid fa-chevron-down"></i>
                        </button>
                        <div class="pannel">
                            <p>
                                The Equatorial climate of Uganda and Rwanda is a major attraction with temperatures on
                                the plains ranging between a very agreeable 21°C and 30°C. The climate does not change much,
                                meaning both countries are ideal holiday destinations throughout the year.<br><br>

                                In the mountainous areas it is colder than on the plains (especially at night) and the rainfall
                                is greater. Temperatures in the mountainous areas can go down as low as 10°C in certain months.<br><br>

                                The rainy seasons tend to be from March to April and October to November, but this varies and
                                it can rain any time of year, especially in the gorilla park areas. Travel can be slower in the
                                rainy season but the views are often better as the rain clears the air of dust.<br><br>

                                Gorilla tracking can be muddier during the rainy season but with the right equipment and a helpful
                                porter to guide you, gorilla tracking still remains open to visitors.<br><br>

                                Our advice is to travel when it is most convenient for you. Visitors generally agree that the rain,
                                which is usually just for short periods of time, is part of the great travel experience<br><br>
                            </p>
                        </div>
                    </div>

                    <div class="faq">
                        <button class="accordion">
                            Terms and Conditions
                            <i class="fa-solid fa-chevron-down"></i>
                        </button>
                        <div class="pannel">
                            <p>
                                Please see our <a href="#">terms and conditions page</a>
                            </p>
                        </div>
                    </div>

                </div>

                <script>
                    var acc = document.getElementsByClassName("accordion");
                    var i;

                    for(i=0; i < acc.length; i++) {
                        acc [i].addEventListener("click", function(){
                           this.classList.toggle("active");
                           this.parentElement.classList.toggle("active");

                           var pannel = this.nextElementSibling;

                           if (pannel.style.display === "block") {
                            pannel.style.display = "none";
                           }else{
                            pannel.style.display = "block";
                           }
                        });
                    }                
                </script>

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


            

        </main>

    </body>
</html>