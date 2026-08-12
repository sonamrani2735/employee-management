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

<div>
    <ASide>
        <H2>Menu</H2>
        <nav>

    <a href="/">Dashboard</a>
    <a href="/employees">Employees</a>
    <a href="/departments">Departments</a>
</nav>

    </ASide>
    <main>
        @yield('content')
    </main>
</div>
    <footer>
        <p>&copy; 2024 Employee Management System. All rights reserved.</p>
    </footer>

</body>
</html>