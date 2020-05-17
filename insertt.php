<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$runner_name = $_POST["runner_name"];
$cand_name = $_POST["cand_name"];
$caseid = $_POST["caseid"];
$father_name = $_POST["father_name"];
$mother_name = $_POST["mother_name"];
$own = $_POST["own"];
$period = $_POST["period"];
$verifire = $_POST["verifire"];
$verifirec = $_POST["verifirec"];
$rwcandidate = $_POST["rwcandidate"];
$nlandmark = $_POST["nlandmark"];
$link = mysqli_connect("sql108.epizy.com", "epiz_25791579", "xHUHH97EiX6 ", "om");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt insert query execution
$sql = "INSERT INTO landmark (runner_name, cand_name, caseid, father_name, mother_name, own, period, verifire, verifirec, rwcandidate, nlandmark) VALUES ('$runner_name', '$cand_name', '$caseid', '$father_name', '$mother_name', '$own', '$period', '$verifire', '$verifirec', '$rwcandidate', '$nlandmark')";;
if(mysqli_query($link, $sql)){
    echo "<h1>Records inserted successfully.</h1>";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>
<!DOCTYPE html>
<html>
<head>
<title>submit landmarks</title>
</head>
<body>
	<style>
	input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
input[type=submit]:hover {
  background-color: #45a049;
}
div {
	width=: 140px;
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 100px;
}
</style>
	<a href="untitled.html">
		<div>
	<input type="submit" value="SUBMIT LANDMARKS">
		</a>
		</div>
		</body>
		</html>
		
		
		
		
		
		