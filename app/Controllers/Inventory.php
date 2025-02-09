<?php 

namespace App\Controllers;

class Inventory extends BaseController {

    public function index() 
    {
        return view( 'InventoryList' );
    }

    public function create()
    {
        if ( ! $this->request->is('post') ) {
            return view('Inventory');
        }

        $rules = [
            'item_id'             => 'required',
            'product_name'        => 'required',
            'description'         => 'required',
            'category'            => 'required',
            'sold_qty'            => 'required|integer',
            'remaining_stock'     => 'integer',
            'remaining_threshold' => 'integer'
        ];

        $data = $this->request->getPost(array_keys($rules));

        if ( ! $this->validateData($data, $rules) ) {
            return view ( 'Inventory', [
                ...$data,
                'errors' =>  $this->validator->getErrors()
            ] );
        }

    }
}