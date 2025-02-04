<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News List</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .news-item {
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 30px;
            background-color: #f9f9f9;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        .news-item img {
            border-radius: 8px;
            max-height: 200px;
            object-fit: cover;
        }
        .news-item h2 {
            font-size: 1.8rem;
            font-weight: 700;
            margin-bottom: 15px;
        }
        .news-item p {
            font-size: 1rem;
            line-height: 1.6;
        }
        .news-item .btn {
            margin-top: 10px;
        }
    </style>
</head>
<body>

<div class="container mt-5">
    <h1 class="text-center mb-4">Latest News Articles</h1>
    
    <!-- Check if there are news articles -->
    <?php if (!empty($news) && is_array($news)): ?>
    <div class="row">
        <?php foreach ($news as $newsItem): ?>
            <div class="col-md-4">
                <div class="news-item">
                    <!-- Display image if available -->
                    <?php if ($newsItem->image): ?>
                        <img src="<?= base_url('uploads/' . esc($newsItem->image)); ?>" alt="<?= esc($newsItem->title); ?>" class="img-fluid">
                    <?php endif; ?>
                    
                    <h2><?= esc($newsItem->title); ?></h2>
                    
                    <!-- Display category and author -->
                    <p><strong>Category:</strong> <?= esc($newsItem->category_name); ?></p>
                    <p><strong>Author:</strong> <?= esc($newsItem->author); ?></p>
                    
                    <!-- Shortened content preview -->
                    <p><?= esc(strlen($newsItem->content) > 100 ? substr($newsItem->content, 0, 100) . '...' : $newsItem->content); ?></p>
                    
                    <!-- Link to full article -->
                    <a href="<?= site_url('news/show/' . $newsItem->id); ?>" class="btn btn-primary btn-sm">Read More</a>

                    <a href="<?= site_url('news/show/' . $newsItem->id); ?>" class="btn btn-primary btn-block">Read More</a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
<?php else: ?>
    <p class="text-center">No news articles available.</p>
<?php endif; ?>

</div>


</body>
</html>
