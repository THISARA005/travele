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

$query ="SELECT p.* FROM packages p WHERE p.pack_ID IN (SELECT c.package_ID FROM cart c WHERE c.user_ID = $user_id)";

$query2 = "SELECT DISTINCT p.* FROM pack_booking p WHERE p.pack_ID = $pack_id AND p.user_ID = $user_id";
$result = mysqli_query($mysqli, $query2);

$tourGuidePrice=0;
$insurancePrice=0;
$dinnerPrice=0;
$bikeRentPrice=0;
$totalPrice=0;
$totalPricetoPay=0;

if ($result && mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        //  $name = $row['booking_person'];
        //  $email = $row['billing_email'];
        //  $phone = $row['phone'];
        //  $date = $row['check_in_date'];
         $tourGuide = $row['tourGuide'];
         $insurance = $row['insurance'];
         $dinner = $row['dinner'];
         $bikeRent = $row['bikeRent'];
         $price = $row['to_pay_amount'];
    }
}

// $query=" SELECT * FROM PACKAGES WHERE pack_ID=$pack_id";
$result = mysqli_query($mysqli, $query);
$totalNetPrice = 0;
$totalPrice=0;
if ($result && mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $people = $row['grp_size'];
        $price = $row['reg_price'];
        
        // Calculate the total net price
        $totalNetPrice += ($price * $people);

        


    }

    $tourGuidePrice=$tourGuide*$people;
    $insurancePrice=$insurance*$people;
    $dinnerPrice=$dinner*$people;
    $bikeRentPrice=$bikeRent*$people;
    $totalPricetoPay=$totalNetPrice+$tourGuidePrice+$insurancePrice+$dinnerPrice+$bikeRentPrice;
}

$query3 = "SELECT * FROM packages where pack_ID = $packId";
$result2 = mysqli_query($mysqli, $query3);
if ($result && mysqli_num_rows($result2) > 0) {
    while ($row = mysqli_fetch_assoc($result2)) {
$description = $row['pack_description'];
$price = $row['reg_price'];
    }
}


$billing_date = date("Y-m-d");


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   // Get the form data

   $card_name = $_POST['card_name'];
   $card_number = $_POST['card_number'];

   $sql = " INSERT INTO invoice (pack_ID, user_ID, check_in_date, Fname, Email, phone, car_Number, policy, payment_status)
   VALUES (1, 1, '2023-07-20', 'John Doe', 'johndoe@example.com', '1234567890', 'ABC123', 1, 0);
    ";


   
    
    if (mysqli_query($mysqli, $sql)) {
        
        echo "<script>
        window.location.href = 'insert_cart.php?user_id=' + $userId + '&pack_id=' + $packId
        </script>";

    } else {
        echo "Error: " . mysqli_error($mysqli);
    }



}
?>
