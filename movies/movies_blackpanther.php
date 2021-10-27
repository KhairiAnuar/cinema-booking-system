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
      <span class="mainTitle">Black Panther</span>
      <hr class="mainHR">
      <br>
    
   
      <div class="container">
        <div class="moviediv1">

        <img src="../images/posterBlackPanther.jpg" width="80%">
        <p><img src="../images/rating_M.png" width="50%"></p>
        <table>

        </table>
      </div>
            <div class="moviediv2">
                <form id="movie1" action="">
              
          <iframe align="left" src="https://www.youtube.com/embed/xjDjIWPwcPU"></iframe>

          <h1>Synopsis</h1>
              
          <p>After the events of Captain America: Civil War, King T'Challa returns home to the reclusive, technologically advanced African nation of 
          Wakanda to serve as his country's new leader. However, T'Challa soon finds that he is challenged for the throne from factions within his own 
          country. When two foes conspire to destroy Wakanda, the hero known as Black Panther must team up with C.I.A. agent Everett K. Ross and members of 
          the Dora Milaje, Wakanadan special forces, to prevent Wakanda from being dragged into a world war.</p>

          <p><b>Director</b> Ryan Coogler</p>    
          <p><b>Main Cast</b> Chadwick Boseman, Michael B. Jordan, Lupita Nyong'o </p>   
          <p><b>Genre</b> Action </p>     
          <p><b>Running Time</b> 134 MIN</p>

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