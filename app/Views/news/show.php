<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($newsItem->title); ?></title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .container {
            max-width: 800px;
            margin-top: 30px;
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }
        .news-img {
            max-width: 100%;
            height: auto;
            border-radius: 5px;
        }
    </style>
</head>
<body>

<div class="container">
    <h1 class="text-center"><?= esc($newsItem->title); ?></h1>
    
    <p class="text-muted text-center">Published by <strong><?= esc($newsItem->author); ?></strong> | Category: <strong><?= esc($newsItem->category_name); ?></strong></p>

    <!-- Show Image -->
    <?php if (!empty($newsItem->image)): ?>
        <img src="<?= base_url('uploads/' . esc($newsItem->image)); ?>" alt="<?= esc($newsItem->title); ?>" class="news-img">
    <?php endif; ?>

    <p class="mt-3"><?= nl2br(esc($newsItem->content)); ?></p>

    <a href="<?= site_url('news'); ?>" class="btn btn-secondary mt-3">Back to News</a>
</div>

</body>
</html>
