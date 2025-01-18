<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-------- CSS --------->
    <link rel="stylesheet" href="assets/css/style1.css">

     <!-------- JSON --------->
    <script src="assets/json/main3.js" defer></script>

    <!---- ADD FONT AWESOME LINK HERE ----->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

     <!-- ------ WEB-ICON ------ -->
     <link rel="shortcut icon" href="images/rccg.png" type="image/x-icon">
     
    <!-------- TITLE --------->
     <title>Admin page</title>

</head>
<body>

            <!-------- ADMIN LOGIN --------->
        <div class="login-card">
            <div class="header">Attendance Management System</div>
            <div class="body">
                <form id="loginForm" action="login.php" method="POST">
                    <div class="avatar">
                        <!-- Placeholder avatar image -->
                        <img src="images/avatar.png" alt="Avatar">
                    </div>
                    <div class="input-group">
                        <label for="adminid">Admin ID:</label>
                        <input type="text" id="adminid" name="adminid" placeholder="Admin ID" required>
                    </div>
                    
                    <div class="input-group">
                        <label for="password">Password:</label>
                        <input type="password" id="password" name="password" placeholder="Enter Password" required>
                    </div>
                    <div class="button-container">
                        <button type="submit" class="login-button">Login</button>
                    </div>
                </form>
            </div>
        </div>


</body>
</html>

  
