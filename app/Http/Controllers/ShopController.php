<?php

namespace App\Http\Controllers;

use App\Http\Requests\ShopRequest;
use App\Shop;

class ShopController extends Controller
{
    public function index()
    {
        $shops = Shop::latest()->get();

        return response(['data' => $shops ], 200);
    }

    public function store(ShopRequest $request)
    {
        $shop = Shop::create($request->all());

        return response(['data' => $shop ], 201);

    }

    public function show($id)
    {
        $shop = Shop::findOrFail($id);

        return response(['data', $shop ], 200);
    }

    public function update(ShopRequest $request, $id)
    {
        $shop = Shop::findOrFail($id);
        $shop->update($request->all());

        return response(['data' => $shop ], 200);
    }

    public function destroy($id)
    {
        Shop::destroy($id);

        return response(['data' => null ], 204);
    }
}
