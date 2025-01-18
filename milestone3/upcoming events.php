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

        <!-------- ADMIN Upcoming Events --------->
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

         <!-------- Main --------->
         <div class="container-event">
        <header class="title">
            <h1>Upcoming Events</h1>
        </header>
        <div class="event-container">
            <!-- First Card -->
            <div class="card-event">
                <div class="card-header-event">
                    <h2>Event 1</h2>
                    <button class="delete-btn">Delete</button>
                </div>
                <div class="card-body">
                    <p>Date: January 1, 2025</p>
                    <p>Location: TBD</p>
                    <p>Description: Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
            <!-- Second Card -->
            <div class="card-event">
                <div class="card-header-event">
                    <h2>Event 2</h2>
                    <button class="delete-btn">Delete</button>
                </div>
                <div class="card-body">
                    <p>Date: February 15, 2025</p>
                    <p>Location: TBD</p>
                    <p>Description: Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
            <!-- Third Card -->
            <div class="card-event">
                <div class="card-header-event">
                    <h2>Event 3</h2>
                    <button class="delete-btn">Delete</button>
                </div>
                <div class="card-body">
                    <p>Date: March 30, 2025</p>
                    <p>Location: TBD</p>
                    <p>Description: Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
            <!-- Fourth Card -->
            <div class="card-event">
                <div class="card-header-event">
                    <h2>Event 4</h2>
                    <button class="delete-btn">Delete</button>
                </div>
                <div class="card-body">
                    <p>Date: March 30, 2025</p>
                    <p>Location: TBD</p>
                    <p>Description: Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>

        </div>
        <button class="add-btn">Add Event</button>
    </div>
     
    

    <!-- Add JavaScript -->

</body>
</html>
