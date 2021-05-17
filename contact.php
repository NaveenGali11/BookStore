<?php
    include 'includes/common.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Contact US | BookStore.com</title>
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
        <?php
        include 'includes/header.php';
        ?>
        <div class="container">
            <div class="row" style="margin-right:-15px; padding-top: 50px">
                <div class="col-sm-10">
                    <h1 class="title">LIVE SUPPORT</h1>
                    <h4>24 hours | 7 days a week | 365 days a year Live Technical Support</h4><br>
                    <div>
                        <img align="right" src="images/contact.png" alt="contact image">
                    </div>
                    <div class="text-align:left">
                        <p>It is a long established fact that a reader will be distracted<br>
                            by the readable content of a page when looking at its layout.<br>
                            the point of using Lorem Ipsum is that it has a more-or-less normal<br>
                            distribution of letters. There are many variations of passages of<br>
                            Lorel Ipsum available, but the majority have suffered alteration in<br>
                            some form, by injected humour, or randomised words which don't look<br>
                            even slightly believable. If you are going to use a passage of Lorem Ipsum,<br>
                            you need to be sure there isn't anything embarrassing hidden in the middle<br>
                            of text.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-9">
                    <div class="contact-form">
                        <h2>Get In Touch</h2>
                        <div class="status alert alert-success" style="display:none">
                        </div>
                        <form text-align="left">
                            <div class="form-group col-sm-9">
                                <input type="text" name="name" class="form-control" required="true" placeholder="Name">
                            </div>
                            <div class="form-group col-sm-9">
                                <input type="email" name="email" class="form-control" required="true" placeholder="Email">
                            </div>
                            <div class="form-group col-sm-9">
                                <textarea name="message" id="message" required="required" class="form-control" rows="7" placeholder="Your message here"></textarea>
                            </div>
                            <div class="form-group col-sm-7">
                                <input type="submit" name="submit" class="btn btn-primary" value="submit">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="text-align:right">
                    <h3>Company Information</h3>
                    <p>500 Lorem Ipsum Dolor Sit</p>
                    <p>22-56-2-9 Sit Amedi Bombay</p>
                    <p>INDIA</p>
                    <p>Phone:(00)222 666 444</p>
                    <p>Fax:(000)000 00 00 0</p>
                    <p>Email: info@mycompany.com</p>
                    <p>Follow on: Facebook, Twitter</p>
                </div>
            </div>
        </div>
        <?php
        include 'includes/footer.php';
        ?>
    </body>
</html>