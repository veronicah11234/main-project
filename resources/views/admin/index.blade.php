<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
 /* Basic styling */
body {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
    display: grid;
    grid-template-columns: 1fr 4fr; /* Two-column layout */
    min-height: 100vh;
}

.main-content {
    padding: 20px;
}
/* Sidebar */
.sidebar {
    background-color: #f2f2f2; /* Light gray background */
    color: #333; /* Dark text color */
    padding: 20px;
    height: 100vh; /* Make the sidebar full height */
}

/* Main content */

/* Dashboard Header */
.dashboard-header {
    /* background-color: #333; Dark background */
    /* color: #fff; White text color */
    padding: 10px;
    text-align: center;
    grid-column: 1 / span 2; /* Span both columns */
}

/* Navbar styling */
nav ul {
    list-style-type: none;
    padding: 0;
}

nav li {
    margin-bottom: 10px;
}

nav a {
    text-decoration: none;
    /* color: #333; */
    display: block;
    padding: 5px;
    border-radius: 5px;
}

/* Active link style */
nav li.active {
    /* background-color: #333; Dark background for active link */
    /* color: #fff; White text color for active link */
}

    </style>
</head>
<body>
    <div class="sidebar">
        <nav>
            <ul>
                <li><a href="{{ route('dashboard') }}">Add Tour</a></li>
                <li><a href="{{ route('profile') }}">User Profile</a></li>
                <li><a href="{{ route('admin.logout') }}">Logout</a></li>
            </ul>
            
        </nav>
    </div>
    <!-- ... (other body content) ... -->
</body>
</html>
