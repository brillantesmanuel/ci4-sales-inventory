<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Products extends BaseController
{
    public function index()
    {
        //
        $model = new \App\Models\Products;
        
        $search = '';
        if ( $q = $this->request->getGet('q') ) {
            $search = $q;
        }

        $data = [
            'search' => $search,
            'products' => $model->like('name', $search)->paginate(20, 'product'),
            'pager' => $model->pager
        ];

        return view( 'ProductList', $data);
    }

    public function create()
    {
        $model = new \App\Models\Products;

        if ( ! $this->request->is('post') ) {
            return view( 'Product' );
        }

        $rules = [
            'name' => [
                'label' => 'Product',
                'rules' => 'required'
            ],
            'description' => [
                'label' => 'Description',
                'rules' => 'alpha_numeric_space'
            ]
        ];

        $data = $this->request->getPost(array_keys($rules));

        if ( ! $this->validateData($data, $rules) ) {
            return view ( 'Product', [
                ...$data,
                'errors' =>  $this->validator->getErrors()
            ] );
        }

        $id = $model->insert([
            'name' => $this->request->getPost('name'),
            'description' => $this->request->getPost('description')
        ]);

        return redirect()->to('products/update/'.$id);
    }

    public function update($id = null)
    {
        $model = new \App\Models\Products;

        $data = $model->find($id);
        
        if ( ! $this->request->is('post') ) {
            if ($data) {
                return view( 'Product', $data );
            }

            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        $rules = [
            'name' => [
                'label' => 'Product',
                'rules' => 'required'
            ],
            'description' => [
                'label' => 'Description',
                'rules' => 'alpha_numeric_space'
            ]
        ];

        $data = $this->request->getPost(array_keys($rules));

        if ( ! $this->validateData($data, $rules) ) {
            return view ( 'Product', [
                ...$data,
                'errors' =>  $this->validator->getErrors()
            ] );
        }

        $model->update($id, [
            'name' => $this->request->getPost('name'),
            'description' => $this->request->getPost('description')
        ]);
        
        return redirect()->to('products');
    }

    public function delete($id = null)
    {
        $model = new \App\Models\Products;

        if ($model->find($id)) {
            $model->delete($id);
            
            return redirect()->to('products');
        }
    }
}
