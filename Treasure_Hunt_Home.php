<?php
    session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>
        Treasure Hunt
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
        <div data-role="header">
            <p>completion bar & mins away</p>
        </div>
        <div data-role="main" class="ui-content">
            <div class="split left">
                <div class="centered">
                    <p>MAP</p>
                </div>
                <div class="split right">
                    <div class="centered">
                        <p>Please watch the video to get a heads up on the location</p>
                        <a href="Treasure_Hunt_Video.php" class="ui-btn ui-btn-inline">TREASURE HUNT VIDEO</a><br>
                        <p>Please scan the QR code to get the next offer</p>
                        <a href="#" class="ui-btn ui-btn-inline">SCAN QR CODE</a><br>
                    </div>
                </div>
            </div>
        </div>
        <div data-role="footer" data-position="fixed">
        <h4>footer</h4>
    </div>
    </div>
    
</body>

</html>