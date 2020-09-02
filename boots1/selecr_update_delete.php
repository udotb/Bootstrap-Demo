<?php

$servername = "localhost";
$username = "root";
$password = "123";
$database = "boot_demo";
$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
    echo "Connection was successful<br>";
}


$sql = "SELECT * FROM contact_us";
$result = mysqli_query($conn, $sql);

$num = mysqli_num_rows($result);
echo $num;

if($num>0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo $row['Name']. $row['Email']. $row['Subject']. $row['Message'];
        echo "<br>";
    }
}

$sql = "UPDATE contact_us SET Name='sal' WHERE Message = 'Hello world'";
$result = mysqli_query($conn, $sql);
echo $result;

$sql = "DELETE FROM contact_us WHERE Subject = 'Ios' LIMIT 6";
$result = mysqli_query($conn, $sql);
echo $result;

//$sql = "INSERT INTO contact_us (Name, Email, Subject, Message) VALUES ('Ali', 'this@this.pk', 'Ios', 'Helloo ios' )";
//$result = mysqli_query($conn, $sql);
//echo $result;

?>