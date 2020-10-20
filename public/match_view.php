<!DOCTYPE html>
<html>

<!-- TODO(lucas): Replace with a common header! -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Match Results</title>

	<link href= "css/match.css" rel="stylesheet">

	<script src="js/match.js"></script>
</head>

<body>
    <?php include("navbarexample.php"); ?>
	<div class="match-content">
		<h1>Match Result</h1>
		<div class="line-wide"></div>
		<form>
			<div class="match-content-box match-shadow-box">
				<h2>Team 1</h2>
				<div class="match-team-content">
					<img class="match-team-img match-border" src="img/tmp_team.jpeg" onclick="toggleOverlay();">
				</div>
			</div>
			<div class="match-content-box match-shadow-box">
				<h4>Participants:</h4>
				<img class="match-player-img" src="img/tmp_team.jpeg">
				<img class="match-player-img" src="img/tmp_team.jpeg">
				<img class="match-player-img" src="img/tmp_team.jpeg">
				<img class="match-player-img" src="img/tmp_team.jpeg">
				<img class="match-player-img" src="img/tmp_team.jpeg">
			</div>
			<div class="line-wide"></div>

			<div class="match-content-box match-shadow-box">
				<h2>Team 2</h2>
				<div class="match-team-content">
					<img class="match-team-img match-border" src="img/tmp_team2.jpeg">
				</div>
			</div>

			<div class="match-content-box match-shadow-box">
				<h4>Participants:</h4>
				<img class="match-player-img" src="img/tmp_team2.jpeg">
				<img class="match-player-img" src="img/tmp_team2.jpeg">
				<img class="match-player-img" src="img/tmp_team2.jpeg">
				<img class="match-player-img" src="img/tmp_team2.jpeg">
				<img class="match-player-img" src="img/tmp_team2.jpeg">
			</div>

			<div class="line-wide"></div>

			<h2>Result</h2>

			<!-- TODO(lucas): Create fancy custom radio buttons -->
			<div class="match-result">
				<label>
					<input readonly type="radio" checked="checked" name="match_result">
					<span class="checkmark"></span>
					Team 1 won
				</label>
				<br>

				<label>
					<input readonly disabled type="radio" name="match_result">
					<span class="checkmark"></span>
					Tied
				</label>
				<br>

				<label>
					<input readonly disabled type="radio" name="match_result">
					<span class="checkmark"></span>
					Team 2 won
				</label>
			</div>

			<br>
		</form>
	</div>
</body>