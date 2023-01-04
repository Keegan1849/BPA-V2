<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Motors Unlimited</title>
        <link rel="stylesheet" href="/css/contact.css">
        <link rel="stylesheet" href="/css/slider.css">
        <link rel="stylesheet" href="/css/navbar.css">
        <link rel="stylesheet" href="/css/socials.css">


        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>

        <script src="/javascript/nav.js"></script>

    </head>
        <?php
          $make;
          $model;
          $year;
          $miles1;
          $miles2;
          if(!empty($_GET["make"])) {$make = $_GET["make"];}
          if(!empty($_GET["model"])) {$model = $_GET["model"];}
          if(!empty($_GET["year"])) {$year = $_GET["year"];}
          if(!empty($_GET["miles1"])) {$miles1 = $_GET["miles1"];}
          if(!empty($_GET["miles2"])) {$miles2 = $_GET["miles2"];}
          $search = 0;
          $more = 0; 
          if(!empty($make) || !empty($model) || !empty($miles1) || !empty($miles2))
          {
              $search = 1; 
          }

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

          $sql = "SELECT * FROM car";
          if($search == 1){
              $sql .= " where";
          }
          if(!empty($make)){
              if($more == 1){
                  $sql .= " OR make like '%$make%'";

              }else{
                  $sql .= " make like '%$make%'";
                  $more = 1;
              }
          }
          if(!empty($model)){
              if($more == 1){
                  $sql .= " OR model like '%$model%'";
              }else{
                  $sql .= " model like '%$model%'";
                  $more = 1;
              }
          }
          if(!empty($miles1) && !empty($miles2)){
              if($more == 1){
                  $sql .= " OR miles > '$miles1' AND miles < '$miles2'";
              }else{
                  $sql .= " miles > '$miles1' AND miles < '$miles2'";
                  $more = 1;
              }
          }else if(!empty($miles1) && empty($miles2)){
              if($more == 1){
                  $sql .= " OR miles > '$miles1'";
              }else{
                  $sql .= " miles > '$miles1'";
                  $more = 1;
              }
          }else if(empty($miles1) && !empty($miles2)){
              if($more == 1){
                  $sql .= " OR miles < '$miles2'";
              }else{
                  $sql .= " miles < '$miles2'";
                  $more = 1;
              }
          }
          $sql .= ";";

          echo "<h3>SQL Statement: ".$sql."</h3><br><hr>";

          $result = $conn->query($sql);
          echo "<table border=1>";
          echo "<tr><td><b>Make</b></td><td><b>Model</b></td><td><b>Year</b></td><td><b>Miles</b></td><td><b>Price</b></td></tr>";
          if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
              echo "<tr><td>".$row["make"]."</td><td>".$row["model"]."</td><td>".$row["year"]."</td><td>".$row["miles"]."</td><td>".$row["price"]."</td></tr>";
            }
          } else {
            echo "0 results";
          }
          echo "</table>";
          $conn->close();
          ?>
            <hr>
            <h2>HTML Search Form</h2>
            <form action="search.php">
            <label for="make">Make:</label><br>
            <input type="text" id="make" name="make"><br>
            <label for="model">Model:</label><br>
            <input type="text" id="model" name="model"><br>
            <label for="miles1">Miles(Lower Bound):</label><br>
            <input type="text" id="miles1" name="miles1"><br>
            <label for="miles2">Miles(Upper Bound):</label><br>
            <input type="text" id="miles2" name="miles2">
            <br>
            <input type="submit" value="Submit">
            </form>
    </body>
</html>