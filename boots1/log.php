<?php
$servername = "localhost";
$username = "root";
$password = "123";
$database = "boot_demo";

$conn = mysqli_connect($servername, $username, $password, $database);

if($_SERVER ['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "insert into login (email, password) values ('$email', '$password')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Submitted Successfully</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">x</span>
  </button>
</div>';
    }


}
    ?>


