<?php

namespace App\Http\Controllers;

use App\Http\Controller\Frontend;
use Illuminate\Http\Request;
use App\Models\Products;
use App\Repositories\SettingsRepositories;

class HomeController extends Frontend
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (!is_contractor())
            $product_list = Products::where('status', Products::ACTIVE)->thisMonthBestBuy()->onlyContractor(false)->take(6)->orderBy('created_at', 'desc')->get();
        else
            $product_list = Products::where('status', Products::ACTIVE)->thisMonthBestBuy()->take(6)->orderBy('created_at', 'desc')->get();
        return view('frontend.pages.home', compact('product_list'));
    }
}
