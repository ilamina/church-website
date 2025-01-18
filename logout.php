<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
    <script>
        function logout() {
            var logoutChoice = confirm("Do you want to logout?\n\nChoose 'OK' to return to the login page or 'Cancel' to return to the main website/page.");

            if (logoutChoice) {
                window.location.href = "admin-login.php"; // Redirect to login page
            } else {
                window.location.href = "index.php"; // Redirect to main website/page
            }
        }
    </script>
</head>
<body>
<h1>Logout</h1>
        <p>Do you want to:</p>
            <ul>
                <li><a href="logout.php" onclick="logout()">Return to Login Page</a></li>
                <li><a href="index.php">Return to Main Website/Page</a></li>
            </ul>
</html>
