<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Listing;

Route::get('/', function () {
    return view('listings', [
        'heading' => 'Latest Listings',
        'listings' => Listing::all()
    ]);
});


Route::get('/listing/{id}', function ($id) {
    $listing = Listing::find($id);
    return view('listing', [
        'listing' => $listing
    ]);
});
