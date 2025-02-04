<?php
namespace App\Models;

use CodeIgniter\Model;

class CommentModel extends Model
{
    protected $table      = 'comments';
    protected $primaryKey = 'id';
    protected $allowedFields = ['news_id', 'user_id', 'content'];
    protected $useTimestamps = true;

    // Get comments for a specific news article
    public function getComments($newsId)
    {
        return $this->where('news_id', $newsId)
                    ->join('users', 'users.id = comments.user_id')
                    ->select('comments.*, users.username as author')
                    ->findAll();
    }

    // Save a new comment
    public function saveComment($data)
    {
        return $this->save($data);
    }
}
