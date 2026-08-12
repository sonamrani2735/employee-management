<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Management System</title>
</head>
<body>
 <header>
    <h1>Employee Management System</h1>

    <div>
        <span>Welcome, Admin</span>
    </div>
</header>
<nav>

    <a href="http://">Dashboard</a>
    <a href="http://">Employees</a>
    <a href="http://">Departments</a>
</nav>
    <main>
        @yield('content')
    </main>
    <footer>
        <p>&copy; 2024 Employee Management System. All rights reserved.</p>
    </footer>

</body>
</html>