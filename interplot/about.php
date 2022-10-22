<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <meta charset="utf-8">
    <title>InterPlot</title>
    
    <style>
        .navbar a {
            float: right;
            font-size: 16px;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-family: monospace;
        }
       .navbar h1 {
    font-size: 18px;
    color:white;
    float:left;
    text-align: center;
    font-family: monospace;
    padding-left: 10px;
}
  
    </style>
  </head>
  <body>
        <div class="wrapper">
            <div class="navbar">
                <b><h1>Interplot</h1></b>
                <a href="index.php">Home</a>
                <a href="merch.html">Merch</a>
            </div>
            
        </div>
    
                     <?php
                     /*
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
                   
 
    */


                ?> 
  </body>
</html>
