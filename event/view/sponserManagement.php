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



<!--SponserShip Management-->
<!--Sponsorship Management-->
<div style="margin-top: 50px; text-align: center;">
    <h2 style="color: blue;">Sponsorship Management</h2>
    <div style="width: 60%; margin: 0 auto;">
        <form action="#" method="post">
            <label for="company_name">Company Name (Sponsor):</label><br>
            <input type="text" id="company_name" name="company_name" value="MangoBani dotNet" required><br><br>

            <label for="address">Address:</label><br>
            <input type="text" id="address" name="address" value="kuril, kuratoli"required><br><br>

            <label for="sponsor_type">Type of Sponsorship:</label><br>
            <input type="radio" id="cash" name="sponsor_type" value="cash" required>
            <label for="cash">Cash</label><br>
            <input type="radio" id="place" name="sponsor_type" value="place" required>
            <label for="place">Place</label><br>
            <input type="radio" id="other" name="sponsor_type" value="other" required>
            <label for="other">Other</label><br><br>

            <label for="details">Details:</label><br>
            <textarea id="details" name="details" rows="4" cols="50" placeholder="sponsorship details"></textarea><br><br>

            <label for="reference">Reference:</label><br>
            <input type="text" id="reference" name="reference"value="MangoBani" required><br><br>

            <label for="contact_number">Contact Number:</label><br>
            <input type="text" id="contact_number" name="contact_number" value="0123123"required><br><br>

            <label for="sponsor_for">Sponsor for:</label><br>
            <input type="text" id="sponsor_for" name="sponsor_for" value="Iftar party"required><br><br>

            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email"value="mangobani@gmail.com" required><br><br>

            <label for="cause">Sponser For:</label><br>
            <input type="checkbox" id="marketing_promotion" name="marketing_promotion">
            <label for="marketing_promotion">Marketing & Promotion</label><br>
            <input type="checkbox" id="new_brand_open" name="new_brand_open">
            <label for="new_brand_open">New Brand Open</label><br>
            <input type="checkbox" id="other_checkbox" name="other_checkbox">
            <label for="other_checkbox">Other</label><br><br>

            <input type="checkbox" id="terms_condition" name="terms_condition">
            <label for="terms_condition">Accept all terms and conditions</label><br><br>

            <input type="submit" value="Submit">
            <input type="reset" value="Reset"><br>
           
                <a href="dashboardCustomer.php">Back to Home Page</a>
        </form>
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