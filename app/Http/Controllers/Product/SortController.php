<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class SortController extends Controller
{
    public function index($id=null)
    {

        $query = Category::with(['products']);
        if (!isset($id)){
            return $query->find($id);

        }
        $items=$query->get();
        dd($items);
        return $items;
    }
}
