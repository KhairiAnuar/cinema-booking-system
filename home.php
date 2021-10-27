<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="hover.css">
    <title>Home | Cinema Aurora</title>
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://unpkg.com/vue@2.1.10/dist/vue.js"></script>
  </head>
  <body>
    <?php include_once "nav.php" ?>
    <!-- You shouldn't need to edit anything above (Navigation Bar + Top Section) -->

    <div class="homeSection">
      <div>
        <a href="movies.php"><img class="mySlides" src="images/bannerAvengers.png"></a>
        <a href="movies.php"><img class="mySlides" src="images/bannerDeadpool2.jpg"></a>
        <a href="movies.php"><img class="mySlides" src="images/bannerBlackPanther.jpg"></a>
      </div>
      <script>
      var myIndex = 0;
      carousel();

      function carousel() {
          var i;
          var x = document.getElementsByClassName("mySlides");
          for (i = 0; i < x.length; i++) {
             x[i].style.display = "none";  
          }
          myIndex++;
          if (myIndex > x.length) {myIndex = 1}    
          x[myIndex-1].style.display = "block";  
          setTimeout(carousel, 3000); // Change image every 2 seconds
      }
      </script>
    </div>

    <div class="homeSection"> 
      <div class="homeLeft">
        <span class="homeTitle">Now Showing</span>
        <table>
          <tr>
            <td class="homeTD">
              <a href="movies/movies_blackpanther.php"><img class="homePoster" src="images/posterBlackPanther.jpg" alt=""></a>
              <a href="movies/movies_blackpanther.php">Black Panther</a>
            </td>
            <td class="homeTD">
              <a href="movies/movies_avengers.php"><img class="homePoster" src="images/posterAvengers.jpg" alt=""></a>
              <a href="movies/movies_avengers.php">Avengers: Infinity War</a>
            </td>
            <td class="homeTD">
              <a href="movies/movies_rampage.php"><img class="homePoster" src="images/posterRampage.jpg" alt=""></a>
              <a href="movies/movies_rampage.php">Rampage</a>
            </td>
          </tr>
          <tr>
            <td class="homeTD">
              <a href="movies/movies_peterrabbit.php"><img class="homePoster" src="images/posterPeterRabbit.jpg" alt=""></a>
              <a href="movies/movies_peterrabbit.php">Peter Rabbit</a>
            </td>
            <td class="homeTD">
              <a href="movies/movies_readyplayerone.php"><img class="homePoster" src="images/posterReadyPlayerOne.jpg" alt=""></a>
              <a href="movies/movies_readyplayerone.php">Ready Player One</a>
            </td>
            <td class="homeTD">
              <a href="movies/movies_sherlockgnomes.php"><img class="homePoster" src="images/posterSherlockGnomes.jpg" alt=""></a>
              <a href="movies/movies_sherlockgnomes.php">Sherlock Gnomes</a>
            </td>
          </tr>
        </table>
      </div>
      <div class="homeRight">
        <span class="homeTitle">Coming Soon</span>
        <table>
          <tr>
            <td class="homeTD">
              <a href="deadpool2.php"><img class="homePoster" src="images/posterDeadpool2.jpg" alt=""></a>
              <a href="deadpool2.php">Deadpool 2</a>
            </td>
            <td class="homeTD">
              <a href="breath.php"><img class="homePoster" src="images/posterBreath.jpg" alt=""></a>
              <a href="breath.php">Breath</a>
            </td>
            <td class="homeTD">
              <a href="oceans8.php"><img class="homePoster" src="images/posterOceans8.jpg" alt=""></a>
              <a href="oceans8.php">Ocean's 8</a>
            </td>
          </tr>
          <tr>
            <td class="homeTD">
              <a href="lifeoftheparty.php"><img class="homePoster" src="images/posterLifeOfTheParty.jpg" alt=""></a>
              <a href="lifeoftheparty.php">Life of the Party</a>
            </td>
            <td class="homeTD">
              <a href="skyscraper.php"><img class="homePoster" src="images/posterSkyscraper.jpg" alt=""></a>
              <a href="skyscraper.php">Skyscraper</a>
            </td>
            <td class="homeTD">
              <a href="theincredibles2.php"><img class="homePoster" src="images/posterTheIncredibles2.jpg" alt=""></a>
              <a href="theincredibles2.php">The Incredibles 2</a>
            </td>
          </tr>
        </table>
    </div>
    <div class="homeSection">
      <span style="color: #232323">.</span>
      <br>
      <br>
      <br>
    </div>

    <!-- You shouldn't need to edit anything below (Footer) -->
    <footer>
       	<?php include_once "footer.php" ?>
    </footer>
  </body>
</html>