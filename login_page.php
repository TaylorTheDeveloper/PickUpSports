<!DOCTYPE html>
<html lang="en">

<!-- Doc Header -->
<?php include 'head.html' ?>

<body>

<!-- Doc Header -->
<?php include 'nav.php' ?>

<br><br><br><!-- change out for margin -->

<div class="container">
<div class="row clearfix"> 
<div class="pull-center login-section">
<img class="login-img" src="http://placehold.it/200x100&text=Login">
	<form accept-charset="UTF-8" role="form" method="post" action="userMGMT/login.php">   
                <div class="form-group">
                    <label for="user">Username *</label><input class="form-control" placeholder="Username" name="username" type="text">
                </div>
                <div class="form-group">
                    <label for="pass">Password *</label><input class="form-control" placeholder="Password" name="password" type="password" value="">
                </div>
                <div class="checkbox">
                    <label>
                        <input name="remember" type="checkbox" value="Remember Me"> Remember Me
                    </label>
                </div>  <br>
                <center>
                <input class="btn btn-info" type="submit" value="Login"> 
                </center>                                   
            </form>

</div>
</div>


<?php //include 'footer.html' ?>
</div><!-- /.container -->

</body>
</html>
