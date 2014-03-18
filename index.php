<!DOCTYPE html>
<html lang="en">

<!-- Doc Header -->
<?php include 'head.html' ?>

<body>

<!-- Doc Header -->
<?php include 'nav.php' ?>

<!-- Doc Slider -->
<?php include 'slider.html' ?>

<br>

<div class="container" >

<?php 
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
        header('Location: userpage.php');
} 
?>

<?php include 'game_forms.html' ?>

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
