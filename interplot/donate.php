<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="donate.css">
    <meta charset="utf-8">
    <title>InterPlot</title>
  </head>
  <body>
        <div class="navbar">
            <h1>Interplot</h1>
            <a href="index.php">Home</a>
            <a href="merch.html">Merch</a>
            <div class="dropdown">
              <button class="dropbtn">Menu
                <i class="fa fa-caret-down"></i>
              </button>
              <div class="dropdown-content">
                <a href="about.php">About us</a>
                <a href="software.php">Software</a>
                <a href="donate.php">Donate</a>
              </div>
    <div class="wrapper">
      <h1>Donate to us through:</h1>
      <a href="https://paypal.com" id="icons"><img src = "paypal.png" class="center" alt="Paypal" width="300" height="300"></a>
      <a href="bitcoin.org" id="icons"><img src = "btc.png" class="center" alt="BitCoin" height="300" width="300"></a>
    </div>


                 <?php
                    //sa as
                    $servername = "interplot.org"; // SERVER NAME OBVIOUS AF
                    $username = "pyscnjmy_UROSPU"; // THYS YS DATABASE USER
                    $password = "123123123"; // IGNORE THIS
                    $dbname = "pyscnjmy_urooshson"; // MAIN DATABASE
                    $name = htmlspecialchars($_POST["name"]); // ACCEPT POST REQUEST
                    echo $name; // USELESS
                    // Create connection
                    $conn = new mysqli($servername, $username, $password, $dbname);

                        // Check connection
                        if ($conn->connect_error) {
                          die("Connection failed: " . $conn->connect_error);
                        }

                        $sql = "INSERT INTO UROOSHTABLE (firstname, lastname, email)
                        VALUES ('$name', 'AHMET', 'BEYPASHA@turklar.tr')";

                        if ($conn->query($sql) === TRUE) {
                          echo "New record created successfully";
                        } else {
                          echo "Error: " . $sql . "<br>" . $conn->error;
                        }

                        $conn->close();





                ?>
    <script>
        var siteWidth = 1280;
        var scale = screen.width /siteWidth;

        document.querySelector('meta[name="viewport"]').setAttribute('content', 'width='+siteWidth+', initial-scale='+scale+'');
    </script>

  </body>
</html>
