<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Category extends BaseController
{
    public function index()
    {
        //
        $model = new \App\Models\Category;
        
        $data = [
            'categories' => $model->paginate(20, 'category'),
            'pager' => $model->pager
        ];

        return view( 'CategoryList', $data);
    }

    public function create()
    {
        $model = new \App\Models\Category;

        if ( ! $this->request->is('post') ) {
            return view( 'Category' );
        }

        $rules = [
            'name' => [
                'label' => 'Category',
                'rules' => 'required'
            ],
            'description' => [
                'label' => 'Description',
                'rules' => 'alpha_numeric_space'
            ]
        ];

        $data = $this->request->getPost(array_keys($rules));

        if ( ! $this->validateData($data, $rules) ) {
            return view ( 'Category', [
                ...$data,
                'errors' =>  $this->validator->getErrors()
            ] );
        }

        $id = $model->insert([
            'name' => $this->request->getPost('name'),
            'description' => $this->request->getPost('description')
        ]);

        return redirect()->to('category/update/'.$id);
    }

    public function update($id = null)
    {
        $model = new \App\Models\Category;

        $data = $model->find($id);
        
        if ( ! $this->request->is('post') ) {
            if ($data) {
                return view( 'Category', $data );
            }

            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        $rules = [
            'name' => [
                'label' => 'Category',
                'rules' => 'required'
            ],
            'description' => [
                'label' => 'Description',
                'rules' => 'alpha_numeric_space'
            ]
        ];

        $data = $this->request->getPost(array_keys($rules));

        if ( ! $this->validateData($data, $rules) ) {
            return view ( 'Category', [
                ...$data,
                'errors' =>  $this->validator->getErrors()
            ] );
        }
        
        return redirect()->to('category');
    }
}
