<script type="text/javascript"> $(document).ready(function () { $('.dropdown-toggle').dropdown(); }); </script>


<nav class="navbar navbar-fixed-top navbar-default" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a class="navbar-brand" href="index.php"><img class="img-responsive" id="brand" src="img/brand_2.png" ></a>
        </div>

            <div class="collapse navbar-collapse navbar-ex1-collapse ">
            <ul class="nav navbar-nav navbar-right ">               
            <?php 
            session_start();
            if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) 
            {
                echo "<li>";
                echo "<div  class=\"btn-group padded\">";
                echo "<button class=\"color green styled-button-1 dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\"> " . $_SESSION['username'] . " <span class=\"caret\"</span></button>";
                echo "<ul class=\"dropdown-menu\">";         
                echo "<li><a href=\"userpage.php\"><i class=\"glyphicon glyphicon-cog\"></i> Account </a></li>";
                echo "<li class=\"divider\">";
                echo "<li><a href=\"userMGMT/logout.php\"><i class=\"glyphicon glyphicon-off\"></i> Log out</a></li>";
                echo "</ul>";
                echo "</div>";
                echo "</li>";
            } 
            else 
            {
                echo "<li><a href=\"#login\"><button type=\"button\" class=\"nav styled-button-1\" data-toggle=\"modal\" data-target=\"#loginModal\">Sign In</button></a></li>";
            }
            ?>
                      
                <li><a href="about.php"><button type="button" class="nav styled-button-1">About</button></a></li>
            </ul>
        </div>




        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>