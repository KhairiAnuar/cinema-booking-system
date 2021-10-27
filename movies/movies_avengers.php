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
          <li><a class="hvr-underline-from-center" href="../cart.php"><img src="../images/cart-new.png" width="40px"></a></li>
      </ul>
    </div>
    <!-- You shouldn't need to edit anything above (Navigation Bar + Top Section) -->

    <!-- Middle Section (Content Page) -->
    <!-- Put your chosen content into this div tag-->
    <!-- Create new class ids to fit your content (in css) -->
    <div class="container">
      <span class="mainTitle">Avengers: Infinity War</span>
      <hr class="mainHR">
      <br>
    
   
      <div class="container">
        <div class="moviediv1">

        <img src="../images/posterAvengers.jpg" width="80%">
        <p><img src="../images/rating_M.png" width="50%"></p>
        <table>

        </table>
      </div>
            <div class="moviediv2">
                <form id="movie1" action="">
              
          <iframe align="left" src="https://www.youtube.com/embed/6ZfuNTqbHE8"></iframe>

          <h1>Synopsis</h1>
              
          <p>The Avengers and their allies must be willing to sacrifice all in an attempt to defeat the 
          powerful Thanos before his blitz of devastation and ruin puts an end to the universe.</p>

          <p><b>Director</b> Anthony Russo, Joe Russo</p>    
          <p><b>Main Cast</b> Robert Downey Jr., Chadwick Boseman, Mark Ruffalo, Chris Hemsworth </p>   
          <p><b>Genre</b> Action, Adventure, Fantasy </p>     
          <p><b>Running Time</b> 149 MIN</p>

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