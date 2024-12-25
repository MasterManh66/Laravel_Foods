<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index() {
        $title = 'Laravel of Tran Tien Manh';
        // return view('products.index', compact('title'));
        // $name = 'Manh';
        // return view('products.index')->with('name', $name);
        $myphone = [
            'name' => 'iphone 15',
            'year' => 2022,
            'price' => '1.2k USD',
            'isFavorited' => true,
        ];
        // return view('products.index', compact('myphone'));
        // return view('products.index', [
        //     'myphone' => $myphone
        // ]);
        return view('products.index');
    }
    public function about() {
        return 'This is About page';
    }

    public function detail($productName, $id) {
        return 'productName = ' . $productName.
                ' ,id = ' . $id;
        // $phone = [
        //     'iphone 15' => 'iphone 15',
        //     'samsung' => 'samsung'

        // ];
        // return view('products.index', [
        //     'product' => $phone[$productName] ?? 'Unknown',
        //     ]);
    }
}
