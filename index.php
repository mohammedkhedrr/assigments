<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST['username'];
    $password = $_POST['password']; 
    $email    = $_POST['email'];

    echo "<h2>Profile Page</h2>";
    echo "<p>Username:" . $username . "</p>";
    echo "<p>Email:" . $email . "</p>";
    echo "<p>Password: " . $password . "</p>";
} else {
    echo "No data received!";
}
?>