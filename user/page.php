  <?php
    include_once '../includes/header.php';
    include_once '../includes/slides.php';
  ?>

    <h1 class="main-tit">Appoint Me</h1>
    <ul class="class">
        <a href="StartApp.php">
          <li >Start Application</li>
        </a>

        <a href="status.php">
          <li>Check Status / Cancel Application</li>
        </a>

        <a href="status.php">
          <li class="no-border">Submit Monthly Claims</li>
        </a>

        <!-- <div class="list-group" style="font-size:16px;">
                <a href="2.html" class="list-group-item">Start Application</a>
                <a href="6.html" class="list-group-item">Check Status / Cancel Application</a>
                <a href="ResultsAcademic.aspx" class="list-group-item">Submit Monthly Claims</a>
        </div> -->
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
  include_once '../includes/footer.php';
?>