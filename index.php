<!DOCTYPE html>
<html lang="en">

<!-- Doc Header -->
<?php include 'head.html' ?>

<body>

<!-- Doc Header -->
<?php include 'nav.html' ?>

<!-- Doc Slider -->
<?php include 'slider.html' ?>

<br><br><br>
<div class="container" >

    <div class="row clearfix">
            <div class="col-md-3 column">
            </div>
            <div class="col-md-3 column">
            <form class="form-signin mg-btm" method="post" action="newgame.php">
            <center>
            <img class="img-circle img-responsive text-center" src="http://lorempixel.com/200/200/sports/8">
                <br>
                <h3 class="heading-desc pull-center">Create A Game</h3>
                <br>
                <div class="main">          
                 <label for="Sports">Sport</label>
                 <br>
                 <select name="sports">
                                                <option style="color:gray" value="Choose a sport" selected="selected" > </option>
                                                <option value="Baseball">Baseball</option>
                                                <option value="Football">Football</option>
                                                <option value="Soccer">Soccer</option>
                                                <option value="Tennis">Tennis</option>
                                                <option value="Ultimate_Frisbee">Ultimate Frisbee</option>
                                                <option value="Rugby">Rugby</option>
                                                <option value="Basketball">Basketball</option>
                                                <option value="Hockey">Hockey</option>          
                                                <br>        
                                            </select>
                <span class="clearfix"></span>  
                </div>
                <br>
                <div class="login-footer">
                <div class="row">
                                <input class="btn btn-info" type="submit" value="Let's Play!"> 
                                   <!--  <a href="newgame.html" class="btn btn-success " ><i class="icon-star icon-white "></i> Lets Play!</a> -->
                                </div>
                </div>
                </center>
            </form>
            </div>
            <div class="col-md-3 column">
            <!-- Existing Game -->
                <form class="form-signin mg-btm" method="post" action="search.php">
                <center>
                <img class="img-circle img-responsive text-center" src="http://lorempixel.com/200/200/sports/7">
                    <br>
                    <h3 class="heading-desc pull-center">Find A Match</h3>
                    <br>
                    <div class="main">          
                     <label for="Sports">Sport</label> 
                     <br>
                     <select name="sports">
                                                    <option style="color:gray" value="Choose a sport" selected="selected" > </option>
                                                    <option value="Baseball">Baseball</option>
                                                    <option value="Football">Football</option>
                                                    <option value="Soccer">Soccer</option>
                                                    <option value="Tennis">Tennis</option>
                                                    <option value="Ultimate_Frisbee">Ultimate Frisbee</option>
                                                    <option value="Rugby">Rugby</option>
                                                    <option value="Basketball">Basketball</option>
                                                    <option value="Hockey">Hockey</option>                  
                                                </select>
                                                <br>
                    <label for="zip">Zip</label><input type="text" class="form-control" id="zip_location" name="zip_location" /><br>
                    <span class="clearfix"></span>  
                    </div>
                    <br>
                    <div class="login-footer">
                    <div class="row">
                                    <input class="btn btn-info" type="submit" value="Search"> 
                                        <!-- <a href="search.php" class="btn btn-success" ><i class="icon-star icon-white "></i> Search</a> -->
                                    </div>                    
                    </div>
                    </center>
                </form>
            </div>
            <div class="col-md-3 column">
            </div>
    </div>


<?php include 'footer.html' ?>

</div><!-- /.container -->

    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>
</body>
</html>
