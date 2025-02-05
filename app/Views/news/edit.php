<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit News</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .sidebar {
            background-color: #f8f9fa;
            padding: 20px;
            border-right: 1px solid #ddd;
        }
        .content {
            margin-left: 250px;
        }
    </style>
</head>
<body>

<div class="d-flex">
    <!-- Sidebar -->
    <div class="col-md-3 col-lg-3 sidebar">
        <?= view('layouts/sidebar'); ?>
    </div>

    <!-- Content -->
    <div class="container content mt-5">
        <h2>Edit News</h2>

        <form action="<?= site_url('news/update/' . $newsItem['id']); ?>" method="post" enctype="multipart/form-data">
            <input type="hidden" name="old_image" value="<?= esc($newsItem['image']); ?>">

            <label>Title</label>
            <input type="text" name="title" value="<?= esc($newsItem['title']); ?>" required class="form-control"><br>

            <label>Content</label>
            <textarea name="content" required class="form-control"><?= esc($newsItem['content']); ?></textarea><br>

            <label>Category</label>
            <select name="category" required class="form-control">
                <?php foreach ($categories as $category): ?>
                    <option value="<?= $category['id']; ?>" <?= $newsItem['category_id'] == $category['id'] ? 'selected' : ''; ?>>
                        <?= esc($category['name']); ?>
                    </option>
                <?php endforeach; ?>
            </select><br>

            <label>Image</label>
            <input type="file" name="image" class="form-control"><br>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>

    </div>
</div>

</body>
</html>
