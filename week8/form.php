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
            color: white;
            text-align: center;
            background-color: #3354f9fe;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            max-width: 430px; /* Set desired maximum width */
            height: 620px;
            margin: 20px auto;/* Center the container horizontally */
            overflow: hidden;
        }

    </style>

<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
    
  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $websiteErr = "Invalid URL";
    }
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>


<div class="php"> 
  <h1>PHP Forms</h1>
  <p><span class="error">* required field</span></p>
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
    Name: <input type="text" name="name" value="<?php echo $name;?>">
    <span class="error">* <?php echo $nameErr;?></span>
    <br><br>
    E-mail: <input type="text" name="email" value="<?php echo $email;?>">
    <span class="error">* <?php echo $emailErr;?></span>
    <br><br>
    Website: <input type="text" name="website" value="<?php echo $website;?>">
    <span class="error"><?php echo $websiteErr;?></span>
    <br><br>
    Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
    <br><br>
    Gender:
    <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
    <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
    <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other  
    <span class="error">* <?php echo $genderErr;?></span>
    <br><br>
    <input type="submit" name="submit" value="Submit">  
  </form>
</div>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>

<?php
$servername = "localhost";
$username = "webprogss221";
$password = "=latHen97";
$dbname = "webprogss221";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO jbhernandez_myguests (name, email, website, comment, gender)
VALUES ('$name', '$email', '$website', '$comment', '$gender')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>


</body>
</html>
