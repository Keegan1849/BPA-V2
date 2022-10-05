let slideShow = 0;
slideShow();
function slideShow() {

  let i;
  let slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++ ) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length){slideIndex = 1}
  for (i=0; i < slides.length; i++){
    dots[i].className = dots[i].className.replace("active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000);
}