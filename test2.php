<html>
    <head>
        <title>USED CARS</title>
        <link  rel="stylesheet" href="/css/inventory.css">
        <link rel="stylesheet" href="/css/navbar.css">
        <link rel="stylesheet" href="/css/filter.css">
        <link rel="stylesheet" href="/css/Test.css">


        <script src="/javascript/nav.js"></script>
    </head>
    <body>
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