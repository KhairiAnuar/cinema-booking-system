<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="hover.css">
    <title>FAQ | Cinema Aurora</title>
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
      <span class="mainTitle">F.A.Q</span>
      <hr class="mainHR">
      <br>
      <div class="mainDescription">
       <h3> 1. Where can I find session times?</h3>
       <br>
       To view movie session times, <a href="sessiontimes.php">click here</a>
       <h3> 2. I got an error message when booking tickets. What should I do?</h3>
       <br>
       Do not attempt to process the booking again. Contact our team at Cinema Aurora Customer Service <br> <a href="contactus.php">click here</a>
       <h3> 3. Can I change my online booking after purchase?</h3>
       <br>
       All bookings made on Cinema Aurora are not transferable or refundable. Unfortunately no changes can be made.
      <h3> 4. I have booked my tickets online. Do I still need to go to the ticket box?</h3>
       <br>
       If you have your ticket confirmation email from the order containing the QR code, you can may the ticket box and go straight to the cinema.
        <h3> 5. What do the film classifications mean?</h3>
       <br>
       <p>For more information, visit the Australian Classification Board <a href="http://www.classification.gov.au">www.classification.gov.au</a></p>
      </div>
      <br>
    </div>

    <!-- You shouldn't need to edit anything below (Footer) -->
    <footer>
      	<?php include_once "footer.php" ?>
    </footer>
  </body>
</html>