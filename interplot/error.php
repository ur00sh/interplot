<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <title>InterPlot</title>
  </head>
  <body>
    <h1>Error 404: Connection timed out</h1>
    <h2>Check your connection please</h2>
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
                         // echo "New record created successfully";
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
