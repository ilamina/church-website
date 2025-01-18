<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-------- CSS --------->
    <link rel="stylesheet" href="assets/css/style1.css">  

    <!-------- JSON --------->
    <script src="assets/json/main4.js"></script>

    <!---- ADD FONT AWESOME LINK HERE ----->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

     <!-- ------ WEB-ICON ------ -->
     <link rel="shortcut icon" href="images/rccg.png" type="image/x-icon">
     
    <!-------- TITLE --------->
     <title>Admin page</title>

</head>
<body>

        <!-------- ADMIN ATTENDANCe --------->
        <div class="dashboard-card">
        <header class="admin-header">
            <div class="logo">
            <img src="images/rccg.png" alt="User Icon">
            </div>
            <div class="search">
                <input type="text" placeholder="Search...">
            </div>
            <div class="user-info">
                <img src="images/avatar.png" alt="User Icon"> |
                <span>Welcome, Admin User</span>
            </div>
        </header>
        
        <div class="container">
        <nav class="sidebar">
            <div class="sidebar-card">
                <ul>
                    <li><a href="admin panel-dashboard.php">Dashboard</a></li>
                    <li><a href="attendance.php">Attendance</a></li>
                    <li><a href="members.php">Members</a></li>
                    <li><a href="upcoming events.php">Upcoming Events</a></li>
                    <li><a href="reports.php">Reports</a></li>
                    <li><a href="admin-login.php">Logout</a></li>
                </ul>
            </div>
        </nav>

       
  <!-------- ADMIN ATTENDANCE -main --------->
        <div class="attendance-card">
            <div class="header-att">
                <h2>Take Attendance</h2>
            </div>
            <div class="form-container-att">
                <form id="attendance-form">
                <label for="first-name">First Name:</label>
                <input type="text" id="first-name" name="first-name" required>
                
                <label for="last-name">Last Name:</label>
                <input type="text" id="last-name" name="last-name" required>
                
                <label for="phone-number">Phone Number:</label>
                <input type="tel" id="phone-number" name="phone-number" required>
                
                <label for="date">Date:</label>
                <input type="date" id="date" name="date" required>
                
                <label for="service">Service:</label>
                <input type="text" id="service" name="service" required>
                
                <button type="submit">Add</button>
                </form>
            </div>
            </div>

            <table id="attendance-table">
            <thead>
                <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Phone Number</th>
                <th>Date</th>
                <th>Service</th>
                </tr>
            </thead>
            <tbody>
                <!-- Attendance data will be added dynamically here -->
            </tbody>
            </table>
                    
 
</body>
</html>
