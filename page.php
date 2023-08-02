  <?php
    include_once 'includes/header.php';
  ?>

    <div class="slideshow-container">
        <div class="slide">
          <img src="images/uj.png" alt="Slide 1">
        </div>
        <div class="slide">
            <img src="images/download (1).jpg" alt="Slide 1">
        </div>
        <div class="slide">
          <img src="images/download.jpg" alt="Slide 2">
        </div>
        <div class="slide">
          <img src="images/download.png" alt="Slide 3">
        </div>
    </div>

    <h1 class="main-tit">Appoint Me</h1>
    <ul class="class">
        <a href="StartApp.php">
          <li >Start Application</li>
        </a>

        <a href="banking.php">
          <li>Upload Proof of Banking</li>
        </a>

        <a href="status.php">
          <li class="no-border">Check Status</li>
        </a>
    </ul>

    
      

<script src="all.js"  ></script>
<script>
    var slides = document.getElementsByClassName("slide");
var currentSlideIndex = 0;

function showSlide(index) {
  if (index < 0 || index >= slides.length) {
    return;
  }

  // Hide all slides
  for (var i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }

  // Show the selected slide
  slides[index].style.display = "block";
  currentSlideIndex = index;
}

function nextSlide() {
  var nextIndex = currentSlideIndex + 1;
  if (nextIndex >= slides.length) {
    nextIndex = 0;
  }
  showSlide(nextIndex);
}

// Automatically advance to the next slide every 3 seconds
setInterval(nextSlide, 5000);

// Show the first slide initially
showSlide(0);

</script>
<?php
  include_once 'includes/footer.php';
?>