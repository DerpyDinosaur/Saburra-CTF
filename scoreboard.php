<?php
	include 'custodia/import/database.php';
?>
<!DOCTYPE html>
<html class="loadingPage">
<head>
	<title>Saburra Capture The Flag</title>
	<?php include 'custodia/import/headImp.php';?>
</head>
<body onload="loaded()">
	<header>
		<?php include 'custodia/import/headerContentImp.php'; ?>
	</header>
	<section class="leaderboard">
			<table id="_leaderboardTable" class="leaderboardTable">
				<?php
					$tableHeader = "<tr style='font-weight:bold;'>
							<td><i class='fas fa-hashtag'></i></th>
							<td>User / Team</td>
							<td>Score</td>
						</tr>";
					echo $tableHeader;

					$sql = "SELECT * FROM users ORDER BY users.totalScore DESC LIMIT 0,100;";
					$result = mysqli_query($conn, $sql);

					if ($result->num_rows > 0) {
						$i = 1;
						while ($row = mysqli_fetch_assoc($result)) {
							
							if ($row['username'] == "redTeam") {
								echo "<tr style='background-color:rgb(228, 57, 57);'>";
							}elseif ($row['username'] == "blueTeam") {
								echo "<tr style='background-color:rgb(57, 208, 228);'>";
							}else{
								echo "<tr>";
							}

							echo "<td>".$i."</td>";

							if ($row['username'] == "redTeam") {
								echo "<td >Red Team</td>";
							}elseif ($row['username'] == "blueTeam") {
								echo "<td>Blue Team</td>";
							}elseif ($i == 1) {
								echo "<td><i style='color:#ffbf00;text-shadow: 1px 1px #000;padding-right:1em;' class='fas fa-crown'></i>".ucfirst($row['username'])."</td>";
							}else{
								echo "<td>".ucfirst($row['username'])."</td>";
							}

							echo "<td>".$row['totalScore']."</td>";
							echo "</tr>";
							$i++;
						}
					}else{
						echo "<h2>No one has scored yet</h2><br>";
					}
				?>
			</table>
		</section>
</body>
</html>