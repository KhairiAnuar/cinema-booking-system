<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="hover.css">
    <title>Session Times | Cinema Aurora</title>
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
    <div class="container" id="session" style="color: white">
      <div class="row">
        <hr class="col-md-12" style="border-color: transparent;">
        <!--Movie list-->
        <div class="col-md-4">
          <h3>Select A Movie</h3>
          <ul class="row list-group list-group-flush">
            <li class="list-group-item" v-for="movie in movieIncludeSession" 
                v-on:click="selectMovie(movie.id)"
                v-bind:class="movie.id === selectedMovie.id ? 'list-group-item-warning' : ''" 
                style="background-color: transparent; border-color: white; cursor: pointer;">{{ movie.title }}</li>
          </ul>
        </div>
        
        <!--Movie detail and session-->
        <div class="col-md-8" v-if="selectedMovie !== false">
          <div class="row">
            <div class="col-md-3">
              <img :src="selectedMovie.imgUrl" width="100%"></img>
            </div>
            <div class="col-md-9">
              <h3>{{selectedMovie.title}}</h3>
              <p><b>Description</b>: {{ selectedMovie.desc}}</p>
              <p><b>Genre</b>: {{selectedMovie.genre}} </p>     
              <p><b>Duration</b>: {{selectedMovie.duration}}</p>
            </div>
            <div class="col-md-12">
              <div class="row">
                <div class="col-md-4">
                  <h4>Filter</h4>
                  <ul class="list-group list-group-flush list-group-flush">
                    <li class="list-group-item" v-for="filter in dateFilter" 
                        v-bind:class="filter.selected ? 'list-group-item-warning' : ''" 
                        v-on:click="selectDateFilter(filter.id)" 
                        style="background-color: transparent; border-color: white; cursor: pointer;">{{ filter.text }}</li>
                  </ul>
                </div>
                <div class="col-md-8">
                  <h4>Movie Session</h4>
                  <ul v-if="filteredSessions.length !== 0" class="list-group list-group-flush">
                    <li class="list-group-item" v-for="session in filteredSessions" style="background-color: transparent; border-color: white">
                      <div class="row">
                        <div class="col-md-8">
                          <p>Time: {{ session.start | displaySessionTime }}</p>
                          <p>Available: {{ session.availableSeat.length }} seats</p>
                        </div>
                        <div class="col-md-4">
                          <button type="button" class="btn btn-outline-light" data-toggle="modal" data-target="#exampleModal" @click="selectedSession = session">Add to cart</button>
                        </div>
                      </div>
                    </li>
                  </ul>
                  <h4 v-else >No sessions found</h4>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <!--Modal-->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content" style="color: black;">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ticket Options</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <h3>{{selectedMovie.title}}</h3>
                <p><b>Description</b>: {{selectedMovie.desc}}</p>
                <hr width="90%">
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">Ticket</th>
                      <th scope="col">Amount</th>
                      <th scope="col">Price</th>
                      <th scope="col">Total</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr >
                      <th>{{ selectedMovie.title }} movie</th>
                      <td><input class="form-control" type="number" v-model="ticketOptions.quantity" min="1" max="5"/></td>
                      <td>{{ ticketOptions.unitprice}}</td>
                      <td>{{ ticketOptions.unitprice * ticketOptions.quantity}}</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" data-dismiss="modal" @click="addToCart">Confirm</button>
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
  </body>
  
  <script src="session.js"></script>
</html>