<?php include 'head.php'; ?>

<header>

			<div id="brand" class="title">PickUp.</div>
			<button type="submit" class="user_log_in">LOGIN</button>

			<div id="hero" class="title">
				<p>
					Your friendly neighboorhood pickup game. 
				</p>

				<p>
					Re-imagined.
				</p>

			</div>
</header>

<body>



<div class="container">
		

		<div class="intro title">
			<p>
				Coordinating a game of basketball with friends just got easier.
			</p>
		</div>

		<div class="main">

			<!-- New Game form -->
		<div class="new_game">
				<p>New Game</p>
				<form action="newgame.php" method="post">
				<p>Sport:
					<select name="sports">
						<option value="Baseball">Baseball</option>
						<option value="Football">Football</option>
						<option value="Soccer" selected>Soccer</option>
						<option value="Basketball">Basketball</option>
						<option value="Tennis">Tennis</option>
						<option value="Ultimate Frisbee">Ultimate Frisbee</option>
						<option value="Rugby">Rugby</option>
				</p>

					</select><br>
					<input type="submit" value="Let's Play">
			</form>
				
</div class="existing_game">
			<!-- Existing Game form -->
		<div >
				<p>Existing Game</p>
				<form action="search.php" method="post">

				<p>
					Zip: <input type="number" name="zip_location">
				</p>

				<input type="submit" value="search">

				
			
			</form>
				
</div>
	

		</div>



</body>
</html>
