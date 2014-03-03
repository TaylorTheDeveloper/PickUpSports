        <nav class="navbar navbar-fixed-top navbar-default" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><span style="color: #fa7147;" >PickUp.</span></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav navbar-right">
                <?php 
                session_start();
                if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
                    echo "<li>Welcome back, " . $_SESSION['username'] . "!</li>";
                    echo "<li><button type=\"button\" class=\"btn btn-medium btn-info\" data-toggle=\"modal\" data-target=\"#logoutModal\">Log out</button></li>";
                } else {
                    echo "<li><button type=\"button\" class=\"btn btn-medium btn-info\" data-toggle=\"regmodal\" data-target=\"#regModal\">register</button></li>
                    <li><button type=\"button\" class=\"btn btn-medium btn-info\" data-toggle=\"modal\" data-target=\"#myModal\">Login</button></li>";
                }
                ?>
                          
                    <li><a href="about.php"><span style="color: #fa7147;" >About</span></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>