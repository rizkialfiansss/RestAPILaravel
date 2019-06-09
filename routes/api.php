<?php

use App\Item; //membuat model class item di namespace app
use Illuminate\Http\Request;

Route::get('items', function (){
    return Item::paginate(5); //dibagi setiap 5 potongan dan bisa dibuat all 
});

Route::get('items/{item}', function ($id){
    return Item::find($id);
});
//bisa yg di atas atau yg di bawah kalau ingin mencari berdasarkan id
// Route::get('items/{item}', function (Item $item){
//     return $item;
// });

Route::post('items', function (Item $item){
    return Item::create(request()->all());
});

Route::delete('items/{item}', function (Item $item){
    $item->delete();
    return  'Success';
});

//ini untuk berubah directory