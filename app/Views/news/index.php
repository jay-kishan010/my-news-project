<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News List</title>
    
    <!-- Bootstrap 5 & FontAwesome -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <style>
        body {
            background-color: #f8f9fa;
        }

        .container-fluid {
            min-height: 100vh;
            display: flex;
        }

        .main-content {
            padding: 20px;
            background-color: white;
            flex-grow: 1;
        }

        .news-card {
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
        }

        .news-card:hover {
            transform: translateY(-3px);
        }

        .news-image {
            width: 120px;
            height: 80px;
            object-fit: cover;
            border-radius: 5px;
            margin-right: 15px;
        }

        .news-content {
            flex-grow: 1;
        }

        .action-icons a {
            margin-right: 10px;
            font-size: 18px;
        }
    </style>
</head>
<body>

<div class="container-fluid">
    <div class="row w-100">

        <!-- Sidebar -->
        <div class="col-md-3 col-lg-3 sidebar">
            <?= view('layouts/sidebar'); ?>
        </div>

        <!-- Main Content -->
        <div class="col-md-9 col-lg-9 main-content">
            
            <!-- Top Section: Latest News, Search, and Create Button -->
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h4 class="text-primary"><i class="fa-solid fa-newspaper"></i> Latest News</h4>
                
                <!-- Search Input -->
                <input class="form-control w-50" id="searchInput" type="text" placeholder="Search news...">

                <!-- Create Button -->
                <a href="<?= site_url('news/create'); ?>" class="btn btn-success">
                    <i class="fa-solid fa-plus"></i> Create News
                </a>
            </div>

            <!-- News List -->
            <div class="row" id="newsList">
                <?php if (!empty($news) && is_array($news)): ?>
                    <?php foreach ($news as $newsItem): ?>
                        <div class="col-12 mb-3 news-item">
                            <div class="card news-card p-3 d-flex flex-row align-items-center">
                                <?php if ($newsItem->image): ?>
                                    <img src="<?= base_url('uploads/' . esc($newsItem->image)); ?>" alt="<?= esc($newsItem->title); ?>" class="news-image">
                                <?php endif; ?>
                                
                                <div class="news-content">
                                    <h6 class="m-0"><?= esc($newsItem->title); ?></h6>
                                    <small class="text-muted"><?= esc($newsItem->category_name); ?> | By <?= esc($newsItem->author); ?></small>
                                    <p class="m-0"><?= esc(strlen($newsItem->content) > 80 ? substr($newsItem->content, 0, 80) . '...' : $newsItem->content); ?></p>
                                </div>

                                <!-- Action Icons -->
                                <div class="ms-auto action-icons">
                                    <a href="<?= site_url('news/show/' . $newsItem->id); ?>" class="text-primary">
                                        <i class="fa-solid fa-eye"></i>
                                    </a>
                                    <a href="<?= site_url('news/edit/' . $newsItem->id); ?>" class="text-warning">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </a>
                                    <a href="<?= site_url('news/delete/' . $newsItem->id); ?>" class="text-danger" onclick="return confirm('Are you sure you want to delete this news?');">
                                        <i class="fa-solid fa-trash"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p class="text-center text-muted">No news articles available.</p>
                <?php endif; ?>
            </div>

        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- Search Feature -->
<script>
    $(document).ready(function () {
        $("#searchInput").on("keyup", function () {
            var value = $(this).val().toLowerCase();
            $(".news-item").filter(function () {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
</script>

</body>
</html>
