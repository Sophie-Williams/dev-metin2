<style type="text/css">
.innerTable{
	border: 1px solid black;
}
td, tr {
	border: 0;
}
.serverTitle{
	text-align: center;
	font-weight: bold;
}
</style>
<?php
	
	$showEveryBorder = false;
	$border = ($showEveryBorder) ? "border=\"1\"" : "";
	
	echo "<table {$border} cellspacing=\"5\">";
	echo "	<tr>";
	
	# Live Server
	echo "		<td>";
	$ip = "217.23.12.119";
	$portas = array(
					"db"=>15000,
					"auth"=>11000,
					"ch1-first"=>13000,
					"ch1-game1"=>13001,
					"ch1-game2"=>13002,
					"ch1-game3"=> 13003,
					"ch2-first"=>13010,
					"ch2-game1"=>13011,
					"ch2-game2"=>13012,
					"ch2-game3"=> 13013,
					"ch3-first"=>13020,
					"ch3-game1"=>13021,
					"ch3-game2"=>13022,
					"ch3-game3"=> 13023,
					"game99"=>13099
					);
	echo "			<table class=\"innerTable\">";
	echo "				<tr><td colspan=\"2\" class=\"serverTitle\">Live Server</td></tr>";
	foreach($portas as $k => $v){
		$sock = @fsockopen($ip, $v, $errno, $errstr, 1);
		echo "			<tr>";
		echo "				<td>" . strtoupper($k) . "</td>";
		// echo "				<td>{$v}</td>";
		echo ($sock) ? "<td><span style=\"color:green;\">ONLINE</span></td>" : "<td><span style=\"color:red;\">OFFLINE</span></td>";
		echo "			</tr>";
		@fclose($sock);
	}
	echo "			</table>";
	echo "		</td>";
	
	# Trunk Server
	echo "		<td>";
	$ip = "217.23.12.119";
	$portas = array("db"=>25000, "auth"=>21000, "ch1-game1"=>23001, "ch1-game2"=> 23002, "game99"=>23099);
	echo "			<table class=\"innerTable\">";
	echo "				<tr><td colspan=\"2\" class=\"serverTitle\">Trunk Server</td></tr>";
	foreach($portas as $k => $v){
		$sock = @fsockopen($ip, $v, $errno, $errstr, 1);
		echo "			<tr>";
		echo "				<td>" . strtoupper($k) . "</td>";
		// echo "				<td>{$v}</td>";
		echo ($sock) ? "<td><span style=\"color:green;\">ONLINE</span></td>" : "<td><span style=\"color:red;\">OFFLINE</span></td>";
		echo "			</tr>";
		@fclose($sock);
	}
	echo "			</table>";
	echo "		</td>";
	
	echo "	</tr>";
	echo "</table>";
?>
