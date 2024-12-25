<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\FoodsController;

Route::get('/',
    [PagesController::class,
        'index'  
    ]
);

Route::get('/about',
    [PagesController::class,
        'about'  
    ]
);

Route::get('/posts',
    [PostsController::class,
        'index'  
    ]
);

Route::resource('/foods', FoodsController::class);

// Route::resource('/foods', FoodsController::class );
// Route::resource('/foods/index', 
//     [FoodsController::class,
//         'index'
//     ]
// );
// Route::resource('/foods/edit', 
//     [FoodsController::class,
//         'edit'
//     ]
// );
Route::get('/foods/create',
    [FoodsController::class,
        'create'  
    ]
);

// Route::get('/products' , [
//     ProductsController::class,
//     'index'
// ]);

// Route::get('/products/{productName}/{id}' , [
//     ProductsController::class,
//     'detail'
// ])->where([
//     'productName' => '[a-Za-z0-9]',
//     'id' => '[0-9]+',
// ]);

// Route::get('/products/{productName}' , [
//     ProductsController::class,
//     'detail'
// ]);

