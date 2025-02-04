<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create News</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .container {
            max-width: 600px;
            margin-top: 50px;
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }
        .preview-img {
            max-width: 100%;
            height: auto;
            margin-top: 10px;
            display: none;
            border-radius: 5px;
        }
    </style>
</head>
<body>

<div class="container">
    <h2 class="text-center mb-4">Create News Article</h2>

    <form action="<?= site_url('news/store'); ?>" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label><strong>Title</strong></label>
            <input type="text" name="title" class="form-control" placeholder="Enter news title" required>
        </div>

        <div class="form-group">
            <label><strong>Content</strong></label>
            <textarea name="content" class="form-control" rows="5" placeholder="Write your news content here..." required></textarea>
        </div>

        <div class="form-group">
            <label><strong>Image</strong></label>
            <input type="file" name="image" class="form-control-file" id="imageUpload">
            <img id="preview" class="preview-img" />
        </div>

        <div class="form-group">
            <label><strong>Category</strong></label>
            <select name="category" class="form-control" required>
                <option value="">Select Category</option>
                <?php foreach ($categories as $category): ?>
                    <option value="<?= esc($category['id']); ?>"><?= esc($category['name']); ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <button type="submit" class="btn btn-primary btn-block">Publish News</button>
    </form>
</div>

<script>
    document.getElementById('imageUpload').addEventListener('change', function(event) {
        const reader = new FileReader();
        reader.onload = function() {
            const preview = document.getElementById('preview');
            preview.src = reader.result;
            preview.style.display = 'block';
        };
        reader.readAsDataURL(event.target.files[0]);
    });
</script>

</body>
</html>
