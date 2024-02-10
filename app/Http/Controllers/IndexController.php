<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    protected  $ClassName = 'App\Models\Product';
    protected  $ListSordBy = 'heading';
    // public function index() {
    //     //Get data from DB in here and pass it to the view
    //     return view('app');
    // }


    public function index() {
        $productActiveList = $this->ClassName::productActiveList();
        // dd($productActiveList);
        if($productActiveList->Status) {
            // dd($productActiveList->Status);
            return View('app')->with(['productActiveList'=> $productActiveList->Data]);
        }
    }
}
