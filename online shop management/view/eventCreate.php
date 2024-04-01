<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Dashboard - K-R Event</title>
</head>
<body>
<div style="background-color: red; padding: 10px; display: flex; justify-content: space-between; align-items: center;">
  <div style="font-weight: bold; font-size: 24px; font-family: 'Arial', sans-serif;">K-R EVENT Management Company</div>




    <a href="profile.php" style="text-decoration: none;">
      <button style="background-color: white; border: none; cursor: pointer;">Dashboard</button>
    </a>
    <a href="home.php" style="text-decoration: none;">
    <button style="background-color: white;">Log Out</button>
    </a>
  </div>




<!--Event Creation-->
<!--Event Creation-->
<div style="margin-top: 50px; text-align: center;">
    <h2 style="color: blue;">Event Creation</h2>
    <div style="width: 60%; margin: 0 auto;">
        <form action="payment.php" method="post">
            <label for="event_name">Event Name:</label><br>
            <input type="text" id="event_name" name="event_name" value="Iftar party" required><br><br>

            <label for="place">Place:</label><br>
            <input type="text" id="place" name="place" value="AIUB" required><br><br>

            <label for="date_time">Date and Time:</label><br>
            <input type="datetime-local" id="date_time" name="date_time"  required><br><br>

            <label for="requirements">Requirements:</label><br>
            <textarea id="requirements" name="requirements" rows="4" cols="50" placeholder="Aiub Student or Allumni"required></textarea><br><br>

            <label for="requirements">Details:</label><br>
            <textarea id="details" name="details" rows="4" cols="50" placeholder="D building, ground floor"required></textarea><br><br>

<!--         
            <label for="payment_type">Payment Type:</label><br>
            <input type="radio" id="paid" name="payment_type" value="paid" required>
            <label for="paid">Paid</label><br>
            <input type="radio" id="non_paid" name="payment_type" value="non_paid" required>
            <label for="non_paid">Non-Paid</label><br><br> -->

            <label for="amount">Amount:</label><br>
            <input type="text" id="amount" name="amount" value= "350" required><br><br>



            <!-- <div id="ticket_amount_div" style="display: none;">
                <label for="ticket_amount">Ticket Amount:</label><br>
                <input type="number" id="ticket_amount" name="ticket_amount" min="0" step="0.01" required><br><br>
            </div> -->
            <a href="payment.php" style="text-decoration: none;">
                <input type="submit" value="Create Event">
            
            <input type="reset" value="Reset"><br>
        </form>
        <!-- <form action="send_to_publication.php" method="post">
            <input type="hidden" name="event_name" value="<?php echo $_POST['event_name']; ?>">
            <input type="hidden" name="place" value="<?php echo $_POST['place']; ?>">
            <input type="hidden" name="date_time" value="<?php echo $_POST['date_time']; ?>">
            <input type="hidden" name="requirements" value="<?php echo $_POST['requirements']; ?>">
            <input type="hidden" name="payment_type" value="<?php echo $_POST['payment_type']; ?>">
            <input type="hidden" name="ticket_amount" value="<?php echo $_POST['ticket_amount']; ?>">
            <button type="submit">Send to Publication Team</button>
        </form> -->
    </div>
</div>
<!--End-->


<!--End-->

&nbsp;&nbsp;&nbsp;&nbsp;


<div style="width: 99%; text-align: center; bottom:0;">
    <div style="background-color: black; color: white; text-align: center; padding: 10px;">
    ©️ K-REMC@2024

        <div style="display: flex; justify-content: space-between; padding: 20px;">
            <div style="width: 23%;">
                <h3 style="color: white; border-bottom: 1px solid red;">Coverage District</h3>
                <ul style="list-style-type: none; color: gray; padding: 0;text-align: left;">
                    <li>Dhaka</li>
                    <li>Chittagong</li>
                    <li>Rajshahi</li>
                    <li>Sylhet</li>
                    <li>Khulna</li>
                    <li>Barisal</li>
                    <li>Rangpur</li>
                </ul>
                <hr style="border-color: red;">
            </div>

            <div style="width: 23%;">
                <h3 style="color: white; border-bottom: 1px solid red;">Career</h3>
                <ul style="list-style-type: none; color: gray; padding: 0;text-align: left;">
                    <li>Event Manager</li>
                    <li>Marketing Executive</li>
                    <li>Event Coordinator</li>
                    <li>Graphic Designer</li>
                    <li>Logistics Manager</li>
                    <li>PR Manager</li>
                    <li>Finance Manager</li>
                </ul>
                <hr style="border-color: red;">
            </div>

            <div style="width: 23%;">
                <h3 style="color: white; border-bottom: 1px solid red;">Event & Exhibition Logistic</h3>
                <ul style="list-style-type: none; color: gray; padding: 0;text-align: left;  ">
                    <li>Aluminium German Hanger</li>
                    <li>Event Tent/Canopy Rental</li>
                    <li>Octanorm Stall Rent</li>
                    <li>Event / Exhibition Furniture</li>
                    <li>LED Wall on Rent</li>
                    <li>Digital Signage KIOSK Display</li>
                    <li>LED Plasma TV</li>
                    <li>All Rental Items</li>
                </ul>
                <hr style="border-color: red;">
            </div>

            <div style="width: 23%;">
            <h3 style="color: white; border-bottom: 1px solid red;">CONTACT INFO</h3>
            <p style="color: white;">Dhaka Office: Kuril, Dhaka-1229, Bangladesh</p>
            <p style="color: white;">Mobile: +880 18**********</p>
            <p style="color: white;">Mobile: +880 16**********</p>
            <hr style="border-color: red;">
        </div>
    </div>
</div>
</body>
</html>