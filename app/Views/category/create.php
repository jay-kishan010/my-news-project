<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Category</title>
    
    <!-- Bootstrap & FontAwesome -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
    <style>
        body {
            background-color: #f4f7fc;
        }
        .container-wrapper {
            display: flex;
            min-height: 100vh;
        }
        .sidebar {
            width: 250px;
            min-height: 100vh;
            background: #2c3e50;
            color: white;
            padding: 15px;
        }
        .content {
            flex-grow: 1;
            padding: 20px;
        }
        .form-container {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            margin: auto;
        }
        .btn-save {
            background: #007bff;
            color: white;
            font-weight: bold;
            border-radius: 30px;
            transition: 0.3s;
        }
        .btn-save:hover {
            background: #0056b3;
        }
        @media (max-width: 768px) {
            .container-wrapper {
                flex-direction: column;
            }
            .sidebar {
                width: 100%;
            }
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?= site_url('/'); ?>">
            <i class="fas fa-newspaper"></i> News Admin
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?= site_url('dashboard'); ?>">
                        <i class="fas fa-home"></i> Dashboard
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="categoriesDropdown" role="button" data-bs-toggle="dropdown">
                        <i class="fas fa-list"></i> Categories
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="<?= site_url('categories'); ?>">View Categories</a></li>
                        <li><a class="dropdown-item" href="<?= site_url('categories/create'); ?>">Add Category</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= site_url('news'); ?>">
                        <i class="fas fa-newspaper"></i> News
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= site_url('logout'); ?>">
                        <i class="fas fa-sign-out-alt"></i> Logout
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container-wrapper">
    <!-- Sidebar -->
    <?= view('layouts/sidebar'); ?>

    <!-- Main Content -->
    <div class="content">
        <h2 class="text-center mb-4">
            <i class="fas fa-plus-circle"></i> Create Category
        </h2>

        <div class="form-container">
            <form action="<?= site_url('/categories/store'); ?>" method="post">
                <div class="mb-3">
                    <label class="form-label"><strong>Category Name</strong></label>
                    <input type="text" name="name" class="form-control" required>
                </div>

                <button type="submit" class="btn btn-save w-100">
                    <i class="fas fa-save"></i> Save Category
                </button>
            </form>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
