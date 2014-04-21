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
		<div class="col-md-12 column" style="margin-top:10px;">
			<h1 class="usernameHeader"><?php echo "<span class=\"entypo-user\" style=\"background-color: #fa8d67; color: #ffffff; padding: 1%; margin-right:7%;\"> Edit " . $_SESSION['username'] ."'s account  </span>"; ?></h1>
		</div>
	</div>
</div>

<div class="container">

<div class="panel-body" style="margin-top: 1%; margin-left: 30%;margin-right: 30%;" >
         <div class="row clearfix well">
             <form accept-charset="UTF-8" id="signupform" class="form-horizontal" role="form" method="post" action="userMGMT/update_account.php" parsley-validate>
            
            <div id="signupalert" style="display:none" class="alert alert-danger">
                <p>Error:</p>
                <span></span>
            </div>
            
            <div class="form-group">
                <label for="firstname" class="col-md-3 control-label">First Name</label>
                <div class="col-md-9">
                    <input type="text" class="form-control" name="firstname" parsley-required="true" value="<?php echo $_POST['fname']?>" placeholder="First Name">
                </div>
            </div>
            <div class="form-group">
                <label for="lastname" class="col-md-3 control-label">Last Name</label>
                <div class="col-md-9">
                    <input type="text" class="form-control" name="lastname" parsley-required="true" value="<?php echo $_POST['lname']?>" placeholder="Last Name">
                </div>
            </div>
             <div class="form-group">
                <label for="email" class="col-md-3 control-label">Email Address</label>
                <div class="col-md-9">
                    <input parsley-type="email" class="form-control" name="email" parsley-required="true" value="<?php echo $_POST['email']?>" placeholder="Email Address">
                </div>
            </div>
             <div class="form-group">
                <label for="zip" class="col-md-3 control-label">Zip Code</label>
                <div class="col-md-9">
                    <input data-parsley-type="digits" class="form-control" name="zip" parsley-required="true" value="<?php echo $_POST['zip']?>" parsley-type="digits" parsley-minlength="5" parsley-maxlength="5" placeholder="Zip Code">
                </div>
            </div>
            <div class="form-group">
                <label for="icode" class="col-md-3 control-label">Favorite Sport</label>
                <div class="col-md-9">
                <?php $name1 = $_POST['fsport']; ?>
                    <select class="form-control" name="sports">
                        <option value="Baseball"<?php if($name1 == "Baseball"){ echo ' selected="selected"'; }?>> Baseball</option>
						<option value="Football" <?php if($name1 == "Football"){ echo ' selected="selected"'; }?>> Football</option>
						<option value="Soccer"<?php if($name1 == "Soccer"){ echo ' selected="selected"'; }?>> Soccer</option>
						<option value="Tennis" <?php if($name1 == "Tennis"){ echo ' selected="selected"'; }?>> Tennis</option>
						<option value="Ultimate_Frisbee"<?php if($name1 == "Ultimate_Frisbee"){ echo ' selected="selected"'; }?>> Ultimate Frisbee</option>
						<option value="Basketball"<?php if($name1 == "Basketball"){ echo ' selected="selected"'; }?>> Basketball</option>
						<option value="Hockey"<?php if($name1 == "Hockey"){ echo ' selected="selected"'; }?>> Hockey</option>   
                    </select>	
                </div>
            </div>


            <!-- <div class="form-group">
                <label for="password" class="col-md-3 control-label">Password</label>
                <div class="col-md-9">
                    <input type="password" class="form-control" id="password" name="password" parsley-required="true" placeholder="Password" parsley-minlength="6" parsley-equalto="#password">
                </div>
            </div>
            <div class="form-group">
                <label for="password" class="col-md-3 control-label">Confirm Password</label>
                <div class="col-md-9">
                    <input type="password" class="form-control" id="confirmpassword" parsley-required="true" placeholder="Confirm Password" parsley-minlength="6" parsley-equalto="#password">
                </div> 
            </div> -->


        </div> 

            <div class="form-group" style="margin-top: 5%;">
                <!-- Button -->                                        
                <div class="col-md-offset-3 col-md-9">
                    <input class="color green styled-button-1" type="submit" value="Update Changes" > 
                    <a href="userpage.php">
                    <button type="button" class="nav styled-button-1" data-dismiss="modal">Cancel</button>
                    </a>
                </div>
            </div>
            

	</div>
            
        </form>                                                                   
     </div>
</div>

<?php //include 'footer.html' ?>

</div><!-- /.container -->

</body>
</html>
