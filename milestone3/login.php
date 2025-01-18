  <!-------- ADMIN LOGIN PHP VALIDATION --------->
<?php
// Dummy authentication - Just for demonstration
$adminid = $_POST['adminid'];
$password = $_POST['password'];

// Validate credentials (dummy check)
if ($adminid === 'rccg' && $password === 'Ben123!') {
    // Start session and set authentication flag
    session_start();
    $_SESSION['authenticated'] = true;
    header('Location: admin panel-dashboard.php');
    exit(); // Always include exit after header redirect
} else {
    // If authentication fails, redirect back to login page or display an error message
    header('Location: admin-login.php'); // Redirect with error parameter
    exit(); // Always include exit after header redirect
}
?>

   
