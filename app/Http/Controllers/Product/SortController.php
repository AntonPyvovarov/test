<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class SortController extends Controller
{
    public function sort ($id)
    {
        $query = Category::find($id)->products->toArray();
        if (!isset($id)){
            return $query->find($id);
        }
        $items=$query->get();
        dd($items);
        return $items;
    }

    public function index()
    {
        $query = Category::with(['products']);

        $items=$query->get();
        dd($items);
        return $items;
    }

}
