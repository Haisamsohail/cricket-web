<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    protected  $ClassName = 'App\Models\Product';
    protected  $ListSordBy = 'heading';

    public function index() {
        return view('product');
    }

    public function productActiveList() {
        Session::forget('failRecord');
        $response = $this->ClassName::productActiveList();
        // dd($response->Status);
        if($response->Status) {
            return View('productSetup')->with(['response'=> $response->Data, 'updatedMode' => $this->updatedMode]);
        }
    }

    public function byid($id) {
        $response = $this->ClassName::productSearchbyId($id);
        if($response->Status) {
            // dd($response);
            return View('product')->with(['responseData' => $response->Data]);
        }
    }
}
