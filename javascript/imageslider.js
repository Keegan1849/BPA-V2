let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let balls = document.getElementsByClassName("ball");
  for (i = 0; i < 11; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > 11) {slideIndex = 1}

  //for (i = 0; i < balls.length; i++) {
    //balls[i].className = balls[i].className.replace(" active1", "");
  //}
  for (i = 0; i < 7; i++) {
    balls[i].className = balls[i].className.replace(" active1", "");
  }
  slides[slideIndex-1].style.display = "block";  
  balls[slideIndex-1].className += " active1";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}