<?php
    require ("includes/common.php");
    if(!isset($_SESSION['email'])){
        header('location:index.php');
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Success | BookStore</title>
                <!-- link to Bootstrap minified css-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<!-- link to Jquery minified-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<!-- link to Bootstrap JS -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
                <!---Link to external css-->
                <link rel="stylesheet" type="text/css"href="finalproject.css">
    </head>
    <body>
        <?php include 'includes/header.php';
        
            $user_id = $_SESSION["user_id"];
            $query = "SELECT item_id FROM users_items WHERE user_id = '.$user_id.'";
            $result = mysqli_query($con, $query) or die(mysqli_error($con));
            
            while ($row = mysqli_fetch_array($result)) {
                $item_id = $row["item_id"];
                $query1 = "UPDATE users_items SET status = 'Confirmed' WHERE item_id = '$item_id'";
                
                $result1 = mysqli_query($con, $query1) or die(mysqli_error($con));
            }
        ?>
        <div class="container-fluid" id="content" style="padding-top: 150px;padding-bottom: 114px">
            <div class="col-md-12">
                <div class="jumbotron">
                    
                    <h2 align = "center">Your Order Is Confirmed.Thank You For shopping with us.</h2>
                    <p align="center">Click <a href="products.php">here</a> to purchase any other item.</p>
                </div>
            </div>
        </div>
        <?php include 'includes/footer.php'; ?>
    </body>
</html>