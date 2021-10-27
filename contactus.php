<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="hover.css">
    <title>Contact Us | Cinema Aurora</title>
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
      <span class="mainTitle">Contact Us</span>
      <hr class="mainHR">
      <br>
     
      <div class="mainDescription">
        <h3>If you have any questions fill the form below and we will respond as soon as possible.</h3>
        <div class="formDiv">
          <div class="formDiv1">
          <form action="" method="post" target="_blank">
            <label>First name &#42;</label><input type="text" name="fName " placeholder="" pattern="[A-Za-z- \.']+" required>
            <label>Last Name &#42;</label><input type="text"  name="lName " placeholder=" " pattern="[A-Za-z- \.']+" required>
            <label>Email &#42;</label> <input type="email" name="email" placeholder=""  required>
            <label> Phone Number &#42;</label> <input type="text" name="phoneNumber" placeholder="" pattern="" required><br>
          </div>
   
          <div class="formDiv2">
            <label>Message &#42;</label><br>
            <textarea rows="10" cols="38" name="enquiryarea" placeholder="what can we do for you?"></textarea><br>
            <input type="submit" value="Submit" />
            <button type="reset" value="Reset">Clear form</button>
         </div>
        </div>
       </form>
      </div>
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
</html>