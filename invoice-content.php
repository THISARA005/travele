<?php

// Database connection configuration
$host = 'localhost';     // MySQL server hostname
$username = 'root';  // MySQL username
$password = '';  // MySQL password
$database = 'goglobetravel';  // MySQL database name

// Create a new MySQLi object
$mysqli = new mysqli($host, $username, $password, $database);

// Check the connection
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
    // You can handle the connection error gracefully based on your requirements
    exit();
}
// Include the database connection file
$packId = $_GET['pack_id'];
$userId = $_GET['user_id'];


$insertInvoiceQuery = " SELECT DISTINCT * FROM invoice WHERE pack_ID=$packId AND user_ID=$userId";
$result = mysqli_query($mysqli, $insertInvoiceQuery);

 if ($result && mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);

    $name = $row['Fname'];
    $email = $row['Email'];
    $phone = $row['phone'];
    $card_number = $row['car_Number'];
    $check_in_date = $row['check_in_date'];
    $pack_id = $row['pack_ID'];
    $user_id = $row['user_ID'];
    $policy = $row['policy'];
    $payment_status = $row['payment_status'];
    


    echo " <div class='confirmation-outer'>
    <div class='success-notify'>
       <div class='success-icon'>
          <i class='fas fa-check'></i>
       </div>
       <div class='success-content'>
          <h3>PAYMENT CONFIRMED</h3>
          <p>Thank you, your payment has been successful and your booking is now confirmed.A confirmation email has been sent to info@travele.com.</p>
       </div>
    </div>
    <div class='confirmation-inner'>
       <div class='row'>
          <div class='col-lg-8 right-sidebar'>
             <div class='confirmation-details'>
                <h3>BOOKING DETAILS</h3>
                <table class='table'>
                   <tbody>
                      <tr>
                         <td>Booking id:</td>
                         <td>999-QSDE-55</td>
                      </tr>
                      <tr>
                         <td>Name:</td>
                         <td>$name</td>
                      </tr>
                     
                      <tr>
                         <td>Email:</td>
                         <td>$email</td>
                      </tr>
                      <tr>
                         <td>Phone</td>
                         <td>$phone</td>
                      </tr>
                      <tr>
                         <td>Card number</td>
                         <td>$card_number</td>
                      </tr>
                      <tr>
                         <td>payment_status:</td>
                         <td>$payment_status</td>
                      </tr>
                      <tr>
                         <td>user_id:</td>
                         <td>$user_id</td>
                      </tr>
                      <tr>
                         <td>pack_id:</td>
                         <td>$pack_id</td>
                      </tr>
                      
                     
                   </tbody>
                </table>
                <div class='details payment-details'>
                   <h3>PAYMENT</h3>
                   <div class='details-desc'>
                      <p>Payment is successful via Master card</p>
                   </div>
                </div>
                <div class='details'>
                   <h3>VIEW MORE ABOUT YOUR BOOKING DETAILS</h3>
                   <div class='details-desc'>
                      <p><a href='#'>https://www.travele.com/sadsd-f646556</a></p>
                   </div>
                </div>
             </div>
          </div>
          <!--
          <div class='col-lg-4'>
             <aside class='sidebar'>
                <div class='widget-bg widget-table-summary'>
                   <h4 class='bg-title'>Summary</h4>
                   <table>
                      <tbody>
                         <tr>
                            <td>
                               <strong>Packages cost </strong>
                            </td>
                            <td class='text-right'>
                               $300
                            </td>
                         </tr>
                         <tr>
                            <td>
                               <strong>Dedicated tour guide</strong>
                            </td>
                            <td class='text-right'>
                               $34
                            </td>
                         </tr>
                         <tr>
                            <td>
                               <strong>Insurance</strong>
                            </td>
                            <td class='text-right'>
                               $34
                            </td>
                         </tr>
                         <tr>
                            <td>
                               <strong>tax</strong>
                            </td>
                            <td class='text-right'>
                               13%
                            </td>
                         </tr>
                         <tr class='total'>
                            <td>
                               <strong>Total cost</strong>
                            </td>
                            <td class='text-right'>
                               <strong>$368</strong>
                            </td>
                         </tr>
                      </tbody>
                   </table>
                </div>-->
                <?php include 'cart-summery-section.php'; ?>
                <div class='widget-bg widget-support-wrap'>
                   <div class='icon'>
                      <i class='fas fa-phone-volume'></i>
                   </div>
                   <div class='support-content'>
                      <h5>HELP AND SUPPORT</h5>
                      <a href='telto:12345678' class='phone'>+11 234 889 00</a>
                      <small>Monday to Friday 9.00am - 7.30pm</small>
                   </div>
                </div>
                <div class='header-btn'>
                     <a href='#' class='button-primary' onclick='window.print()'>Print Invoice</a>
                     <!--<button onclick='window.print()' class='button-primary'>Print</button>-->

                  </div>
             </aside>
          </div>
       </div>
    </div>
 </div>";

 } else {
     echo "Error: " . mysqli_error($mysqli);
 }

