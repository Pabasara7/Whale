<?php
    session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>
        Login
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
            <div class="split left">
                <div class="centered">
                    <form action="login_process.php" method="post">
                        <div class="container">
                            <label for="email"><b>Email</b></label>
                            <input type="email" placeholder="Enter email" name="userEmail" required>

                            <label for="psw"><b>Password</b></label>
                            <input type="password" placeholder="Enter Password" name="userPassword" required>
                            
                            <div class="container" style="background-color:#f1f1f1">
                                <span class="psw"><a href="#">Forgot password?</a></span>
                            </div>
                            <button type="submit">Login</button>
                            <p>Don't have an account?<a href="Sign_Up_Page.php">Sign Up</a></p>
                        </div>
                        <?php
                                if(isset($_SESSION["error"])){
                                    $errorpassword = $_SESSION["error"];
                                    echo "<span>$errorpassword</span>";
                                }
                        ?>

                                
                    
                    </form>
                </div>
                <div class="split right">
                    <div class="centered">
                    <img src="Images/logo 4.png" alt="Whale Logo" class="center">
                        <p>google</p>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>