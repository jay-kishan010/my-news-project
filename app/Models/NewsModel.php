<?php

namespace App\Models;

use CodeIgniter\Model;

class NewsModel extends Model
{
    protected $table      = 'news';
    protected $primaryKey = 'id';

    protected $allowedFields = ['title', 'content', 'image', 'category_id', 'user_id'];

    protected $useTimestamps = true;

    public function getNews()
{
    $query = $this->select('news.*, categories.name as category_name, users.username as author')
        ->join('categories', 'categories.id = news.category_id')
        ->join('users', 'users.id = news.user_id')
        ->get();

   
    return $query->getResult();
}

    
    
}
