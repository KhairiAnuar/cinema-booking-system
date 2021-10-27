<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="../style.css">
    <link rel="stylesheet" type="text/css" href="../hover.css">
    <title>Movies | Cinema Aurora</title>
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico"/>
  </head>
  <body>
    <div class="topSection">
      <div>
          <a href="home.php"><img class="logo" src="../images/logo.png" alt="Cinema Aurora Logo"></a>
      </div>
      <ul class="nav">
          <li><a class="hvr-underline-from-center" href="../home.php">Home</a></li>
          <li><a class="hvr-underline-from-center" href="../movies.php" style="color: #006bb3;">Movies</a></li>
          <li><a class="hvr-underline-from-center" href="../sessiontimes.php">Session Times</a></li>
          <li><a class="hvr-underline-from-center" href="../location.php">Location</a></li>
          <li><a class="hvr-underline-from-center" href="../contactus.php">Contact Us</a></li>
          <li><a class="hvr-underline-from-center" href="../faq.php">FAQ</a></li>
          <li><a class="hvr-underline-from-center" href="../cart.php"><img src="images/cart-new.png" width="40px"></a></li>
      </ul>
    </div>
    <!-- You shouldn't need to edit anything above (Navigation Bar + Top Section) -->

    <!-- Middle Section (Content Page) -->
    <!-- Put your chosen content into this div tag-->
    <!-- Create new class ids to fit your content (in css) -->
    <div class="container">
      <span class="mainTitle">Ready Player One</span>
      <hr class="mainHR">
      <br>
    
   
      <div class="container">
        <div class="moviediv1">

        <img src="../images/posterReadyPlayerOne.jpg" width="80%">
        <p><img src="../images/rating_PG.png" width="50%"></p>
        <table>

        </table>
      </div>
            <div class="moviediv2">
                <form id="movie1" action="">
              
          <iframe align="left" src="https://www.youtube.com/embed/cSp1dM2Vj48"></iframe>

          <h1>Synopsis</h1>
              
          <p>When the creator of a virtual reality world called the OASIS dies, he releases a video in which he challenges all OASIS 
          users to find his Easter Egg, which will give the finder his fortune.</p>

          <p><b>Director</b> Steven Spielberg </p>    
          <p><b>Main Cast</b> Tye Sheridan, Olivia Cooke, Ben Mendelsohn</p>   
          <p><b>Genre</b> Action, Adventure, Sci-Fi </p>     
          <p><b>Running Time</b> 140 MIN</p>

          <a href="../sessiontimes.php"><button type="button" class="AddCart">View Sessions</button></a>
                </form>
                <br>
                <br>
                <br>
                <br>
                <br>

      </div>


    </div>

    <!-- You shouldn't need to edit anything below (Footer) -->
    <footer>
        <?php include_once "../footer.php" ?>
    </footer>
  </body>
</html>