<?php 

namespace App\Controllers;

class Sales extends BaseController {

    public function index() 
    {
        return view( 'SalesList' );
    }

    public function show($uid = null)
    {
        echo 'test';
    }

    public function create()
    {
        if ( ! $this->request->is('post') ) {
            return view( 'Sales' );
        }

        $rules = [
            'sales_invoice_number' => [
                'label' => 'SI #',
                'rules' => 'required',
            ],
            'client_name' => [
                'label' => 'Client/Company Name',
                'rules' => 'required',
            ],
            'address' => [
                'label' => 'Address',
                'rules' => 'alpha_numeric_punct',
            ],
            'description' => 'alpha_numeric_space',
            'tin_number' => 'alpha_numeric',
            'email'    => 'required|max_length[254]|valid_email',
            'order_id' => 'alpha_numeric_punct',
            'date_order' => 'valid_date',
            'fund_transfer' => 'alpha_numeric',
            'qty' => 'integer',
            'unit' => 'integer',
            'articles' => 'alpha_numeric_space',
            'unit_price' => 'decimal',
            'amount' => 'integer',
            'total_sales' => 'decimal',
            'platform' => 'alpha_numeric_space'
        ];

        $data = $this->request->getPost(array_keys($rules));

        if ( ! $this->validateData($data, $rules) ) {
            return view ( 'Sales', [
                ...$data,
                'errors' =>  $this->validator->getErrors()
            ] );
        }
    }

    public function update($uid = null)
    {
        if ( ! $this->request->is('post') ) {
            return view( 'Sales' );
        }

        $rules = [
            'sales_invoice_number' => [
                'label' => 'SI #',
                'rules' => 'required',
            ],
            'client_name' => [
                'label' => 'Client/Company Name',
                'rules' => 'required',
            ],
            'address' => [
                'label' => 'Address',
                'rules' => 'alpha_numeric_punct',
            ],
            'description' => 'alpha_numeric_space',
            'tin_number' => 'alpha_numeric',
            'email'    => 'required|max_length[254]|valid_email',
            'order_id' => 'alpha_numeric_punct',
            'date_order' => 'valid_date',
            'fund_transfer' => 'alpha_numeric',
            'qty' => 'integer',
            'unit' => 'integer',
            'articles' => 'alpha_numeric_space',
            'unit_price' => 'decimal',
            'amount' => 'integer',
            'total_sales' => 'decimal',
            'platform' => 'alpha_numeric_space'
        ];

        $data = $this->request->getPost(array_keys($rules));

        if ( ! $this->validateData($data, $rules) ) {
            return view ( 'Sales', [
                ...$data,
                'errors' =>  $this->validator->getErrors()
            ] );
        }
    }
}