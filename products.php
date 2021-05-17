<?php
    require "includes/common.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <title>BookStore.com</title>
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
        include 'includes/check_if_added.php';
        include 'includes/modal.php';
        ?>
        <br>
        <br>
        <div class="jumbotron">
            <div>
                <center><h1>Welcome to our BookStore</h1></center>
                <center><p>We have a great collection of books.Where you can pick one and have it at a reasonable cost.</p></center>
            </div>
        </div>
        
        <div class="row">
            <div class="col-sm-3 col-md-6">
                <div class="thumbnail">
                    <img src="images/1.jpg" alt="Python book" style="height: 278px">
                    <div class="caption">
                        <center>
                        <h3>Introduction to python (2018)</h3>
                        <h4> Author:Mark Lassoff</h4>
                        <p>Price:Rs.449</p>
                        </center>
                        
                        <?php if(!isset($_SESSION['email'])){ ?>
                        <a href="#" data-toggle="modal" data-target="#loginmodal" type="button" class="btn btn-block btn-primary">Add to cart</a>     
                        <?php }else{ ?>
                            <?php if(check_if_added_to_cart(1)){?>
                        <a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>
                            <?php }else{ ?>
                        <a href="cart_add.php?id=1" name="add" value="add" class="btn btn-block btn-danger">Add to cart</a>
                            <?php }
                        
                        } ?>
                    </div>    
                </div>
            </div>
            
            <div class="col-sm-3 col-md-6">
                <div class="thumbnail">
                    <img src="images/2.jpg" alt="Book by Jon Duckett" style="height: 278px">
                    <div class="caption">
                        <center>
                        <h3>Html And Css </h3>
                        <h4> Author:Jon Duckett</h4>
                        <p>Price:Rs.449</p>
                        </center>
                        
                        <?php if(!isset($_SESSION['email'])){ ?>
                        <a href="#" data-toggle="modal" data-target="#loginmodal" type="button" class="btn btn-block btn-primary">Add to cart</a>     
                        <?php }else{ ?>
                            <?php if(check_if_added_to_cart(2)){?>
                        <a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>
                            <?php }else{ ?>
                        <a href="cart_add.php?id=2" name="add" value="add" class="btn btn-block btn-danger">Add to cart</a>
                            <?php }
                        
                        } ?>
                    </div>    
                </div>
            </div>
        </div>    
        
        <div class="row">    
            <div class="col-sm-3 col-md-6">
                <div class="thumbnail">
                    <img src="images/3.jpg" alt="Book by Chris Bates" style="height: 278px">
                    <div class="caption">
                        <center>
                        <h3>Web Programming</h3>
                        <h4> Author:Chris Bates</h4>
                        <p>Price:Rs.500</p>
                        </center>
                        
                        <?php if(!isset($_SESSION['email'])){ ?>
                        <a href="#" data-toggle="modal" data-target="#loginmodal" type="button" class="btn btn-block btn-primary">Add to cart</a>     
                        <?php }else{ ?>
                            <?php if(check_if_added_to_cart(3)){?>
                        <a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>
                            <?php }else{ ?>
                        <a href="cart_add.php?id=3" name="add" value="add" class="btn btn-block btn-danger">Add to cart</a>
                            <?php }
                        
                        } ?>
                    </div>    
                </div>
            </div>
            
            <div class="col-sm-3 col-md-6">
                <div class="thumbnail">
                    <img src="images/4.jpg" alt="O'Reilly" style="height: 278px">
                    <div class="caption">
                        <center>
                        <h3>Programming PHP</h3>
                        <h4> Publisher:O'Reilly</h4>
                        <p>Price:Rs.650</p>
                        </center>
                        
                        <?php if(!isset($_SESSION['email'])){ ?>
                        <a href="#" data-toggle="modal" data-target="#loginmodal" type="button" class="btn btn-block btn-primary">Add to cart</a>     
                        <?php }else{ ?>
                            <?php if(check_if_added_to_cart(4)){?>
                        <a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>
                            <?php }else{ ?>
                        <a href="cart_add.php?id=4" name="add" value="add" class="btn btn-block btn-danger">Add to cart</a>
                            <?php }
                        
                        } ?>
                    </div>    
                </div>
            </div>
        </div>
        
        <div class="row">    
            <div class="col-sm-3 col-md-6">
                <div class="thumbnail">
                    <img src="images/5.jpg" alt="R Programming">
                    <div class="caption">
                        <center>
                        <h3>R MarkDown</h3>
                        <h4>The Definitive Guide</h4>
                        <p>Price:Rs.796</p>
                        </center>
                        
                        <?php if(!isset($_SESSION['email'])){ ?>
                        <a href="#" data-toggle="modal" data-target="#loginmodal" type="button" class="btn btn-block btn-primary">Add to cart</a>     
                        <?php }else{ ?>
                            <?php if(check_if_added_to_cart(5)){?>
                        <a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>
                            <?php }else{ ?>
                        <a href="cart_add.php?id=5" name="add" value="add" class="btn btn-block btn-danger">Add to cart</a>
                            <?php }
                        
                        } ?>
                    </div>    
                </div>
            </div>
            
            <div class="col-sm-3 col-md-6">
                <div class="thumbnail">
                    
                    <img src="images/11.jpg" alt="Html And css" style="height: 278px">
                    <div class="caption">
                        <center>
                        <h3>Html And Css Easy Web Design</h3>
                        <h4> Author:Mahmood Shanbedi</h4>
                        <p>Price:Rs.12484</p>
                        
                        </center>
                        
                        <?php if(!isset($_SESSION['email'])){ ?>
                        <a href="#" data-toggle="modal" data-target="#loginmodal" type="button" class="btn btn-block btn-primary">Add to cart</a> 
                        <?php }else{ ?>
                            <?php if(check_if_added_to_cart(11)){?> 
                        <a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>
                            <?php }else{ ?>
                        <a href="cart_add.php?id=11" name="add" value="add" class="btn btn-block btn-danger">Add to cart</a>
                            <?php }
                        
                        } ?>
                    </div>    
                </div>
            
            </div>
        </div>
        
        <div class="row">    
            <div class="col-sm-3 col-md-6">
                <div class="thumbnail">
                    <img src="images/7.jpg" alt="3D Applications">
                    <div class="caption">
                        <center>
                        <h3>Programming 3D application's with HTML and WebGL </h3>
                        <h4>Publisher:O'Reilly</h4>
                        <p>Price:Rs.498</p>
                        </center>
                        
                        <?php if(!isset($_SESSION['email'])){ ?>
                        <a href="#" data-toggle="modal" data-target="#loginmodal" type="button" class="btn btn-block btn-primary">Add to cart</a>     
                        <?php }else{ ?>
                            <?php if(check_if_added_to_cart(7)){?>
                        <a href="#" class="btn btn-block btn-block btn-success" disabled>Added to cart</a>
                            <?php }else{ ?>
                        <a href="cart_add.php?id=7" name="add" value="add" class="btn btn-block btn-danger">Add to cart</a>
                            <?php }
                        
                        } ?>
                    </div>    
                </div>
            </div>
            
            <div class="col-sm-3 col-md-6">
                <div class="thumbnail">
                    <img src="images/8.jpg" alt="CSS" style="height: 257px">
                    <div class="caption">
                        <center>
                        <h3>Css in depth</h3>
                        <h4>Keith.J.Grant</h4>
                        <p>Price:Rs.800</p>
                        </center>
                        
                        <?php if(!isset($_SESSION['email'])){ ?>
                        <a href="#" data-toggle="modal" data-target="#loginmodal" type="button" class="btn btn-block btn-primary">Add to cart</a>     
                        <?php }else{ ?>
                            <?php if(check_if_added_to_cart(8)){?>
                        <a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>
                            <?php }else{ ?>
                        <a href="cart_add.php?id=8" name="add" value="add" class="btn btn-block btn-danger">Add to cart</a>
                            <?php }
                        
                        } ?>
                    </div>    
                </div>
            </div>
        </div>    
        <div class="row">    
            <div class="col-sm-3 col-md-6">
                <div class="thumbnail">
                    <img src="images/9.jpg" alt="Database">
                    <div class="caption">
                        <center>
                        <h3>Creating Database-backend library web pages</h3>
                        <h4> Author:Stephen.R.Westman</h4>
                        <p>Price:Rs.900</p>
                        </center>
                        
                        <?php if(!isset($_SESSION['email'])){ ?>
                        <a href="#" data-toggle="modal" data-target="#loginmodal" type="button" class="btn btn-block btn-primary">Add to cart</a>     
                        <?php }else{ ?>
                            <?php if(check_if_added_to_cart(9)){?>
                        <a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>
                            <?php }else{ ?>
                        <a href="cart_add.php?id=9" name="add" value="add" class="btn btn-block btn-danger">Add to cart</a>
                            <?php }
                        
                        } ?>
                    </div>    
                </div>
            </div>
            
            <div class="col-sm-3 col-md-6">
                <div class="thumbnail">
                    <img src="images/12.jpg" alt="Web design" style="height: 278px ">
                    <div class="caption">
                        <center>
                        <h3>Creating Web pages for dummies</h3>
                        <h4>Author:Bud.E.Smith</h4>
                        <p>Price:Rs.3800</p>
                        
                        </center>
                        
                        <?php if(!isset($_SESSION['email'])){ ?>
                        <a href="#" data-toggle="modal" data-target="#loginmodal" type="button" class="btn btn-block btn-primary">Add to cart</a>     
                        <?php }else{ ?>
                            <?php if(check_if_added_to_cart(12)){?>
                        <a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>
                            <?php }else{ ?>
                        <a href="cart_add.php?id=12" name="add" value="add" class="btn btn-block btn-danger">Add to cart</a>
                            <?php }
                        
                        } ?>
                    </div>    
                </div>
            </div>
        </div>    
        <div class="row">    
                <div class="col-sm-3 col-md-6">
                <div class="thumbnail">
                    <img src="images/6.jpg" alt="Html And css">
                <div class="caption">
                    <center>
                        <h3>The Joy of PHP</h3>
                    <h4> Author:Alan Forbes</h4>
                    <p>Price:Rs.12484</p>
                    </center>
                    <?php if(!isset($_SESSION['email'])){ ?>
                    <a href="#" data-toggle="modal" data-target="#loginmodal" type="button" class="btn btn-block btn-primary">Add to cart</a> 
                    <?php }else{ ?>
                        <?php if(check_if_added_to_cart(6)){?>
                    <a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>
                        <?php }else{ ?>
                    <a href="cart_add.php?id=6" name="add" value="add" class="btn btn-block btn-danger">Add to cart</a>
                        <?php }

                    } ?>
                </div>    
                </div>
                </div>

            <div class="col-sm-3 col-md-6">
                <div class="thumbnail">
                    

                    <img src="images/10.jpg" alt="Web design" style="height:259px">
                    <div class="caption">
                        <center>
                        <h3>Learning Web Design</h3>
                        <h4>Publisher:O'Reilly</h4>
                        <p>Price:Rs.1325</p>
                        </center>
                        
                        <?php if(!isset($_SESSION['email'])){ ?>
                        <a href="#" data-toggle="modal" data-target="#loginmodal" type="button" class="btn btn-block btn-primary">Add to cart</a>     
                        <?php }else{ ?>
                            <?php if(check_if_added_to_cart(10)){?>
                        <a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>
                            <?php }else{ ?>
                        <a href="cart_add.php?id=10" name="add" value="add" class="btn btn-block btn-danger">Add to cart</a>
                            <?php }
                        
                        } ?>
                    </div>    
                </div>
            </div>
            
        </div>
        
    </body>
    <?php
            include 'includes/footer.php';
        ?>
</html>