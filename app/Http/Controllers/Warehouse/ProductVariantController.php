<?php

namespace App\Http\Controllers\Warehouse;

use App\Http\Controllers\Controller;
use App\Models\Warehouse\ProductVariant;
use Illuminate\Http\Request;

class ProductVariantController extends Controller
{
    public function index()
    {
        return view('warehouse.product_variant.index');
    }

    public function show(string $slug)
    {

        $productVariant = ProductVariant::where('slug', $slug)->with('stockItems')->first();
                
        return view('warehouse.product_variant.show', [
            'productVariant' => $productVariant,
        ]);
    }

}