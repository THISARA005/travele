<?php
include 'db_connection.php'; // Include the database connection file

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   // Get the form data
    $startDate = $_POST['startDate'];    
    $endDate = $_POST['endDate'];   
 
   

   // Insert the form data into the database
   //$sql = "SELECT * FROM pack_booking WHERE date BETWEEN 'start_date' AND 'end_date'";
   


    $query ="SELECT * FROM pack_booking WHERE billing_date BETWEEN '$startDate' AND '$endDate'";

// $query=" SELECT * FROM PACKAGES WHERE pack_ID=$pack_id";
    $result = mysqli_query($conn, $query);

    $totalRevenue=0;

if ($result && mysqli_num_rows($result) > 0) {
    $numRows = mysqli_num_rows($result);
    echo "Number of results: " . $numRows;
    echo "<div class='table-responsive'>
    <table class='table table-bordered'>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Amount</th>
            </tr>
        </thead>
       ";
    while ($row = mysqli_fetch_assoc($result)) {
       
        $paid_amount=$row['to_pay_amount'];
        $totalRevenue=$totalRevenue+$paid_amount;
        $pack_id=$row['pack_ID'];
        $user_id=$row['user_ID'];

        $query1=" SELECT * FROM PACKAGES WHERE pack_ID=$pack_id";
        $result1 = mysqli_query($conn, $query1);
        $row1 = mysqli_fetch_assoc($result1);
        $pack_name=$row1['title'];
      
       echo " <tbody>
        <tr>
            <td>$user_id</td>
            <td>$pack_name </td>
            <td>$paid_amount</td>
        </tr>
        <tbody>
        ";
        
    }


// Remember to close the database connection




   echo "
 <div class='col-lg-5 col-md-12 col-xs-12'>
   <div class='dashboard-box report-list'>
       <h4>Reports</h4>
       <div class='report-list-content'>
           <div class='date'>
              <h5>$startDate ' - ' $endDate</h5>
           </div>
           <div class='total-amt'>
               <strong>$$totalRevenue</strong>
           </div>
       </div>
       <!-- Button to print the window -->
<button onclick='window.print()' style='background-color: #4CAF50; color: white; padding: 10px 20px; border: none; cursor: pointer; border-radius: 4px;'>
    Print
</button>
";

      
} else {
    echo "No packages found.";
}
}
mysqli_close($conn);
?>

