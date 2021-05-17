<?php
    require ("includes/common.php");   
if(isset($_SESSION['email'])){
    header('location:products.php');
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Home | BookStore.com</title>
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
        <div class="container-fluid">
        <?php
        include 'includes/header.php';
        ?>
            <div class="content">
                <div id="banner-image">
                    <div class="inner-banner-image">
                        
                            <div id="banner_content">
                                <h1>Biggest Online Book Store</h1>
                                <h4><p>Flat 40% OFF On all products.</p></h4>
                                <a href="products.php" class="btn btn-danger btn-lg active">Shop Now</a>
                            </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <?php
        include 'includes/footer.php';
        ?>
    </body>
</html>