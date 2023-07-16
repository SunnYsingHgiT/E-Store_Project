<?php

require("includes/common.php");
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
$user_id = $_SESSION['user_id'];
$item_ids_string = $_GET['itemsid'];

$query = "UPDATE users_items SET status='Confirmed' WHERE user_id=" . $user_id . " AND item_id IN (" . $item_ids_string . ") and status='Added to cart'";
mysqli_query($con, $query) or die($mysqli_error($con));

// Notification code
echo "<script>";
echo "function showNotification() {";
echo "  var notification = confirm('Your order has been confirmed. Click OK to proceed to payment.');";
echo "  if (notification == true) {";
echo "    window.location.href = 'https://rzp.io/l/p3MQMRi';"; // Replace this URL with your payment URL
echo "  }";
echo "}";
echo "showNotification();";
echo "</script>";
?>

<!DOCTYPE html>

<head>
    <title>Success | Life Style Store</title>
    <link rel="shortcut icon" href="img\srtcticon.png" type="image/png">

      <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap Core CSS -->
      <link href="css/bootstrap.css" rel="stylesheet">
    <!-- Custom CSS -->
      <link href="css/style.css" rel="stylesheet">
    <!-- jQuery -->
      <script src="js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
      <script src="js/bootstrap.min.js"></script>
</head>

    <body>
        <?php include 'includes/header.php'; ?>
        <div class="container-fluid" id="content">
            <div class="col-md-12">
                <div class="jumbotron">

                      <h3 align="center">Pay to confirm your order. Thank you for shopping with us.</h3><hr>
                    <p align="center">Click <a href="https://rzp.io/l/p3MQMRi">here</a> to pay.</p>
                </div>
            </div>
        </div>
        <?php include("includes/footer.php");
        ?>
    </body>
</html>
