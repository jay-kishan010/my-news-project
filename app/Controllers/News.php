<?php



namespace App\Controllers;

use App\Models\NewsModel;
use App\Models\CategoryModel;

class News extends BaseController
{
    public function index()
    {
        $newsModel = new NewsModel();
        $data['news'] = $newsModel->getNews(); // Ensure this method is in the NewsModel.

          // Debugging: Check if data was fetched successfully
          if (empty($data['news'])) {
            echo 'No news found'; // This will help you debug if the model is returning empty data
        }

        return view('news/index', $data);
        // return view('dashboard/index', $data);
    }

    public function create()
    {
        $categoryModel = new CategoryModel();
        $data['categories'] = $categoryModel->findAll();

        return view('news/create', $data);
    }

    public function show($id)
    {
        $newsModel = new NewsModel();
        $newsItem = $newsModel->select('news.*, categories.name as category_name, users.username as author')
                              ->join('categories', 'categories.id = news.category_id')
                              ->join('users', 'users.id = news.user_id')
                              ->where('news.id', $id)
                              ->asObject() // Convert to object
                              ->first();
    
        if (!$newsItem) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("News article not found.");
        }
    
        return view('news/show', ['newsItem' => $newsItem]);
    }
    

    public function store()
    {
        $newsModel = new NewsModel();
        $file = $this->request->getFile('image');

        if ($file && $file->isValid()) {
            $imageName = $file->getRandomName();
            $file->move('uploads/', $imageName);
        } else {
            $imageName = null;
        }

        $newsModel->save([
            'title'       => $this->request->getPost('title'),
            'content'     => $this->request->getPost('content'),
            'image'       => $imageName,
            'category_id' => $this->request->getPost('category'),
            'user_id'     => 1, // Replace with an actual user ID from session or database.
        ]);

        return redirect()->to('/news');
    }
}

