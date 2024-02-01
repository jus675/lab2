<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cloud's ether</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="icon" type="image/x-icon" href="cloud-icon.png">
    <style>

        @font-face {
            font-family: "000webfont";
            src: url("000webfont.ttf");
        }

        /* Body Styling */
        body {
            font-family: '000webfont';
            margin-top: 20px;
            margin-bottom: 20px;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            background-image: url('blue-forest.jpg');
            background-repeat: no-repeat;  /* Prevent the background image from repeating */
            background-size: cover;       /* Cover the entire background */
            background-position: center;
        }

        /* Headings Styling */
        h1, h2, h3 {
            color: white;
            font-family: '000webfont';
            
        }

        /* Paragraph Styling */
        p {
            font-size: 21px;
            text-align: center;
            margin: 0; /* To bring the Tamanotchi closer */
        }

        .button {
            text-align:center;
            margin-top: 5px;
            color: blue;
            
        }

        .tamanotchi {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        
        /* Main Container */
        .main-container {
            background-color: #3354f9fe;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            max-width: 430px; /* Set desired maximum width */
            height: 620px;
            margin: 20px auto;/* Center the container horizontally */
            overflow: hidden;
        }
        
        /* Clouds Container */
        .clouds {
            position: fixed; /*Positions the clouds at the top-left corner of the viewport */
            top: 25%; 
            left: 0; 
            width: 100%; 
            height: 362px; 
            display: flex; 
            margin-top: 70px;
            margin-bottom: 400px;
            background: url('moving-clouds.png') repeat-x; /* Repeat the clouds horizontally */
            background-size: auto 80%; /* Adjust the size of the clouds */
            animation-name: moveClouds;
            animation-duration: 50s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
            animation-fill-mode: forwards;
            overflow: hidden;
            z-index: -1; /* Move the clouds behind other content */

        }
        /* Clouds Animation */
        @keyframes moveClouds {
            from {
                transform: translateX(100%);
            }
            to {
                transform: translateX(-100%);
            }
        }

        .wrapper {
            max-width: 100%;
            overflow: hidden;
          }
          
        /* Ether Text: Justine's Ether*/
        .ether {
            overflow: hidden; /* Hide the overflowed content */
            position: relative;
            white-space: nowrap;  /* Prevent the text from wrapping */
            animation: scrollText 10s linear infinite; /* Adjust the duration and timing function as needed */
            display: inline-block;
        }

        /* Image Styling */
        img.img-radius {
            border-radius: 50%;
        }

        /* User Info Styling */
        div.user-info {
            text-align: center;
            background-color: #3354f9fe;
            color: white;
            padding: 20px;
            margin-top: 20px;
            border-radius: 10px;
            max-width: 400px;
            margin-left: auto;
            margin-right: auto;
        }

        /* User Social Links Styling */
        .user-social-link {
            margin-top: 5px;
        }

        .user-social-link a {
            font-size: 25px;
            margin: 0 10px;
            margin-bottom: auto;
            color: white;
        }

        .user-social-link a:hover i {
            color: #007bff;
        }

        .user-social-link .fa-facebook {
            color: #46f6fd;
        }

        .user-social-link .fa-linkedin {
            color: #46f6fd;
        }

        .user-social-link .fa-instagram {
            color: #46f6fd;
        }

        /*Ether Text Animation*/
        @keyframes scrollText {
            0% {
                transform: translateX(100%); /* Start off-screen to the right */
            }
            100% {
                transform: translateX(-100%); /* Scroll to the left */
            }
        }
        
        /* Responsive Styling */
        @media (max-width: 600px) {
            .main-container {
                max-width: 400px; 
            }
        
            h1, h2, h3 {
                font-size: 40px; 
            }
        
            p {
                font-size: 18px; 
            }
        }        

        .php {
            color: blue;
            text-align: center;
        }


        
    </style>
</head>



<body> 
<?php
    echo "<div class='php'>";
    
    // TamaNOTchi's data
    $nameTamaNOTchi = array("cloudy", "yuki");
    $clickTamaNOTchi = "Click TamaNOTchi below:";
    $feedTamaNOTchi = "Feed pls!";

    // Simulate feeding TamaNOTchi
    $treatsGiven = 3; // Change number based on the treats given
    $happinessLevel = 50 + $treatsGiven * 5;

    echo "<h1 class='php'> Hello PHP World! </h1>";
    echo "<p>$clickTamaNOTchi $feedTamaNOTchi</p>";
    echo "<p>The happiness level of $nameTamaNOTchi[0] is $happinessLevel.</p>";

    echo "</div>";
    ?>

    <center>
    <a href="formvalidation.php">Forms</a>
    </center>

    <div class="main-container mx-auto">    
        <div class="main-container">
            <div class="clouds"></div> 
            <h1 class="ether" style="font-size:60px">Justine's Ether</h1>
            <img src="profile-picture.png"
            class="img-radius" alt="User-Profile-Image" style="width:120px;height:120px">
            <br>
            <h2 style="font-size:38px">Welcome to my space!</h2>
            <h3 style="font-size:30px">BSCS-SS221</h3>

    

    <div class="user-info">
        <p>Hi I am Justine! Nice to meet you.</p>
        <p>I'm 19 y.o., born on Jan 20, 2004.</p>
        <p>I live in Pasay City.</p>
    </div>

    <div class="row justify-content-center user-social-link">
        <div class="col-auto"><a href="https://www.facebook.com/justinedenise.hernandez"><i class="fa fa-facebook text-facebook"></i></a></div>
        <div class="col-auto"><a href="https://www.linkedin.com/in/justine-h-a68469242"><i class="fa fa-linkedin text-linkedin"></i></a></div>
        <div class="col-auto"><a href="https://www.instagram.com/j.u.s__"><i class="fa fa-instagram text-instagram"></i></a></div>
            </div>
        </div>
    </div>

    <p id="demo" style="color: white">
        <a href="https://tamanotchi.world/9607c">
            <img src="https://tamanotchi.world/i/9607" alt="It's tamaNOTchi! Click to feed!">
        </a>
    </p>
    
    <div class="button">
        <button style="background-color:rgba(38, 38, 232, 0.868); color:white" type="button" onclick='toggleContent()'>Click Me!</button>
    </div>
    
    <p id="clickCount" style="color: white">Click count: 0</p>
    <p id="hungerStatus" style="color: white">Hunger status: Not hungry</p>
    
    <script>
        // Variables to track the current state
        let isAlternateContent = false;
        let clickCount = 0;
        let isHungry = false;

        function toggleContent() {
            // Increment the click count
            clickCount++;

            // Toggle the hunger status based on the click count
            isHungry = clickCount % 3 === 0; // Change 3 to any number to adjust the frequency

            // Toggle the state based on the click count and hunger status
            isAlternateContent = isHungry || clickCount % 2 === 0;

            // Set innerHTML based on the current state
            document.getElementById("demo").innerHTML = isAlternateContent
                ? `<a href="https://tamanotchi.world/9768c">
                    <img src="https://tamanotchi.world/i/9768" alt="It's tamaNOTchi! Click to feed!">
                </a>`
                : `<a href="https://tamanotchi.world/9607c">
                    <img src="https://tamanotchi.world/i/9607" alt="It's tamaNOTchi! Click to feed!">
                </a>`;

            // Update the click count display
            document.getElementById("clickCount").innerHTML = `Click count: ${clickCount}`;

            // Update hunger status display
            document.getElementById("hungerStatus").innerHTML = `Hunger status: ${isHungry ? 'Hungry' : 'Not hungry'}`;
        }
  </script>
    
    

</body>

</html>
