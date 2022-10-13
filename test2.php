<html>
<head>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>USED CARS</title>
        <link rel="stylesheet" href="/css/homepage.css">
        <link rel="stylesheet" href="/css/navbar.css">
        <link rel="stylesheet" href="/css/filter.css">
        <link rel="stylesheet" href="/css/imageslider.css">
        <link rel="stylesheet" href="/css/socials.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>

        <script src="/javascript/nav.js"></script>
        <script src="/javascript/filter.js"></script>
        <script src="/javascript/imageslider.js"></script>


    </head>
    <body>

    <div class="navbar2">
        <a href="" style="padding-right: 4%;">CONTACT</a>
        <a href="#gmap_canvas" style="padding-right: 1.5%;">MAP</a>
        <img src="/images/marker-removebg-preview-removebg-preview.png" width="20px" style="float: right; margin-top: 5px;">
        <!--<a><img src="images/marker-removebg-preview-removebg-preview.png" width="20px"></a>-->
      </div>

        <div id="navlist">

            <div id="navlist-right">
                <img id="logo" src="images/BPA logo.png">
                <a href="homepage.html">Home</a>
                <a href="inventory.html">Inventory</a>
                <a href="#contact">Contact Us</a>
                <a href="#about">About Us</a>    
            </div>
        </div>

        <div id="navlist">
            <a href="#default" id="logo">
                WeSellOldCars
            </a>
         
            <div id="navlist-right">
                <a href="homepage.html">Home</a>
                <a href="#cars">Inventory</a>
                <a href="#contact">Contact Us</a>
                <a href="#about">About Us</a>
            </div>
        </div>


        <!-- Page Content -->
        <div class="content">
                    


                <table id="tablecar">

                    <tr>
                        <td>Make</td>
                        <td>Model</td>
                        <td>Price</td>
                    </tr>
                    <?php
                        $servername = "localhost:3306";
                        $username = "root";
                        $password = "password";
                        $database = "bpa";

                        // Create connection
                        $conn = new mysqli($servername, $username, $password, $database);

                        // Check connection
                        if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                        }

                        $sql = "SELECT * FROM vehicle";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                            echo "<tr><td>" . $row["make"]. "</td><td>" . $row["model"]. "</td><td>". $row["price"]. "</td></tr>";
                        }
                        } else {
                        echo "0 results";
                        }
                        $conn->close();
                    ?>
                </table>

        </div>
    </body>
</html>