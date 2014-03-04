<nav class="navbar navbar-fixed-top navbar-default" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php"><span class="orange" >PickUp.</span></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav navbar-right">
            <?php 
            session_start();
            if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
                //echo "<li>Welcome back, " . $_SESSION['username'] . "!</li>";
                echo "<li><a href=\"userpage.php\"><button type=\"button\" class=\"btn btn-medium btn-info\" >" . $_SESSION['username'] . "</button></a></li>";
                echo "<li><a href=\"userMGMT/logout.php\"><button type=\"button\" class=\"btn btn-medium btn-info\" >Log out</button></a></li>";
            } else {
                echo "<li><a href=\"#\"><button type=\"button\" class=\"btn btn-medium btn-info\" data-toggle=\"modal\" data-target=\"#loginModal\">Login / Register</button></a></li>";
            }
            ?>
                      
                <li><a href="about.php"><button type="button" class="btn btn-info">About</button></a></li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>