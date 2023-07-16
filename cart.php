<?php require_once("includes/common.php"); ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Cart | Life Style Store</title>
    <link rel="shortcut icon" href="img\srtcticon.png" type="image/png">

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="./css/style.css">

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap JS -->
    <script src="js/bootstrap.min.js"></script>
  </head>

  <body>
    <!-- Header -->
    <?php include_once('includes/header.php'); ?>
    <!-- Header end-->

    <div class="container mt-5">
      <div class="row">
        <div class="col-sm-6 offset-sm-3">
          <table class="table table-striped">
            
            <?php
            $sum = 0;
            $user_id = $_SESSION['user_id'];
            $query = "SELECT items.price AS Price, items.id, items.name AS Name FROM users_items JOIN items ON users_items.item_id = items.id WHERE users_items.user_id='$user_id' and status='Added to cart'";
            $result = mysqli_query($con, $query) or die(mysqli_error($con));

            if (mysqli_num_rows($result) >= 1) {
            ?>
              <thead>
                <tr>
                  <th>Item Number</th>
                  <th>Item Name</th>
                  <th>Price</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <?php
                while ($row = mysqli_fetch_array($result)) {
                  $sum += $row["Price"];
                  $id = "";
                  $id .= $row["id"] . ",";
                ?>
                  <tr>
                    <td><?php echo "#" . $row["id"]; ?></td>
                    <td><?php echo $row["Name"]; ?></td>
                    <td>Rs <?php echo $row["Price"]; ?></td>
                    <td><a href="cart-remove.php?id=<?php echo $row['id']; ?>" class="remove_item_link"> Remove </a></td>
                  </tr>
                <?php
                }
                $id = rtrim($id, ",");
                ?>
                <tr>
                  <td></td>
                  <td>Total</td>
                  <td>Rs <?php echo $sum; ?></td>
                  <td><a href="success.php?itemsid=<?php echo $id; ?>" class="btn btn-primary">Confirm Order</a></td>
                </tr>
              </tbody>
            <?php
            } else {
            ?>
              <tbody>
                <tr>
                  <td colspan="4" class="text-center">Add items to the cart first!</td>
                </tr>
              </tbody>
            <?php
            }
            ?>
          </table>
        </div>
      </div>
    </div>

    <!-- Footer -->
    <?php include_once('includes/footer.php'); ?>
    <!-- Footer end-->
  </body>
</html>
