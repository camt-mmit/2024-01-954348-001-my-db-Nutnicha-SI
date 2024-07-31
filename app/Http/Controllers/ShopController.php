<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shop;
use Illuminate\View\View;

class ShopController extends Controller
{
    private string $title = 'Shop';

    public function list(): View
    {
        $shops = Shop::orderBy('code')->get();

        return view('shops.list', [
            'title' => "{$this->title} : List",
            'shops' => $shops,
        ]);
    }
    function show(string $shopCode): View {
        $shop = Shop::where('code',$shopCode)->firstOrFail();
        return view('shops.view',[
            'title'=> "($this->title):View",
            'shop' => $shop,
        ]);
    }
}