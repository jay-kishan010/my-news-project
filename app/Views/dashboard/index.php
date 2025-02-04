<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .dashboard-container {
            margin-top: 50px;
        }
        .dashboard-card {
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            transition: 0.3s;
        }
        .dashboard-card:hover {
            transform: scale(1.05);
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Admin Panel</a>
    <div class="ml-auto">
        <a href="<?= site_url('logout'); ?>" class="btn btn-danger">Logout</a>
    </div>
</nav>

<!-- Dashboard Content -->
<div class="container dashboard-container">
    <h2 class="text-center">Welcome, Admin</h2>
    
    <div class="row mt-4">
        
        <div class="col-md-4">
    <div class="dashboard-card bg-primary text-white">
        <h3>Manage News</h3>
        <p>View & Edit Articles</p>
        <a href="<?= site_url('news'); ?>" class="btn btn-light">Go</a>
    </div>
</div>
        <div class="col-md-4">
            <div class="dashboard-card bg-success text-white">
                <h3>Manage Categories</h3>
                <p>Edit News Categories</p>
                <a href="<?= site_url('admin/categories'); ?>" class="btn btn-light">Go</a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="dashboard-card bg-warning text-dark">
                <h3>Manage Users</h3>
                <p>View & Edit Users</p>
                <a href="<?= site_url('admin/users'); ?>" class="btn btn-dark">Go</a>
            </div>
        </div>
    </div>
</div>

</body>
</html>
