<!DOCTYPE html>
<html lang="en">
<head>
    <link href="img/logo yamjellyjoy.png" rel="icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>YAM JELLYJOY - log in or sign up</title>
</head>
<body>
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                <form action="login.php" method="POST" class="sign-in-form">
                    <h2 class="title">Sign in</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" name="username" placeholder="Username" required>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="password" placeholder="Password" required>
                    </div>
                    <input type="submit" value="Log in" class="btn solid">
                    <p class="social-text">Follow us on social media!</p>
                    <div class="social-media">
                        <a href="https://www.instagram.com/yam.jellyjoy?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" class="social-icon">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div>
                </form>
                <form action="register.php" method="POST" class="sign-up-form">
                    <h2 class="title">Sign up</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" name="username" placeholder="Username" required>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="email" name="email" placeholder="Email" required>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="password" placeholder="Password" required>
                    </div>
                    <input type="submit" class="btn" value="Sign up">
                </form>
            </div>
        </div>

        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>New here?</h3>
                    <p>
                        Join us and become a member!
                    </p>
                    <button class="btn transparent" id="sign-up-btn">Sign up</button>
                </div>  
            </div>
            <div class="panel right-panel">
                <div class="content">
                    <h3>Already have an account?</h3>
                    <p>
                        Log in now!
                    </p>
                    <button class="btn transparent" id="sign-in-btn">Sign in</button>
                </div>
            </div>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>
