<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="hover.css">
    <title>Cart | Cinema Aurora</title>
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
    <div class="container" id="cart">
      <div class="row">
        <div class="col-md-9">
          <span class="mainTitle">Shopping Cart - ${{total}}</span>
        </div>
        <div class="col-md-3">
          <br>
          <button type="button" class="btn btn-outline-light" @click="toCheckOut">PROCEED TO CHECKOUT</button>
        </div>
      </div>
      <hr class="mainHR">
      <br>
      <div class="mainDescription row">
        <div class="col-md-12" v-if="cart !== null">
          <div class="row" v-for="item in cart">
            <div class="col-md-2">
              <img :src="item.movie.imgUrl" width="100%"></img>
            </div>
            <div class="col-md-4">
              <h3>{{item.movie.title}}</h3>
              <p>Genre: {{item.movie.genre}}</p>
              <p>Time: {{item.session.start | displaySessionTime}}</p>
              <p>Duration: {{item.movie.duration}}</p>
            </div>
            <div class="col-md-6">
              <br>
              <p>Tickets : <input class="form-control" type="number" v-model="item.ticketOptions.quantity" min="1" max="5" style="display: inline-block; width: 20%;"/></p>
              <p>Seats : {{item.ticketOptions.seats.length === 0 ? "Auto" : ""}} 
                  <span v-for="seat in item.ticketOptions.seats">{{seat}} </span>
                  | <button type="button" class="btn btn-outline-light" data-toggle="modal" data-target="#exampleModal" @click="selectedSession = item">SELECT SEAT</button></p>
              <p>Subtotal : ${{item.ticketOptions.quantity * item.ticketOptions.unitprice}}</p>
              <button type="button" class="btn btn-outline-light" @click="removeItem(item.session)">REMOVE</button>
            </div>
            <hr class="mainHR">
          </div>
        </div>
        
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg modal-dialog-centered" role="document" v-if="selectedSession !== null">
            <div class="modal-content" style="color: black;">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">SELECT SEATS</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <p>Movie: {{selectedSession.movie.title}}</p>
                <p>Number of seats: {{selectedSession.ticketOptions.quantity}}</p>
                <p>Selected: <span v-for="seat in selectedSeats">{{seat}} </span> </p>
                <hr width="90%">
                <table class="table">
                  <tr>
                    <td v-for="a in seats[0].seats">
                      {{a}}
                      <input type="checkbox" :id="a" :value="a" v-model="selectedSession.ticketOptions.seats" style="cursor: pointer;" :disabled="isAvailable(a)"/>
                    </td>
                  </tr>
                  <tr>
                    <td v-for="a in seats[1].seats">
                      {{a}}
                      <input type="checkbox" :id="a" :value="a" v-model="selectedSession.ticketOptions.seats" style="cursor: pointer;" :disabled="isAvailable(a)"/>
                    </td>
                  </tr>
                  <tr>
                    <td v-for="a in seats[2].seats">
                      {{a}}
                      <input type="checkbox" :id="a" :value="a" v-model="selectedSession.ticketOptions.seats" style="cursor: pointer;" :disabled="isAvailable(a)"/>
                    </td>
                  </tr>
                  <tr>
                    <td v-for="a in seats[3].seats">
                      {{a}}
                      <input type="checkbox" :id="a" :value="a" v-model="selectedSession.ticketOptions.seats" style="cursor: pointer;" :disabled="isAvailable(a)"/>
                    </td>
                  </tr>
                  <tr>
                    <td v-for="a in seats[4].seats">
                      {{a}}
                      <input type="checkbox" :id="a" :value="a" v-model="selectedSession.ticketOptions.seats" style="cursor: pointer;" :disabled="isAvailable(a)"/>
                    </td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>

    </div>

    <!-- You shouldn't need to edit anything below (Footer) -->
    <footer>
      	<?php include_once "footer.php" ?>
    </footer>
  </body>
  <script src="cart.js"></script>
</html>