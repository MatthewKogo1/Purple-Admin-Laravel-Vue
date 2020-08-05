<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductsRequest;
use App\Products;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Products::latest()->get();

        return response(['data' => $products ], 200);
    }

    public function store(ProductsRequest $request)
    {
        $products = Products::create($request->all());

        return response(['data' => $products ], 201);

    }

    public function show($id)
    {
        $products = Products::findOrFail($id);

        return response(['data', $products ], 200);
    }

    public function update(ProductsRequest $request, $id)
    {
        $products = Products::findOrFail($id);
        $products->update($request->all());

        return response(['data' => $products ], 200);
    }

    public function destroy($id)
    {
        Products::destroy($id);

        return response(['data' => null ], 204);
    }
}
