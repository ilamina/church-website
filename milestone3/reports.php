<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-------- CSS --------->
    <link rel="stylesheet" href="assets/css/style1.css"> 
    
     <!-------- JSON --------->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> <!-- Include Chart.js library -->
    <script src="assets/json/charts.js"></script>

    <!---- ADD FONT AWESOME LINK HERE ----->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

     <!-- ------ WEB-ICON ------ -->
     <link rel="shortcut icon" href="images/rccg.png" type="image/x-icon">
     
    <!-------- TITLE --------->
     <title>Admin page</title>

</head>
<body>

        <!-------- ADMIN REPORTS --------->
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

          
        
     <!-------- ADMIN REPORTS -main --------->
        <div class="container-report">
            <div class="card-report">
                <div class="card-header-report">
                    <h2>Attendance Trends</h2>
                </div>
                <div class="card-body">
                    <canvas id="attendanceChart"></canvas>
                </div>
            </div>

            <div class="card-report">
                <div class="card-header-report">
                    <h2>Member Statistics</h2>
                </div>
                <div class="card-body">
                    <canvas id="memberChart"></canvas>
                </div>
            </div>
        </div>
                            
</body>
</html>
