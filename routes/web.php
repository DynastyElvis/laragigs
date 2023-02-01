<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('listings', [
        'heading' => 'Latest Listings',
        'listings' => [
            [
                'id' => 1,
                'title' => 'Listing one',
                'description' => 'Listing oneListing oneListing oneListing oneListing oneListing oneListing one'
            ],
            [
                'id' => 2,
                'title' => 'Listing two',
                'description' => 'Listing oneListing oneListing oneListing oneListing oneListing oneListing one'
            ]
        ]
    ]);
});


// Route::get('/', function () {
//     return view('listings',

//     [
//         'heading' => 'Latest Listings',
//         'listings' => 
//         [
//             'id' => 1,
//             'title' => 'Listing one',
//             'description' => 'Listing oneListing oneListing oneListing oneListing oneListing oneListing one
//         '
        
//         ],

//         [
//             'id' => 2,
//             'title' => 'Listing two',
//             'description' => 'Listing oneListing oneListing oneListing oneListing oneListing oneListing one
//         '
//         ]
//     ]);

// });

// Route::get('hello', function () {
//     return response('hello world');
// });


// Route::get('posts/{id}', function ($id) {
//     // ddd($id);
//     return response(('Post' . $id));
// })->where('id', '[0-9]+');


// Route::get('/search', function(Request $request) {
//     return($request->name . '' . $request->city);        
// });