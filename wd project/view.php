<?php



$conn = mysqli_connect("localhost","root","","test");

if(!($conn)){
    die("connection failed : " . mysqli_connect_error() . "<br>");
}

echo "<h3 style='color: #006400;'>connection successful...</h3>" . "<br>";

$sql = "SELECT * FROM list";

$result = mysqli_query($conn,$sql);

if (!$result) {
		die ("Database access failed: " . mysqli_connect_error());
     }
     
	$rows= mysqli_num_rows($result);
	echo " <b style='font-size:1.5rem;'>List of all order in table</b> <br><br>";
	echo "<table border='3px solid black'>";
	while($row = mysqli_fetch_assoc($result)) 
	{
		echo "<tr>";
		echo '<td>' . $row["name"] . '</td>';
		echo '<td>' . $row["email"] . '</td>';
		echo '<td>' . $row["number"]. '</td>';
        echo '<td>' . $row["foodname"] . '</td>';
        echo '<td>' . $row["address"] . '</td>';
		echo "</tr>";
    }
	echo "</table>";
	echo "Total Rows $rows <br />";

mysqli_close($conn);


?>

<style>
	table{
		background-color: #6b5b95;
		color : white;
		font-size : 1.2rem;
	}
</style>
<?php
echo "<br><br>";
 include("menu.html");
?>
