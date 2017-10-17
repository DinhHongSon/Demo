<!DOCTYPE html>
<html >
    <head>
        <meta charset="UTF-8">
        <title>Flat HTML5/CSS3 Login Form</title>



        <link rel="stylesheet" href="public/css/style.css">


    </head>

    <body>
        <?php
        if (isset($_POST['log'])) {
            $user = $_POST['user'];
            $password = $_POST['password'];
            echo $user . " " . $password;
            if ($user == 'admin' && $password == "admin") {
                header('Location:index.php');
            }
        }
        ?>
        <div class="login-page">
            <div class="form">
                <form class="register-form">
                    <input type="text" placeholder="name"/>
                    <input type="password" placeholder="password"/>
                    <input type="text" placeholder="email address"/>
                    <button>create</button>
                    <p class="message">Already registered? <a href="#">Sign In</a></p>
                </form>

                <form class="login-form" method="POST">
                    <input type="text" placeholder="username" name="user"/>
                    <input type="password" placeholder="password" name="password"/>
                    <button name="log">login</button>
                    <p class="message">Not registered? <a href="#">Create an account</a></p>
                </form>
            </div>
        </div>
        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script  src="public/js/index.js"></script>

    </body>
</html>
