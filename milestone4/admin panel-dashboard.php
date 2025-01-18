<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-------- CSS --------->
    <link rel="stylesheet" href="assets/css/style1.css">  

    <!---- ADD FONT AWESOME LINK HERE ----->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

     <!-- ------ WEB-ICON ------ -->
     <link rel="shortcut icon" href="images/rccg.png" type="image/x-icon">
     
    <!-------- TITLE --------->
     <title>Admin page</title>

</head>
<body>

        <!-------- ADMIN DASHBOARD --------->
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
                    <li><a href="logout.php" onclick="logout()">Logout</a></li>
                </ul>
            </div>
        </nav>

        <div class="dashboard-body">
            <header class="dashboard-header">
                <h1>Administrator Dashboard</h1>
            </header>
            <div class="card-container">
                <!-- First Card -->
                <div class="card">
                    <div class="card-header">
                        <h2>Members</h2>
                        <img src="images/member.jpg" alt="Icon">
                    </div>
                    <div class="card-body">
                        <p>Number of Members: 100</p>
                    </div>
                </div>
                <!-- Second Card -->
                <div class="card">
                    <div class="card-header">
                        <h2>Total Attendance</h2>
                        <img src="images/total_attendance.jpg" alt="Icon">
                    </div>
                    <div class="card-body">
                        <p>Number of Members: 90</p>
                    </div>
                </div>
                <!-- Third Card -->
                <div class="card">
                    <div class="card-header">
                        <h2>Average Attandance</h2>
                        <img src="images/ave_attendance.jpg" alt="Icon">
                    </div>
                    <div class="card-body">
                        <p>Number of Members: 75</p>
                    </div>
                </div>

    <!-- Fourth Card -->
        <div class="card">
        <div class="card-header">
            <h2>Attendance Data</h2>
        </div>
        <div class="card-body">
            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Service</th>
                        <th>Total Attendance</th>
                    </tr>
                    </thead>
                            <tbody>
                                <?php
                                // Include your database connection file
                                include_once 'main_db.php';

                                // Fetch attendance data from the database
                                $query = "SELECT * FROM attendance";
                                $result = mysqli_query($connection, $query);

                                // Check if there are any results
                                if (mysqli_num_rows($result) > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        echo "<tr>";
                                        echo "<td>" . $row['name'] . "</td>";
                                        echo "<td>" . $row['service'] . "</td>";
                                        echo "<td>" . $row['total_attendance'] . "</td>";
                                        echo "</tr>";
                                    }
                                } else {
                                    echo "<tr><td colspan='3'>No attendance data available</td></tr>";
                                }

                                // Close database connection
                                mysqli_close($connection);
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>