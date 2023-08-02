<?php
  include_once 'includes/header.php';
  require_once 'includes/status.inc.php';
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

    <h1 style="text-align: center; font-size: 35px;">Appoint Me</h1>

    

    <table class="status">
        <thead>
          <tr>
            <th>Student number</th>
            <th>Initials and Surname</th>
            <!-- <th>Application date</th> -->
            <th>Status</th>
            <th>Last action</th>
            <th class="action-th">action</th>
          </tr>
        </thead>
        <tbody>
          <?php


              while ($row = mysqli_fetch_assoc($result)) {
                  echo "<tr>";
                  echo "<td>" . $row['StudentNo'] . "</td>";
                  echo "<td>" . $row['Fname'][0]. ' '. $row['Lname']."</td>";
                  echo "<td>" . $row['Status'] . "</td>";
                  // echo "<td>" . $row['EmployeeNumber'] . "</td>";
                  // echo "<td>" . $row['BankName'] . "</td>";
                  // echo "<td>" . $row['ApplicationDate'] . "</td>";
                  // echo "<td>" . $row['Status'] . "</td>";
                  echo "<td>" . $row['LastAction'] . "</td>";
                  echo "<td class=\"action-td\"><button class='cancel-button'>Delete Application</button></td>";
                  echo "</tr>";
              }
            ?>
          <!-- Add more rows for each application here -->
        </tbody>
    </table>

    <div class="end-butt">
        <a href="page.php">
            <!-- <input type="button" value="Return to Previous page" class="back butt" name="back"> -->
            <button type="submit" class="submits-button login-inputs" name="back">&nbsp;&nbsp;Return &nbsp;&nbsp;</button>

        </a>
    </div>

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