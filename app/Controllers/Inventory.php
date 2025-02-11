<?php 

namespace App\Controllers;

class Inventory extends BaseController {

    public function index() 
    {
        //
        $model = new \App\Models\Inventory;
        
        $search = '';
        if ( $q = $this->request->getGet('q') ) {
            $search = $q;
        }

        $inventories = $model
            ->select('inventories.*, products.name as product, categories.name as category')
            ->join('products', 'products.id = inventories.product_id')
            ->join('categories', 'categories.id = inventories.category_id')
            ->paginate(20, 'inventory');

        $data = [
            'search' => $search,
            'inventories' => $inventories,
            'pager' => $model->pager
        ];

        return view( 'InventoryList', $data);
    }

    public function create()
    {
        $model = new \App\Models\Inventory;
        $productModel = new \App\Models\Products;
        $categoryModel = new \App\Models\Category;
        
        $adata = [
            'products' => $productModel->findAll(),
            'categories' => $categoryModel->findAll()
        ];

        if ( ! $this->request->is('post') ) {
            return view( 'Inventory', $adata );
        }

        $rules = [
            'item_id'             => [
                'label' => 'Item ID',
                'rules' => 'required'
            ],
            'product'             => [
                'label' => 'Product',
                'rules' => 'required|integer'
            ],
            'category'            => [
                'label' => 'Category',
                'rules' => 'required|integer'
            ],
            'sold_qty'            => [
                'label' => 'Sold Qty',
                'rules' => 'required|integer'
            ],
            'remaining_stock'     => [
                'label' => 'Remaining Stock',
                'rules' => 'integer'
            ],
            'remaining_threshold' => [
                'label' => 'Remaining Threshold',
                'rules' => 'integer'
            ]
        ];

        $data = $this->request->getPost(array_keys($rules));

        if ( ! $this->validateData($data, $rules) ) {
            return view ( 'Inventory', [
                ...$data,
                ...$adata,
                'errors' =>  $this->validator->getErrors()
            ] );
        }

        $id = $model->insert([
            'item_id' => $this->request->getPost('item_id'),
            'product_id' => $this->request->getPost('product'),
            'category_id' => $this->request->getPost('category'),
            'sold_qty' => $this->request->getPost('sold_qty'),
            'remaining_stock' => $this->request->getPost('remaining_stock'),
            'remaining_threshold' => $this->request->getPost('remaining_threshold'),
        ]);

        return redirect()->to('inventory/update/'.$id);
    }

    public function update($id = null) 
    {
        $model = new \App\Models\Inventory;
        $productModel = new \App\Models\Products;
        $categoryModel = new \App\Models\Category;

        $inventories = $model
            ->select('inventories.*, products.id as prod, categories.id as cat')
            ->join('products', 'products.id = inventories.product_id')
            ->join('categories', 'categories.id = inventories.category_id')
            ->find($id);

        $adata = [
            ...$inventories,
            'products' => $productModel->findAll(),
            'categories' => $categoryModel->findAll()
        ];
        
        if ( ! $this->request->is('post') ) {
            if ($adata) {
                return view( 'Inventory', $adata );
            }

            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        $rules = [
            'item_id'             => [
                'label' => 'Item ID',
                'rules' => 'required'
            ],
            'product'             => [
                'label' => 'Product',
                'rules' => 'required|integer'
            ],
            'category'            => [
                'label' => 'Category',
                'rules' => 'required|integer'
            ],
            'sold_qty'            => [
                'label' => 'Sold Qty',
                'rules' => 'required|integer'
            ],
            'remaining_stock'     => [
                'label' => 'Remaining Stock',
                'rules' => 'integer'
            ],
            'remaining_threshold' => [
                'label' => 'Remaining Threshold',
                'rules' => 'integer'
            ]
        ];

        $data = $this->request->getPost(array_keys($rules));

        if ( ! $this->validateData($data, $rules) ) {
            return view ( 'Inventory', [
                ...$data,
                ...$adata,
                'errors' =>  $this->validator->getErrors()
            ] );
        }
        
        $model->update($id, [
            'item_id' => $this->request->getPost('item_id'),
            'product_id' => $this->request->getPost('product'),
            'category_id' => $this->request->getPost('category'),
            'sold_qty' => $this->request->getPost('sold_qty'),
            'remaining_stock' => $this->request->getPost('remaining_stock'),
            'remaining_threshold' => $this->request->getPost('remaining_threshold'),
        ]);

        return redirect()->to('inventory');
    }

    public function delete($id = null)
    {
        $model = new \App\Models\Inventory;

        if ($model->find($id)) {
            $model->delete($id);
            
            return redirect()->to('inventory');
        }

        throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
    }
}