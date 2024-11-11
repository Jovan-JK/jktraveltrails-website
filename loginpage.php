<!DOCTYPE html>
<html>
    <head>
        <title>login | JK Travel Trails</title>
        <link rel="icon" type="image/x-icon" href="Logos/JK TRAVELS.png">


        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="styles/styles.css">
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
        />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    </head>
    <body class="login-body">

        <div class="login-wrapper">
          <form action="login.php" method="POST">
            <h2>Login</h2>
            <div class="input-field">
                <input type="text" name="username" required autocomplete="off" autocapitalize="none">
                <label>Enter your username</label>
            </div>

            <div class="input-field">
                <input type="password" name="password" required>
                <label>Enter your password</label>
                <span class="toggle-password">
                    <i class="fas fa-eye" id="togglePassword"></i>
                </span>
            </div>

            <div class="password-options">
                <label for="remember">
                    <input type="checkbox" id="remember">
                    <p>Remember me</p>
                </label>
                <a href="#">Forgot password</a>
            </div>
            <button type="submit">Log In</button>
            <div class="account-options">
                <a href="www.jktraveltrails.com" > &#8592; Go back to JK Travel Trails</a>
            </div>


          </form>
        </div>

        <script>
        // Toggle password visibility script
        document.getElementById('togglePassword').addEventListener('click', function () {
            const passwordField = document.getElementById('password');
            
            if (passwordField.type === 'password') {
                passwordField.type = 'text';
                this.classList.replace('fa-eye', 'fa-eye-slash');
            } else {
                passwordField.type = 'password';
                this.classList.replace('fa-eye-slash', 'fa-eye');
            }
        });
    </script>






    </body>

</html>