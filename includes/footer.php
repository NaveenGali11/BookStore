<?php
    include 'includes/modal.php';
?>
<footer>
    <div class="container">
        <div class="row">
            <div class="columnf">
                <h3>Information</h3>
                <p><a href="about.php"><span style="color: white">About US</span></a></p>
                <p><a href="contact.php"><span style="color: white">Contact</span></a></p>
            </div>
            
            <div class="columnf">
                <h3>My Account</h3>
                <p><a href="#" data-toggle="modal" data-target="#loginmodal"><span style="color: white">Log In</span></a></p>
                <p><a href="signup.php"><span style="color: white">Sign Up</span></a></p>
            </div>
            
            <div class="columnf">
                <h3>Contact Us</h3>
                <p>Contact No. +91 123 456 7890</p>
                <p>BookStore.com <?php echo Date('Y');?>All Rights Reserved.</p>
                <p>Proudly! Made in India</p>
            </div>
        </div>
        
    </div>
</footer>