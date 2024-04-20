<?php include_once("backend/admin/includes/config.php");
ini_set('display_errors', 1);
error_reporting(E_ALL);

if (isset($_POST['submit'])) {

     $fname = $_POST['name'];
     $emailid = $_POST['email'];
     $phonenumber = $_POST['phonenumber'];
     // $bookingdate_input = $_POST['bookingdate'];
     $bookingdate = $_POST['bookingdate'];

     $bookingtime = $_POST['bookingtime'] . ' ' . $_POST['am'];
     $noadults = $_POST['noadults'];
     $nochildrens = $_POST['nochildrens'];
     $bno = mt_rand(100000000, 9999999999);

     // list($month, $day, $year) = explode('/', $bookingdate_input);
     // $bookingdate = sprintf('%04d-%02d-%02d', $year, $month, $day);


     //Code for Insertion
     $sql = "insert into tblbookings(bookingNo,fullName,emailId,phoneNumber,bookingDate,bookingTime,noAdults,noChildrens) values('$bno','$fname','$emailid','$phonenumber','$bookingdate','$bookingtime','$noadults','$nochildrens')";

     $query = mysqli_query($con, $sql);



     if ($query) {
          echo '<script>alert("Your order sent successfully. Booking number is "+"' . $bno . '")</script>';
          echo "<script type='text/javascript'> document.location = 'index.php'; </script>";
     } else {
          echo "<script>alert('Something went wrong. Please try again.');</script>";
     }
}

?>



<!DOCTYPE html>
<html lang="en">

<head>

     <?php include "frontend/layouts/header.php" ?>


</head>

<body>

     <!-- PRE LOADER -->
     <section class="preloader">
          <div class="spinner">

               <span class="spinner-rotate"></span>

          </div>
     </section>


     <!-- MENU -->
     <?php include "frontend/layouts/navbar.php"; ?>

     <!-- Modal -->
     <div id="myModal" class="modal">

          <!-- Modal content -->
          <div class="modal-content">
               <span id="closeModalButton" class="close">&times;</span>

               <!-- Table reservation form -->
               <form id="reservationForm" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                    <h2 class="rheading">Table Reservation</h2>
                    <div class="col-md-6 col-sm-6">
                         <input type="text" class="form-control" id="cf-name" name="name" placeholder="Full name">
                    </div>

                    <div class="col-md-6 col-sm-6">
                         <input type="email" class="form-control" id="cf-name" name="email" placeholder="Email">
                    </div>
                    <div class="col-md-6 col-sm-6">
                         <input type="text" class="form-control" id="cf-name" name="phonenumber" placeholder="Phone number">
                    </div>
                    <div class="col-md-3 col-sm-6">
                         <select class="form-control" name="noadults" required>
                              <option value="">Number of Adults</option>
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                              <option value="5">5</option>
                              <option value="6">6</option>
                              <option value="7">7</option>
                              <option value="8">8</option>
                         </select>
                    </div>
                    <div class="col-md-3 col-sm-6">
                         <select class="form-control" name="nochildrens" required>
                              <option value="">Number of Children</option>
                              <option value="0">0</option>
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                              <option value="5">5</option>
                              <option value="6">6</option>
                              <option value="7">7</option>
                              <option value="8">8</option>
                         </select>
                    </div>
                    <div class="col-md-6 col-sm-6">
                         <input type="date" class="form-control" id="cf-name" name="bookingdate" placeholder="Full name">
                    </div>
                    <div class="col-md-3 col-sm-6">
                         <select class="form-control" name="bookingtime" required>
                              <option value="">Time</option>
                              <option value="1 : 00">1 : 00</option>
                              <option value="2 : 00">2 : 00</option>
                              <option value="3 : 00">3 : 00</option>
                              <option value="4 : 00">4 : 00</option>
                              <option value="5 : 00">5 : 00</option>
                              <option value="6 : 00">6 : 00</option>
                              <option value="7 : 00">7 : 00</option>
                              <option value="8 : 00">8 : 00</option>
                              <option value="8 : 00">9 : 00</option>
                              <option value="8 : 00">10 : 00</option>
                              <option value="8 : 00">11 : 00</option>
                              <option value="8 : 00">12 : 00</option>
                         </select>
                    </div>
                    <div class="col-md-3 col-sm-6">
                         <select class="form-control" name="am" required>
                              <option value="">AM / PM</option>
                              <option value="AM">AM</option>
                              <option value="PM">PM</option>

                         </select>
                    </div>


                    <div class="col-md-3 col-sm-6">


                         <input type="submit" value="Submit" name="submit">
                    </div>
                    <div class="status">
                         <p>Check Booking <a href="check-status.php" target="_blank">Status</a></p>
                    </div>
               </form>
          </div>

     </div>


     <!-- HOME -->
     <?php include "frontend/layouts/slider.php"; ?>


     <!-- ABOUT -->
     <?php include "frontend/layouts/about.php"; ?>


     <!-- TEAM -->
     <?php include "frontend/layouts/team.php"; ?>


     <!-- MENU-->
     <?php include "frontend/layouts/menu.php"; ?>


     <!-- TESTIMONIAL -->
     <?php include "frontend/layouts/testimonial.php"; ?>




     <!-- CONTACT -->
     <?php include "frontend/layouts/contact.php"; ?>


     <!-- FOOTER -->

     <?php include "frontend/layouts/footer.php"; ?>




</body>

</html>