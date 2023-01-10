<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Motors Unlimited</title>
        <link rel="stylesheet" href="/css/inventory.css">
        <link rel="stylesheet" href="/css/slider.css">
        <link rel="stylesheet" href="/css/navbar.css">
        <link rel="stylesheet" href="/css/socials.css">


        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>

        <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
        <script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

        <script src="/javascript/nav.js"></script>

    </head>
    <body style="background-color: #F7F7F7;">
      <!--START NAVBAR-->
      <div class="navbar2">
        <a href="contact.html" style="padding-right: 4%;">CONTACT</a>
        <a href="homepage.html#mid-text" style="padding-right: 1.5%;">MAP</a>
        <img src="/images/revised-point.png" width="20px" style="float: right; margin-top: 5px;">
        <a style="padding-right: 1.5%; color: #717171;">(740)-548-0708</a>
      </div>

        <div id="navlist">
          <a>
          <div class="slideshow-container2">
            
            <div class="mySlides fade">
              <img src="images/CarBrandLogos/chevrolet-logo.png" style="margin-top: 0; width:40px">
            </div>
            
            <div class="mySlides fade">
              <img src="images/CarBrandLogos/ford-logo.png" style="margin-top: 0; width:40px">
            </div>
          
            <div class="mySlides fade">
              <img src="images/CarBrandLogos/ford-mustang-logo.png" style="margin-top: 0; width:40px">
            </div>

            <div class="mySlides fade">
              <img src="images/CarBrandLogos/honda-logo.png" style="margin-top: 0; width:40px">
            </div>
            
            <div class="mySlides fade">
              <img src="images/CarBrandLogos/hyundai-logo.png" style="margin-top: 0; width:40px">
            </div>
          
            <div class="mySlides fade">
              <img src="images/CarBrandLogos/subaru-logo.png" style="margin-top: 0; width:40px">
            </div>
          
            </div>

            <div>
              <span class="dot"></span> 
              <span class="dot"></span> 
              <span class="dot"></span>
              <span class="dot"></span>
              <span class="dot"></span>
              <span class="dot"></span>
            </div>
            </a>
            <script>
            let slideIndex = 0;
            showSlides();
            
            function showSlides() {
              let i;
              let slides = document.getElementsByClassName("mySlides");
              let dots = document.getElementsByClassName("dot");
              for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";  
              }
              slideIndex++;
              if (slideIndex > slides.length) {slideIndex = 1}    
              for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
              }
              slides[slideIndex-1].style.display = "block";  
              dots[slideIndex-1].className += " active";
              setTimeout(showSlides, 2000); // Change image every 2 seconds
            }
            </script>
          
              <a href="homepage.html"><img id="logo" src="images/Logos/BPAlogo.png"></a>
              <a style="padding-left: 20px; margin-top: 2px;" href="inventory.php">Inventory</a>
              <a style="padding-left: 20px; margin-top: 2px;" href="service.html">Service</a>
            </div>
        </div>
        <!--END NAVBAR-->
        
        <div class="container-fluid" style="padding: 0;">
            <div class="row">
              <!--
              <div class="col-2 search">
                <div class="container-fluid" style="padding: 0;">
                  <div id="search-head" class="row" style="box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;">
                      <center>
                          <h1 style="font-weight: bold; padding-top: 5px; padding-bottom: 5px;">Search</h1>
                      </center>
                  </div>
                  <div class="row selector-row">
                      <center>
                          <select id="selectors" style="padding-right: 10%; background-image: url(images/dropdown.png); background-repeat: no-repeat, repeat; background-position: right 1.5em top 50%, 0 0; background-size: 15%; font-weight: bold;">
                              <option value="" disabled selected hidden>Make</option>
                              <option value="volv">Volvo</option>
                              <option value="saab">Saab</option>
                              <option value="opel">Opel</option>
                              <option value="audi">Audi</option>
                          </select>
                      </center>
                  </div>
                  <div class="row">
                    <center>
                      <div class="dropdown">
                        <button style="background-image: url(images/dropdown.png); background-repeat: no-repeat, repeat; background-position: right 1.5em top 50%, 0 0; background-size: 15%; font-weight: bold;" class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Dropdown button
                        </button>
                        <div style="margin-left: 87px;" class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item" href="#">Action</a>
                          <a class="dropdown-item" href="#">Another action</a>
                          <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                      </div>
                    </center>
                  </div>
                  <div class="row">
                    
                  </div>
                </div>
              </div>
              -->
                <div class="col-12 ">
                  <div class="flex-container" style="margin-top: 125px;">
                    <?php
          
                      $servername = "localhost";
                      $username = "root";
                      $password = "password";
                      $database = "bpa";
          
                      // Create connection
                      $conn = new mysqli($servername, $username, $password, $database);
          
                      $sql = "SELECT * FROM vehicle;";
                      $result = $conn->query($sql);
          
                      if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                              ?>
                              <a style="text-decoration: none;" href="viewModel.php?id=<?=$row["vehicle_id"]?>" border="0">
                                  <div class="flex-item" style="box-shadow: rgba(17, 17, 26, 0.1) 0px 8px 24px, rgba(17, 17, 26, 0.1) 0px 16px 56px, rgba(17, 17, 26, 0.1) 0px 24px 80px;">

                                      <img style="width: 275px; border-radius: 10px 10px 0 0; padding-bottom: 10px;" src="/images/cars/<?=$row["vehicle_img"]?>">
                                      <center>
                                        <span class="f1"><?=$row["vehicle_year"]?></span>
                                        <span class="f2"><?=$row["vehicle_make"]?></span>
                                        <span class="f3"><?=$row["vehicle_model"]?></span>
                                      </center>
                                      <span class="f4">Ext:</span><div class="f4-div" style="background-color: <?=$row["vehicle_extcolor"]?>;"></div><br>
                                      <span class="f5">Int:</span><div class="f5-div" style="background-color: <?=$row["vehicle_intcolor"]?>;"></div>
                                      <center>
                                        <span class="f6">$<?=number_format($row["vehicle_price"])?></span>
                                      </center>
                                      <center>
                                        <div class="go-to">
                                          <h1 class="go-to-h1">Get Sale Price</h1>
                                        </div>
                                      </center>
                                  </div>
                              </a>    
                              <?php
                        }
                      } else {
                        echo "0 Results";
                      }
                      echo "</table>";
                      $conn->close();
                    ?>  
                  </div>
                </div>
            </div>
        </div>
    </body>
</html>