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
      <div class="mainDescription row" id="movie">
        <div class="col-md-4" v-for="movie in movies">
            <a><h2>{{movie.title}}</h2>
            <img :src="movie.imgUrl" width="80%">
            
            
            <button type="button" class="AddCart" data-toggle="modal" data-target="#exampleModal" @click="selectMovie(movie)">Movie Details</button>
            <br>
            <a href="sessiontimes.php"><button type="button" class="AddCart">View Sessions</button></a>
        </div>
        <!--Modal-->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" v-if="selectedMovie !== null">
          <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content" style="color: black">
              <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel">{{selectedMovie.title}}</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                  <iframe align="left" :src="selectedMovie.trailerUrl"></iframe>
                  <br>
                  <h1>Information</h1>
                  <p><b>Description</b>: {{selectedMovie.desc}}</p>
                  <p><b>Director</b>: {{selectedMovie.director}}</p>
                  <p><b>Main Cast</b>: {{selectedMovie.mainCast}}</p>   
                  <p><b>Genre</b>: {{selectedMovie.genre}} </p>     
                  <p><b>Running Time</b>: {{selectedMovie.duration}}</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    
    </div>
    <!-- You shouldn't need to edit anything below (Footer) -->
    <footer>
       	<?php include_once "footer.php" ?>
    </footer>
    
  <script src="movie.js"></script>
  </body>
</html>