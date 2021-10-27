<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="hover.css">
    <title>Check out | Cinema Aurora</title>
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://js.stripe.com/v3/"></script>
    <script src="https://unpkg.com/vue@2.1.10/dist/vue.js"></script>
    <style type="text/css">
      .StripeElement {
        background-color: white;
        height: 40px;
        padding: 10px 12px;
        border-radius: 4px;
        border: 1px solid transparent;
        box-shadow: 0 1px 3px 0 #e6ebf1;
        -webkit-transition: box-shadow 150ms ease;
        transition: box-shadow 150ms ease;
      }
      
      .StripeElement--focus {
        box-shadow: 0 1px 3px 0 #cfd7df;
      }
      
      .StripeElement--invalid {
        border-color: #fa755a;
      }
      
      .StripeElement--webkit-autofill {
        background-color: #fefde5 !important;
      }
      
      #card-element {
        width: 100%;
      }
    </style>
  </head>
  <body>
    <?php include_once "nav.php" ?>
    <!-- You shouldn't need to edit anything above (Navigation Bar + Top Section) -->

    <!-- Middle Section (Content Page) -->
    <!-- Put your chosen content into this div tag-->
    <!-- Create new class ids to fit your content (in css) -->
    <div class="container" id="checkout">
      <span class="mainTitle">Check out</span>
      <hr class="mainHR">
      <br>
      <div class="mainDescription row">
        <div class="col-md-12" v-if="cart !== null">
          <table class="table table-hover">
            <tr>
              <th>Title</th>
              <th>Time</th>
              <th>Seat</th>
              <th>Subtotal</th>
            </tr>
            <tr v-for="item in cart">
              <th>{{item.movie.title}}</th>
              <th>{{item.session.start | displaySessionTime}}</th>
              <th>{{item.ticketOptions.seats.length === 0 ? "Auto" : ""}} <span v-for="seat in item.ticketOptions.seats">{{seat}} </span></th>
              <th>${{item.ticketOptions.quantity * item.ticketOptions.unitprice</item>}}</th>
            </tr>
          </table>
          <h3>Total: ${{total}}</h3>
        </div>
        
        <hr class="mainHR">
        
        <div class="col-md-12">
          <form v-on:submit.prevent="submit" class="row">
            <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleFormControlInput1">First Name</label>
                  <input type="text" class="form-control" id="firstname" placeholder="John" required>
                </div>
                <div class="form-group">
                  <label for="exampleFormControlInput1">Email Address</label>
                  <input type="email" class="form-control" id="email" placeholder="name@example.com" required>
                </div>
                <div class="form-group">
                  <label for="exampleFormControlInput1">Mobile Phone</label>
                  <input type="tel" class="form-control" id="phone" placeholder="012189329392" required>
                </div>
                <input type="submit" value="Submit" class="btn btn-outline-light"/>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="exampleFormControlInput1">Last Name</label>
                <input type="text" class="form-control" id="lastname" placeholder="Doe" required>
              </div>
              <div class="form-row">
                <label for="card-element">
                  Credit or debit card
                </label>
                <div id="card-element">
                  <!-- A Stripe Element will be inserted here. -->
                </div>
            
                <!-- Used to display Element errors. -->
                <div id="card-errors" role="alert"></div>
              </div>
            </div>
          </form>
        </div>
      </div>
      
    </div>

    <!-- You shouldn't need to edit anything below (Footer) -->
    <footer>
        	<?php include_once "footer.php" ?>
    </footer>
  </body>
    <script src="checkout.js"></script>
</html>