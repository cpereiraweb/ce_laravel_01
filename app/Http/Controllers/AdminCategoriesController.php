<?php
/**
 * Created by PhpStorm.
 * User: Claudio
 * Date: 25/06/2015
 * Time: 11:40
 */

namespace CodeCommerce\Http\Controllers;

use CodeCommerce\Category;


class AdminCategoriesController extends Controller {

    private $categories;

    public function __construct(Category $category)
    {
        $this->categories = $category;
    }

    public function index()
    {
        $categories = $this->categories->all();

        return view('admin.categories', compact('categories'));
    }
}