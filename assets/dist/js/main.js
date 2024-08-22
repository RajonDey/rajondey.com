jQuery(document).ready( function($){
	
    /* 
    sidebar functions 
    -----------------------
    */
    $(document).on('click', '.js-toggleSidebar', function() {
        $( '.rdcircles-sidebar' ).toggleClass( 'sidebar-closed' );
        $( 'body' ).toggleClass( 'no-scroll' );
        $( '.sidebar-overlay' ).fadeToggle( 320 );
    });

    /*
    STICKY NAVBAR CODES HERE
    ....................................
    */
    (function($){
    var prevScrollpos = window.pageYOffset;
    window.onscroll = function() {
    var currentScrollPos = window.pageYOffset;
        if (prevScrollpos > currentScrollPos) {
        document.getElementById("sticky-navbar").style.top = "0";
        document.getElementById("sticky-navbar").classList.remove("sticky-hide");
        } else {
        document.getElementById("sticky-navbar").style.top = "-55px";
        document.getElementById("sticky-navbar").classList.add("sticky-hide");;
        }
        prevScrollpos = currentScrollPos;
    }
    
    $(function(){
        $(window).scroll(function(e) {
        if($(this).scrollTop()>300){
            document.getElementById("sticky-navbar").style.display = "block";
        }
        else{
            document.getElementById("sticky-navbar").style.display = "none";
    
        }
        });
    });
    
    })(jQuery);

    $("#list-toggle").click(function() {
        $(this).toggleClass("on");
        $("#myTab").slideToggle();
    });
});

/*
    PORTFOLIO PAGE FUNCTION HERE
  ....................................
*/

// Open the Modal
function openModal() {
  document.getElementById("portfolioModal").style.transform = "scale(1)";
}
// Close the Modal
function closeModal() {
  document.getElementById("portfolioModal").style.transform = "scale(0)";
}

var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides((slideIndex += n));
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides((slideIndex = n));
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("projectSlides");
  var dots = document.getElementsByClassName("demo");
  // var captionText = document.getElementById("caption");
  if (n > slides.length) {
    slideIndex = 1;
  }
  if (n < 1) {
    slideIndex = slides.length;
  }
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex - 1].style.display = "block";
  dots[slideIndex - 1].className += " active";
  // captionText.innerHTML = dots[slideIndex - 1].alt;
}

/*
    EMAIL TEMPLATE MODAL
  ....................................
*/
//Open the Modal
function openModalEmails() {
  document.getElementById("portfolioModalEmails").style.transform = "scale(1)";
}
// Close the Modal
function closeModalEmails() {
  document.getElementById("portfolioModalEmails").style.transform = "scale(0)";
}
var slideIndexx = 1;
showSlidesx(slideIndexx);

// Next/previous controls
function plusSlidesEmails(n) {
  showSlidesx((slideIndexx += n));
}
// Thumbnail image controls
function currentSlideEmails(n) {
  showSlidesx((slideIndexx = n));
}
// Main Function
function showSlidesx(n) {
  var x;
  var slidesx = document.getElementsByClassName("projectSlidesEmails");
  var dots = document.getElementsByClassName("demo");
  if (n > slidesx.length) {
    slideIndexx = 1;
  }
  if (n < 1) {
    slideIndexx = slidesx.length;
  }
  for (x = 0; x < slidesx.length; x++) {
    slidesx[x].style.display = "none";
  }
  for (x = 0; x < dots.length; x++) {
    dots[x].className = dots[x].className.replace(" active", "");
  }
  slidesx[slideIndexx - 1].style.display = "block";
  dots[slideIndexx - 1].className += " active";
}