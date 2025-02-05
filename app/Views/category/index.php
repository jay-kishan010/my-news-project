<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories</title>
    
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
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #007bff;
            color: white;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
        /* Navbar */
        .navbar {
            background: linear-gradient(45deg, #007bff, #6610f2);
            color: white;
            padding: 12px 20px;
            border-radius: 8px;
        }
        .navbar-brand {
            font-weight: bold;
            font-size: 22px;
            color: white;
        }
        .navbar-toggler {
            border: none;
        }
        .navbar-toggler-icon {
            color: white;
        }
        .btn-add {
            background: white;
            color: #007bff;
            border-radius: 30px;
            font-weight: bold;
            transition: 0.3s;
        }
        .btn-add:hover {
            background: #f8f9fa;
            color: #0056b3;
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

<div class="container-wrapper">
    <!-- Sidebar -->
    <?= view('layouts/sidebar'); ?>

    <!-- Main Content -->
    <div class="content">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="#">
                <i class="fas fa-list"></i> Categories
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <i class="fas fa-bars text-white"></i>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <a href="<?= site_url('categories/create'); ?>" class="btn btn-add">
                    <i class="fas fa-plus-circle"></i> Add Category
                </a>
            </div>
        </nav>

        <!-- Categories Table -->
        <div class="table-responsive mt-4">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Category Name</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($categories as $category): ?>
                        <tr>
                            <td><?= $category['id']; ?></td>
                            <td><?= esc($category['name']); ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
