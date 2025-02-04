<h1>Categories</h1>
<a href="/categories/create">Add Category</a>
<table border="1" cellpadding="5">
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
                <td><?= $category['name']; ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
