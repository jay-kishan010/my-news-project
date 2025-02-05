<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create News</title>
    
    <!-- Bootstrap & FontAwesome -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
    <style>
        .container-wrapper {
            display: flex;
        }
        .sidebar {
            width: 250px;
            min-height: 100vh;
        }
        .content {
            flex-grow: 1;
            padding: 20px;
        }
    </style>
</head>
<body>

<div class="container-wrapper">
    <!-- Sidebar -->
    <?= view('layouts/sidebar'); ?>

    <!-- Main Content -->
    <div class="content">
        <h2 class="text-center mb-4">Create News</h2>

        <form action="<?= site_url('news/store'); ?>" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label>Title</label>
                <input type="text" name="title" class="form-control" required>
            </div>

            <div class="form-group">
                <label>Category</label>
                <select name="category_id" class="form-control">
                    <option value="1">Politics</option>
                    <option value="2">Technology</option>
                    <option value="3">Sports</option>
                </select>
            </div>

            <div class="form-group">
                <label>Content</label>
                <textarea name="content" class="form-control" rows="5" required></textarea>
            </div>

            <div class="form-group">
                <label>Upload Image</label>
                <input type="file" name="image" class="form-control">
            </div>

            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

</body>
</html>
