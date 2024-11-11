<?php
// Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';  // Autoload PHPMailer

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Form data
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['Email'];
    $mobile = $_POST['Number'];
    $destination = $_POST['Destination'];
    $tour_type = $_POST['tour-kinds'];
    $adults = $_POST['adults'];
    $children = $_POST['children'];
    $startDate = $_POST['startDate'];
    $endDate = $_POST['EndDate'];
    $message = $_POST['msg'];

    // Database Insertion
    try {
        // Include database connection
        require_once 'includes/dbh.inc.php';  // Update with your database connection file
        
        // SQL query to insert form data into the database
        $query1 = "INSERT INTO contact_form (fname, lname, email, mobile, destination, tour_kind, adults, children, startDate, endDate, msg) 
                  VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        
        // Prepare and execute the query
        $stmt1 = $pdo->prepare($query1);
        $stmt1->execute([$fname, $lname, $email, $mobile, $destination, $tour_type, $adults, $children, $startDate, $endDate, $message]);


        // Insert other fields into the users table (for example)
        $query2 = "INSERT INTO users (fname, lname, email, mobile) VALUES (?, ?, ?, ?)";
        $stmt2 = $pdo->prepare($query2);
        $stmt2->execute([$fname, $lname, $email, $mobile]);

        // Clear statement and database connection
        $stmt1 = null;
        $stmt1 = null;
        $pdo = null;

    } catch (PDOException $e) {
        die("Database Query failed: " . $e->getMessage());
    }



    // PHPMailer - Sending email
    try {
        // Create an instance of PHPMailer
        $mail = new PHPMailer(true);
        
        // Server settings
        $mail->isSMTP();                                            // Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                       // Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = 'jktraveltrails@gmail.com';             // SMTP username (your email)
        $mail->Password   = 'dqmb eeeo qrke vtno';                  // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption
        $mail->Port       = 587;                                    // TCP port to connect to

        // Recipients
        $mail->setFrom('jktraveltrails@gmail.com', 'JK Travel Trails');     // Sender
        $mail->addAddress('jktraveltrails@gmail.com');                      // Recipient

        // Email content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'New Contact Form Submission';        // Email subject
        $mail->Body    = '
            <h3>Contact Details:</h3>
            <strong>Name:</strong> ' . $fname . ' ' . $lname . '<br>
            <strong>Email:</strong> ' . $email . '<br>
            <strong>Mobile:</strong> ' . $mobile . '<br>
            <strong>Destination:</strong> ' . $destination . '<br>
            <strong>Tour Type:</strong> ' . $tour_type . '<br>
            <strong>Adults:</strong> ' . $adults . '<br>
            <strong>Children:</strong> ' . $children . '<br>
            <strong>Traveling Date:</strong> ' . $startDate . '<br>
            <strong>End Date:</strong> ' . $endDate . '<br>
            <strong>Message:</strong><br>' . nl2br($message) . '
        ';

        // Send the email
        if ($mail->send()) {
            // Auto-reply email
            $autoReply = new PHPMailer(true);

            // Auto-reply settings
            $autoReply->isSMTP();
            $autoReply->Host       = 'smtp.gmail.com';
            $autoReply->SMTPAuth   = true;
            $autoReply->Username   = 'jktraveltrails@gmail.com';
            $autoReply->Password   = 'dqmb eeeo qrke vtno';
            $autoReply->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $autoReply->Port       = 587;

            // Auto-reply recipient and content
            $autoReply->setFrom('jktraveltrails@gmail.com', 'JK Travel Trails');
            $autoReply->addAddress($email);  // Send the reply to the user's email

            $autoReply->isHTML(true);
            $autoReply->Subject = 'Thank you for contacting JK Travel Trails';
            $autoReply->Body    = '
                <h3>Dear ' . $fname . ' ' . $lname . ',</h3>
                <p>Hello and thank you for reaching out to JK Travel Trails!<br>
                We have received your message and are thrilled to help you plan your next adventure. Our team will review your inquiry and get back to you shortly with all the details you need.<br> In the meantime, feel free to explore our website for exciting travel packages and destinations.
                <br><br>
                If your matter is urgent, please feel free to call us at 256780433746 or send a WhatsApp message to 25678033746
                <br><br>
                We look forward to creating unforgettable travel experiences for you!<br><br>

                Best regards,<br>
                The JK Travel Trails Team<br>
                www.jktraveltrails.com<br>
                Bokoto, Grate Magil, Kampala, Uganda</p>
            ';

            $autoReply->send();  // Send the auto-reply

            // Display the success message once
            echo '<div class="alert success">Message sent successfully and saved to the database!</div>';
            
            // Redirect after 2 seconds to prevent form resubmission
            header("Refresh: 2; url=contact.php");  
            exit();  // Prevent any further execution
        } else {
            echo '<div class="alert error">Message delivery failed: ' . $mail->ErrorInfo . '</div>';
        }

    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>


<!-- End of PHP mailer and auto reply -->






<!DOCTYPE html>
<html>
    <head>
        <title>Contact Us | JK Travel Trails</title>
        <link rel="icon" type="image/x-icon" href="Logos/JK TRAVELS.png">

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="styles/contact.css">
        <link rel="stylesheet" href="styles/footer.css">
        <link rel="stylesheet" href="styles/header.css">
        <link rel="stylesheet" href="styles/general.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

        <style>
            .header {
                background-image: url(styles/background/woman-working-her-laptop-while-talking-phone.jpg);
                background-size: cover;
                background-position: fixed;
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

            /* Alert styles */
            .alert {
                margin: 20px auto;
                padding: 15px;
                width: 80%;
                border-radius: 5px;
                text-align: center;
                font-size: 18px;
            }

            .success {
                background-color: #dff0d8;
                color: #3c763d;
                border: 1px solid #d6e9c6;
            }

            .error {
                background-color: #f2dede;
                color: #a94442;
                border: 1px solid #ebccd1;
            }



        </style>


    </head>
    <body class="contact-body" style="font-family: Roboto">

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
                <i class="fa-solid fa-bars" style="color: white"></i>
              </div>
            </div>
  
            <div class="dropdown_menu">
              <li><a href="home.php">Home</a></li>
              <li><a href="AboutUs.php">About</a></li>
              <li><a href="safarisUganda.php">Safaris</a></li>
              <li><a href="experiences.php">Experiences</a></li>
              <li><a href="gallery.php">Gallery</a></li>
              <li><a href="contact.php" class="action_btn">Contact Us</a></li>
              
            </div>
  
          </header>
  
       <script>
          const toggleBtn = document.querySelector('.toggle_btn')
          const toggleBtnIcon = document.querySelector('.toggle_btn i')
          const dropDownMenu = document.querySelector('.dropdown_menu')
  
          toggleBtn.onclick = function () {
              dropDownMenu.classList.toggle('open')
  
              //CODE FOR THE 'X' MARK ON THE DROPDOWN MENU
              const isOpen = dropDownMenu.classList('open')
  
              toggleBtnIcon.classList = isOpen
              ? 'fa-solid fa-xmark'
              : 'fa-solid fa-bars'
          }
       </script>

       <main>
        
        <div class="contactUs">
            <div class="title">
                <h2>Talk to Us</h2>
            </div>
            
            <div class="box">
                <div class="contact form">
                    <h3>Send a message</h3>
                    <form action="" method="POST">
                        <div class="formBox">
                            <input type="hidden" name="access_key" value="6ea419e2-6816-4cca-adb7-1a9f64e8319b">
                            <div class="row50">
                                <div class="inputBox">
                                    <span>First Name</span>
                                    <input type="text" name="fname" placeholder="William" required>
                                </div>
                                <div class="inputBox">
                                    <span>Last Name</span>
                                    <input type="text" name="lname" placeholder="Smith" required>
                                </div>
                            </div>

                            <div class="row50">
                                <div class="inputBox">
                                    <span>Email</span>
                                    <input type="email" name="Email" placeholder="smith@gmail.com" required>
                                </div>
                                <div class="inputBox">
                                    <span>mobile</span>
                                    <input type="tel" name="Number" placeholder="000 000 000 000" required>
                                </div>
                            </div>

                            <div class="row50">
                                <div class="inputBox">
                                    <span>Destination</span>
                                    <input type="text" name="Destination" placeholder="Type your Destination" required>
                                </div>
                                <div class="inputBox">
                                    <span>Kind of tour</span>
                                    <select name="tour-kinds" id="tour-kinds">
                                        <option value="Any">click to select</option>
                                        <option value="Private_Budget">Private Budget Tour</option>
                                        <option value="Private_Group">Private Group tour</option>
                                        <option value="Luxury">Luxury Tour</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row50">
                                <div class="inputBox">
                                    <span>Adults</span>
                                    <input type="number" name="adults" min="1" placeholder="0" required>
                                </div>
                                <div class="inputBox">
                                    <span>Children</span>
                                    <input type="number" name="children" min="0" placeholder="0">
                                </div>
                            </div>

                            <div class="row50">
                                <div class="inputBox">
                                    <span>Preffered Contact</span>
                                    <div class="radios" style="justify-content: center; align-items: center; text-align: center; padding: 10px;">
                                        <input type="radio" value="" id="name1" name="value1">
                                        <label for="name1">Phone</label>
                                        <input type="radio" value="" id="name2" name="value1">
                                        <label for="name2">Email</label>
                                    </div>
                                </div>
                                <div class="inputBox">
                                    <span>Best time to call</span>
                                    
                                    <select name="time-to-call" id="time-to-call">
                                        <option value="morning">Morning</option>
                                        <option value="Afternoon">Afternoon</option>
                                        <option value="evening">Evening</option>
                                        <option value="evening">Anytime</option>
                                    </select>

                            
                                    
                                </div>
                            </div>

                            <div class="row50">
                                <div class="inputBox">
                                    <span>Traveling Date</span>
                                    <input type="date" min="2024-11-01" id="startDate" name="startDate" placeholder="click to select" required>
                                </div>
                                <div class="inputBox">
                                    <span>End Date</span>
                                    <input type="date" id="EndDate" name="EndDate" placeholder="click to select">
                                </div>
                            </div>

                            <div class="row100">
                                <div class="inputBox">
                                    <span>Tell us more about your trip, any relevant details</span>
                                    <textarea name="msg" placeholder="write your details here.." required></textarea>
                                </div>
                            </div>

                            <?php
                            if (isset($mail)) {
                                if ($mail->Send()) {
                                    echo '<div class="alert success">Message sent successfully!</div>';
                                } else {
                                    echo '<div class="alert error">Message delivery failed: ' . $mail->ErrorInfo . '</div>';
                                }
                            }
                            ?>

                            <div class="row100">
                                <div class="inputBox">
                                    <input type="submit" value="send">
                                </div>
                            </div>
                            

                        </div>
                    </form>
                </div>

                <!-- info Box -->
                <div class="contact info">
                    <h3>Contact info</h3>
                    <div class="infoBox">
                        <div>
                            <span><ion-icon name="location"></ion-icon></span>
                            <p>Bukoto, Kampala Uganda</p>
                        </div>
                        <div>
                            <span><ion-icon name="mail"></ion-icon></span>
                            <a href="mailto:jktraveltrails@gmail.com">jktraveltrails@gmail.com</a>
                        </div>
                        <div>
                            <span><ion-icon name="call"></ion-icon></span>
                            <a href="tel:+256705145554">+256 705 145 554</a>
                        </div>
                        <!-- social media -->
                        <ul class="sci">
                            <li><a href="https://www.tiktok.com/@jktraveltrails?is_from_webapp=1&sender_device=pc"><ion-icon name="logo-tiktok"></ion-icon></a></li>
                            <li><a href="https://www.instagram.com/jktraveltrails/"><ion-icon name="logo-instagram"></ion-icon></a></li>
                            <li><a href="https://x.com/jktraveltrails"><i class="fa-brands fa-x-twitter"></i></a></li>
                            <li><a href="https://www.youtube.com/@JKTravelTrails"><i class="fa-brands fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>

                <!-- Map area -->

                <div class="contact map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.7429636188276!2d32.59823930000001!3d0.35214600000000323!2m3!1f0!2f0!3f0!3m2!1i1024
                    !2i768!4f13.1!3m3!1m2!1s0x177dbb72bc26be97%3A0xdcf8b502d86273eb!2sGrate%20Magil!5e0!3m2!1sen!2sug!4v1712669456590!5m2!1sen!2sug" width="600" height="450"
                    style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>">
                </div>
            </div>
        </div>

        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

       </main>

    <script>
        const checkinDate = document.getElementById("startDate");
        const checkoutDate = document.getElementById("EndDate");

        checkinDate.addEventListener("change", function() {
            const selectedCheckinDate = new Date(this.value);
            selectedCheckinDate.setDate(selectedCheckinDate.getDate() + 2); // Optional: Ensure check-out is at least 1 day after check-in
            const minCheckoutDate = selectedCheckinDate.toISOString().split("T")[0];
            checkoutDate.min = minCheckoutDate;
        });
    </script>

       <?php include 'includes/footer.php'; ?>