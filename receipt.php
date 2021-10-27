<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="hover.css">
    <title>Receipt | Cinema Aurora</title>
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://js.stripe.com/v3/"></script>
    <script src="https://unpkg.com/vue@2.1.10/dist/vue.js"></script>
  </head>
  <body>
    <?php include_once "nav.php" ?>
    <!-- You shouldn't need to edit anything above (Navigation Bar + Top Section) -->

    <!-- Middle Section (Content Page) -->
    <!-- Put your chosen content into this div tag-->
    <!-- Create new class ids to fit your content (in css) -->
    <div class="container" id="receipt">
      <span class="mainTitle">Your Receipt</span>
      <hr class="mainHR">
      <br>
      <div class="mainDescription row">
        <div class="col-md-12" v-if="oldcart !== null">
          <div class="row" v-for="item in oldcart">
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
              <p>Tickets : {{item.ticketOptions.quantity}}</p>
              <p>Seats : 
                  <span v-for="seat in item.allocatedSeats">{{seat}} </span>
              <p>Subtotal : ${{item.ticketOptions.quantity * item.ticketOptions.unitprice}}</p>
            </div>
            <hr class="mainHR">
            <h3>Thank you for your booking. You will receive an email confirmation shortly</h3>
          </div>
        </div>
      </div>
      
    </div>

    <!-- You shouldn't need to edit anything below (Footer) -->
    <footer>
        	<?php include_once "footer.php" ?>
    </footer>
  </body>
    <script src="receipt.js"></script>
</html>