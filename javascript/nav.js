// Scrolls down 90px from the top of
    // the document, to resize the navlist
    // padding and the title font-size
    window.onscroll = function() {
        scrollFunction()
    };
         
    function scrollFunction() {
        if (document.body.scrollTop > 90 ||
            document.documentElement.scrollTop > 90)
        {
            document.getElementById("navlist")
                        .style.padding = "5px 10px";
                 
            document.getElementById("logo")
                    .style.fontSize = "15px";
        }
        else {
            document.getElementById("navlist")
                        .style.padding = "20px 10px";
                         
            document.getElementById("logo")
                        .style.fontSize = "20px";
        }
    }

    /*
var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
  var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.getElementById("socials").style.top = "0";
  } else {
    document.getElementById("socials").style.top = "-50px";
  }
  prevScrollpos = currentScrollPos;
}
*/