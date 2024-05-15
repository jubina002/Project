<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Save user data to a file (you can save to database in a real application)
    $userData = "Username: $username\n";
    $userData .= "Email: $email\n";
    $userData .= "Password: $password\n";

    // Save data to a file (you can save to database in a real application)
    $file = 'users.txt'; // File to save user data
    file_put_contents($file, $userData, FILE_APPEND | LOCK_EX);

    // Redirect to a success page or display a success message
    header("Location: signup_success.php");
    exit;
}
?>
