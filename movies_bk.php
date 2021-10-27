<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="hover.css">
    <title>Movies | Cinema Aurora</title>
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

    <!-- Middle Section (Content Page) -->
    <!-- Put your chosen content into this div tag-->
    <!-- Create new class ids to fit your content (in css) -->
    <div class="container">
      <span class="mainTitle">All Movies</span>
      <hr class="mainHR">
      <br>
      <div class="mainDescription">
      
        <table class="movietable">
                <tr width="100%">
                    <form id="movie1" action="">
                        <td class="movietd" width="33%">
                            <a><h2>Black Panther</h2>
                            <img src="images/posterBlackPanther.jpg" width="80%">
                            
                            
                            <a href="movies/movies_blackpanther.php"><button type="button" class="AddCart">Movie Details</button></a>
                            <br>
                            <a href="sessiontimes.php"><button type="button" class="AddCart">View Sessions</button></a>
                        </td>
                    </form>


                    <form id="movie2" action="">
                        <td class="movietd" width="33%">
                            <a><h2>Avengers: Infinity War</h2>
                            <img src="images/posterAvengers.jpg" width="80%">
                          
                           
                            <a href="movies/movies_avengers.php"><button type="button" class="AddCart">Movie Details</button></a>
                            <br>
                            <a href="sessiontimes.php"><button type="button" class="AddCart">View Sessions</button></a>
                        </td>
                    </form>


                    <form id="movie3" action="">
                        <td class="movietd" width="33%">
                            <a><h2>Rampage</h2>
                            <img src="images/posterRampage.jpg" width="80%">
                            
                          
                            <a href="movies/movies_rampage.php"><button type="button" class="AddCart">Movie Details</button></a>
                            <br>
                            <a href="sessiontimes.php"><button type="button" class="AddCart">View Sessions</button></a>
                        </td>
                    </form>
                </tr>
                <tr width="100%">


                    <form id="movie4" action="">
                        <td class="movietd">
                            <a><h2>Peter Rabbit</h2>
                            <img src="images/posterPeterRabbit.jpg" width="80%">
                         

                            <a href="movies/movies_peterrabbit.php"><button type="button" class="AddCart">Movie Details</button></a>
                            <br>                            
                            <a href="sessiontimes.php"><button type="button" class="AddCart">View Sessions</button></a>
                        </td>
                    </form>


                    <form id="movie5" action="">
                        <td class="movietd">
                            <a><h2>Ready Player One</h2>
                            <img src="images/posterReadyPlayerOne.jpg" width="80%">
                          
                          
                            <a href="movies/movies_readyplayerone.php"><button type="button" class="AddCart">Movie Details</button></a>
                            <br>
                            <a href="sessiontimes.php"><button type="button" class="AddCart">View Sessions</button></a>
                        </td>
                    </form>


                    <form id="movie6" action="">
                        <td class="movietd">
                            <a><h2>Sherlock Gnomes</h2>
                            <img src="images/posterSherlockGnomes.jpg" width="80%">
                           
                           
                            <a href="movies/movies_sherlockgnomes.php"><button type="button" class="AddCart">Movie Details</button></a>
                            <br>
                            <a href="sessiontimes.php"><button type="button" class="AddCart">View Sessions</button></a>
                        </td>
                    </form>
              </tr>
            </table>
      </div>
    
    </div>

    <!-- You shouldn't need to edit anything below (Footer) -->
    <footer>
       	<?php include_once "footer.php" ?>
    </footer>
  </body>
</html>