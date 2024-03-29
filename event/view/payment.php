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
</div>

<div style="margin-top: 50px; text-align: center;">
    <form method="post">
        <table style="width: 50%; margin: 0 auto;">
            <tr>
                <td colspan="2" style="text-align: center;">
                    <img src="../assets/img/bkash.jpg" alt="Bkash Logo" style="width: 80px; height: auto;">
                </td>
            </tr>
            <tr>
                <td colspan="2" style="font-size: 20px; color: deeppink; text-align: center;">
                    Bkash Payment
                </td>
            </tr>
            <tr>
                <td colspan="2" style="font-size: 16px; color: red; font-weight: bold; text-align: center;">
                    K-R Event Management
                </td>
            </tr>
            <tr>
                <td style="text-align: right; width:0%;">Amount:</td>
                <td style="width: 50%; text-align: left;"><input type="text" name="amount" value="500" required></td>
            </tr>
            <tr>
                <td style="text-align: right;width:50%;">Reference:</td>
                <td style="width: 50%; text-align: left;"><input type="text" name="reference" value="Iftar party" required></td>
            </tr>
            <tr>
                <td style="text-align: right;width:50%;">Bkash Number:</td>
                <td style="width: 50%; text-align: left;"><input type="text" name="bkash_number"  value="017115"required> </td>
            </tr>
            <tr>
                <td style="text-align: right; width:50%;">Contact Number:</td>
                <td style="width: 50%; text-align: left;"><input type="text" name="contact_number"  value="017323"required></td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center;">
                    <input type="checkbox" name="terms_condition">
                    Accept all terms and conditions
                </td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center;">
                    <button type="submit">Confirm Payment</button>
                </td>
            </tr>
        </table>
    </form>
   
                  
        

</div>


<!-- <?php 
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//                         // Process the form data
//                         $amount = $_POST["amount"];
//                         $reference = $_POST["reference"];
//                         $bkashNumber = $_POST["bkash_number"];
//                         $contactNumber = $_POST["contact_number"];

//                         // Display a thank you message with the submitted information
//                         echo "<div style='text-align: center; margin-top: 20px;'>";
//                         echo "<p>Thank you for your payment!</p>";
//                         echo "<p>Amount: $amount</p>";
//                         echo "<p>Reference: $reference</p>";
//                         echo "<p>bKash Number: $bkashNumber</p>";
//                         echo "<p>Contact Number: $contactNumber</p>";
//                         echo "</div>";}
                        
                        ?> -->

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