<?php
    session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>
        Treasure Hunt Video
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
    <div data-role="page" id="Treasure Hunt">
        <div data-role="main" class="ui-content">
            <div class="split left">
                <div class="centered">
                    
                </div>
                <div class="split right">
                    <div class="centered">
                  
                </div>
            </div>
        </div>
</body>

</html>