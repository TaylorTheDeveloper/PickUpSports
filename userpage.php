<!DOCTYPE html>
<html lang="en">

<!-- Doc Header -->
<?php include 'head.html' ?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" href="img/pickUp-Logo_icon.png"/>
    <title>PickUp.</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="css/custum_style.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Josefin+Slab:700italic' rel='stylesheet' type='text/css'>

       <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>

    <!--Parsley-->
    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="js/parsley.js"></script>
    <link href="css/parsley.css" rel="stylesheet">
 
    <!--Date Picker-->
  <link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.9.1.js"></script>
  <script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
</head>


<link href="css/userpage.css" rel="stylesheet">
<!-- Login Modal -->
<?php include 'login_modal.html' ?>
<body>

<!-- Doc Header -->
<?php include 'nav.php' ?>

<br><br><br><!-- change out for margin -->
<!-- <div class="container">
	<br><br>
	<div class="row clearfix media well" style="margin-top: -1%;">
		<div class="col-md-12 column">
			<div class="row clearfix"> -->
<div class="container">



<!-- Countries -->
<input type="radio" id="europa" name="continente" checked='checked' />
<!-- <input type="radio" id="america" name="continente" />
<input type="radio" id="asia" name="continente" /> -->

<!-- Europa -->
<input type="radio" id="espana" name="pais" checked='checked' />
<input type="radio" id="italia" name="pais" />
<input type="radio" id="grecia" name="pais" />
<input type="radio" id="alemania" name="pais" />

<!-- America -->
<!-- <input type="radio" id="argentina" name="pais" />
<input type="radio" id="peru" name="pais" />
<input type="radio" id="mexico" name="pais" />
<input type="radio" id="eeuu" name="pais" /> -->

<!-- Asia -->
<!-- <input type="radio" id="japon" name="pais" />
<input type="radio" id="filipinas" name="pais" />
<input type="radio" id="china" name="pais" />
<input type="radio" id="malasia" name="pais" /> -->

<section>
<!--   <h2 class="entypo-user"><?php echo $_SESSION['username'] . "'s<br>"; ?></h2> -->
  <!-- labels continentes y grupos paises -->
  <!-- <nav class='continente'>
     <label for="europa" class="entypo-air">Europa</label>
     <label for="america" class="entypo-calendar">America</label>
     <label for="asia" class="entypo-instagrem">Asia</label>
  </nav> -->
    <nav class='paises eu'>    
	 <label for="grecia" class="entypo-vcard">Profile</label>
     <label for="espana" class="entypo-chart-bar">Stats</label>
     <label for="italia" class="entypo-users">Matches</label>
	<!--  <label for="alemania" class="entypo-clipboard">Friends</label> -->
    </nav>
  
    <!-- <nav class='paises am'>
     <label for="argentina" class="entypo-rss">Argentina</label>
     <label for="peru" class="entypo-shareable">Peru</label>
     <label for="mexico" class="entypo-shuffle">Mexico</label>
     <label for="eeuu" class="entypo-signal">EE.UU.</label>
    </nav>
  
    <nav class='paises as'>
     <label for="japon" class="entypo-flow-branch">Japón</label>
     <label for="filipinas" class="entypo-flow-cascade">Filipinas</label>
     <label for="china" class="entypo-flow-tree">China</label>
     <label for="malasia" class="entypo-flow-parallel">Malasia</label>
    </nav> -->

 <div>  


  <article class='europa'>
     <div class='pais grecia'>
		<table>
		   <caption>Your Info:</caption>
		 <tbody>
		    <?php include 'userMGMT/userProfile.php' ?>
		   </tbody> 
		</table>      
    </div>

    <div class='pais espana'>
		<table>
		   <caption>Your Stats:</caption>
		   <tbody>
		    <?php include 'userMGMT/userStats.php' ?>
		   </tbody>
		</table>      
    </div>
    
    <div class='pais italia'>
<table>
   <caption>Your Matches:</caption>
   <tbody>
       <?php include 'userMGMT/userMatches.php' ?>

   </tbody>
</table>      
    </div>

        <div class='pais alemania'>
<table>
   <caption>Your Friends:</caption>
   <tbody>
       <?php include 'userMGMT/userFriends.php' ?>
   </tbody>
</table>      
    </div>
    
 
  </article>
     <!--
  <article class='america'>
      <div class='pais argentina'>
      <img alt='' src='http://www.80puzzle.com/flags/flag-of-argentina.jpg'>
      </div>
      <div class='pais peru'>
      <img alt='' src='http://www.mceconsultoresasociados.com/ps13/peru.jpg'>
      </div>
      <div class='pais mexico'>
      <img alt='' src='http://fernandortizg.files.wordpress.com/2012/09/bandera-de-mexico.jpg'>
      </div>
      <div class='pais eeuu'>
      <img alt='' src='http://www.computerworld.es/archivos/201211/bandera_eeuu_hi.png'>
      </div>
  </article>
  
  <article class='asia'>
      <div class='pais japon'>
      <img alt='' src='http://www.lovethesepics.com/wp-content/uploads/2012/09/Japan-Fujiyoshida-and-Mount-Fuji.jpg'>
      </div>
      <div class='pais filipinas'>
      <img alt='' src='http://img01.lavanguardia.com/2010/12/07/Filipinas_54083687758_600_226.jpg'>
      </div>
      <div class='pais china'>
      <img alt='' src='http://www.jaimelago.org/sites/default/files/u1/china.jpg'>
      </div>
      <div class='pais malasia'>
      <img alt='' src='http://www.todopaises.com/images/malasia-7/Malasia-34.jpg'>
      </div>
  </article> -->
 </div> 
</section>


				<!-- <div class="col-md-2 column text-center">
				<h2><?php //echo $_SESSION['username']; ?></h2>
					<img alt="140x140" src="http://placehold.it/140x140&text=profilepic" class="img-circle" />
					
				</div>
				<div class="col-md-2 column">
					<h2> Stats: </h2><hr>
					 <address> <strong>Games Played: 12 </strong><br /> Favorite Sport: Baseball<br /> Florida<br /> <abbr title="zip">zip:</abbr> 32304 </address>
				</div>
				<div class="col-md-8 column">
					<div class="media well">
						<?php //include 'userMGMT/userStats.php' ?>
					</div>
				</div> -->
<!-- 			</div>
		</div>
	</div>
<div class="row clearfix media well" style="margin-top: -1%;">
<?php //include 'game_forms.html' ?>
</div> -->


<?php //include 'footer.html' ?>
</div><!-- /.container -->

</body>
</html>
