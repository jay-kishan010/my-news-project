<?php

namespace App\Controllers;

use App\Models\CategoryModel;

class Category extends BaseController
{
    public function index()
    {
        $categoryModel = new CategoryModel();
        $data['categories'] = $categoryModel->findAll();

        return view('category/index', $data);
    }

    public function create()
    {
        return view('category/create');
    }

    public function store()
    {
        $categoryModel = new CategoryModel();

        $categoryModel->save([
            'name' => $this->request->getPost('name'),
        ]);

        return redirect()->to('/categories');
    }
}
