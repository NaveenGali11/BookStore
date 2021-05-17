<link href="../finalproject.css" rel="stylesheet" type="text/css">
<div class="modal fade" id="loginmodal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss = "modal">&times;</button>
                <h4><span class="glyphicon glyphicon-lock"></span> Login</h4>
            </div>
            <div class="modal-body">
                <form role="form" action="login_submit.php" method="post">
                    <div class="form-group">
                        <label><span class="glyphicon glyphicon-envelope"></span> Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Enter Your registered email">
                    </div>
                    <div class="form-group">
                        <label><span class="glyphicon glyphicon-eye-open"></span> Password</label>
                        <input type="password" class="form-control" placeholder="Enter Password" name="password">
                    </div>
                    <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-off"></span> Login</button>
                </form>
            </div>
            <div class="modal-footer">
                <p>Not a Member? <a href="../signup.php">Sign Up</a></p>
                <p><a href="#">Forgot Password</a></p>
            </div>
        </div>
    </div>
</div>