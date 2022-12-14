<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Motors Unlimited</title>
        <link rel="stylesheet" href="/css/inventory.css">
        <link rel="stylesheet" href="/css/slider.css">
        <link rel="stylesheet" href="/css/navbar.css">
        <link rel="stylesheet" href="/css/socials.css">
        <link rel="stylesheet" href="/css/service.css">
        <link rel="stylesheet" href="/css/serviceSlider.css">




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
        <a href="homepage.html #gmap_canvas" style="padding-right: 1.5%;">MAP</a>
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
          
              <a href="homepage.html"><img id="logo" src="images/logos/BPA logo.png"></a>
              <a style="padding-left: 20px; margin-top: 2px;" href="inventory.php">Inventory</a>
              <a style="padding-left: 20px; margin-top: 2px;" href="service.html">Service</a>
            </div>
        </div>
        <!--END NAVBAR-->
        
        <div class="container-fluid" style="padding: 0;">
            <div class="row">


                  <div class="row">
        <center>
        <img style="padding-top:10px;"src="/images/befunky.jpg">

        </center>
                  </div>
                </div>

              </div>
                <div class="col-10">
                  <div class="flex-container" style="margin-top: 125px;">
                            
                                                          
                                  
                    <span class="f1" ></span>
                    <span class="f2"></span>
                    <span class="f3"></span>
                  </div>
                </div>
            </div>
        </div>
    </body>
</html>