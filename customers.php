

<!-- !DOCTYPE html> -->
<html>
<head>
	<title>Transaction History</title>
	<style>
		.bg-image {
  background-image: url("https://images.unsplash.com/photo-1519758437711-f9ae52e78a95?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80");
  
  height: 100%; 
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
		.button {
  		display: inline-block;
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        color: #ffffff;
        background-color: black;
        border-radius: 6px;
        outline: none;
       }
	</style>
</head>
<body class="bg-image">

<center>
<?php
echo "<table style='border: solid 3px brown;'>";
 echo "<tr style='font-size:27px;font-family: Arial, Helvetica, sans-serif;color:blue;'><th>sender</th><th>receiver</th><th>credits</th></tr>";

class TableRows extends RecursiveIteratorIterator {
    function __construct($it) {
        parent::__construct($it, self::LEAVES_ONLY);
    }

    function current() {
        return "<td style='width: 300px;height: 40px; border: 2px solid darkgoldenrod;font-size:24px;color:darkgreen;'>" . parent::current(). "</td>";
    }

    function beginChildren() {
        echo "<tr>";
    }

    function endChildren() {
        echo "</tr>" . "\n";
    }
}
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "transaction";
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT sender, receiver,credits FROM Transfer_details");
    $stmt->execute();

    
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
        echo $v;
    }
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";
?>
<a class="button" href="http://localhost/final/home.html" >back</a>
</center>
</body>
</html>
