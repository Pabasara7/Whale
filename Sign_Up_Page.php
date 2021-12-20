<!DOCTYPE html>
<html>

<head>
    <title>
        Sign Up
    </title>
    <link rel="stylesheet" href="Whale_Ipad_Landscape_Style.css">
    <link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
    <style>
        .split {
            height: 100%;
            width: 50%;
            position: fixed;
            z-index: 1;
            top: 0;
            overflow-x: hidden;
            padding-top: 20px;
        }

        .left {
            left: 0;
            background-color: #111;
        }

        /* Control the right side */
        .right {
            right: 0;
            background-color: red;
        }

        .centered {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
        }

    </style>
</head>

<body>
    <div data-role="page" id="Login_Page">
        <div data-role="main" class="ui-content">
            <form action="Sign_Up_Process.php" method="post">

                <div class="split left">
                    <div class="centered">
                        <label for="username"><b>Username</b></label>
                        <input type="text" placeholder="Enter username" name="username" required>

                        <label for="email"><b>Email</b></label>
                        <input type="email" placeholder="Enter email" name="userEmail" required>

                        <label for="psw"><b>Password</b></label>
                        <input type="password" placeholder="Enter Password" name="userPassword" required>

                        <label for="confpsw"><b>Confirm Passoword</b></label>
                        <input type="password" placeholder="Re-Enter Password" name="userReEnterPassword" required>

                    </div>
                    <div class="split right">
                        <div class="centered">
                            <img src="Images/logo 4.png" alt="Whale Logo" class="center">
                            <button type="submit">Sign Up</button>
                            <p>Already have and account?<a href="Login_Page.php">Sign in</a></p>
                        </div>

            </form>
        </div>
    </div>
</body>

</html>