<?php 

namespace App\Controllers;

class Products extends BaseController {

    public function index()
    {
        return view( 'ProductList' );
    }

    public function show($uid = null)
    {
        echo 'show';
    }

    public function create()
    {
        echo 'create';
    }

    public function update($uid = null)
    {
        echo 'update';
    }

    public function delete($uid = null)
    {
        echo 'delete';
    }
}