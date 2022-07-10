 <?php
$servername = "localhost";
$username = "root";
$password = "Sourabh@123";
$dbname = "Sport Analysis";
$sport_name=$_POST['sport_name'];
$team_name=$_POST['team_name'];
$player_name=$_POST['player_name'];
$net_rr=$_POST['net_rr'];



// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);


// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO Data VALUES ('$sport_name','$team_name','$player_name','$sport',$net_rr)";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
