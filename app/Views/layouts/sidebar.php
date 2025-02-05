<div class="sidebar">
    <h4 class="text-white text-center py-3"><i class="fa-solid fa-gauge"></i> Admin Panel</h4>
    <ul class="nav flex-column">
        <li class="nav-item">
            <a href="<?= site_url('dashboard'); ?>" class="nav-link">
                <i class="fa-solid fa-house"></i> Dashboard
            </a>
        </li>
        <li class="nav-item">
            <a href="<?= site_url('news'); ?>" class="nav-link">
                <i class="fa-solid fa-newspaper"></i> Manage News
            </a>
        </li>
        <li class="nav-item">
            <a href="<?= site_url('categories'); ?>" class="nav-link">
                <i class="fa-solid fa-layer-group"></i> Manage Categories
            </a>
        </li>
        <li class="nav-item">
            <a href="<?= site_url('users'); ?>" class="nav-link">
                <i class="fa-solid fa-users"></i> Manage Users
            </a>
        </li>
    </ul>
</div>

<style>
.sidebar {
    background-color: #343a40;
    min-height: 100vh;
    padding: 20px;
}

.sidebar h4 {
    font-size: 18px;
    font-weight: bold;
}

.sidebar a {
    padding: 12px;
    display: flex;
    align-items: center;
    color: #adb5bd;
    text-decoration: none;
    transition: 0.3s;
    font-size: 15px;
}

.sidebar a i {
    width: 25px; /* Ensures icons are aligned */
    font-size: 16px;
    margin-right: 10px;
}

.sidebar a:hover {
    background-color: rgba(255, 255, 255, 0.1);
    color: white;
    border-radius: 5px;
}
</style>
