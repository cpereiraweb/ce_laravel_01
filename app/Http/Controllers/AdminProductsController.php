<?php
/**
 * Created by PhpStorm.
 * User: Claudio
 * Date: 25/06/2015
 * Time: 11:40
 */

namespace CodeCommerce\Http\Controllers;

use CodeCommerce\Product;


class AdminProductsController extends Controller {

    private $products;

    public function __construct(Product $product)
    {
        $this->products = $product;
    }

    public function index()
    {
        $products = $this->products->all();

        return view('admin.products', compact('products'));
    }
}