<?php

namespace App\Http\Controllers;

use App\Http\Requests\BranchRequest;
use App\Branch;

class BranchController extends Controller
{
    public function index()
    {
        $branches = Branch::latest()->get();

        return response(['data' => $branches ], 200);
    }

    public function store(BranchRequest $request)
    {
        $branch = Branch::create($request->all());

        return response(['data' => $branch ], 201);

    }

    public function show($id)
    {
        $branch = Branch::findOrFail($id);

        return response(['data', $branch ], 200);
    }

    public function update(BranchRequest $request, $id)
    {
        $branch = Branch::findOrFail($id);
        $branch->update($request->all());

        return response(['data' => $branch ], 200);
    }

    public function destroy($id)
    {
        Branch::destroy($id);

        return response(['data' => null ], 204);
    }
}
