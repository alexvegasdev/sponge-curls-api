<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\CurlType;
use Illuminate\Http\Request;

class CurlTypeController extends Controller
{
    function index()
    {
        $curlyTypes = CurlType::all();
        return response()->json($curlyTypes, 200);
    }

    function show(CurlType $curlType)
    {
        $curlType = CurlType::findOrFail($curlType->id);
        return response()->json($curlType, 200);
    }

    function store(Request $request)
    {
        $request->validate(
            ['name' => 'required|string|unique:curl_types,name'],
            ['description' => 'nullable|string']
        );

        $curlType = CurlType::create([
            'name' => $request->name,
            'description' => $request->description
        ]);

        return response()->json($curlType, 201);
    }

    function update(Request $request, CurlType $curlType)
    {
        $request->validate(
            ['name' => 'required|string|unique:curl_types,name,' . $curlType->id],
            ['description' => 'nullable|string']
        );

        $curlType->update([
            'name' => $request->name,
            'description' => $request->description
        ]);

        return response()->json($curlType, 200);
    }

    function destroy(CurlType $curlType)
    {
        $curlType = CurlType::findOrFail($curlType->id);
            $curlType->delete();
            return response()->json(["success"=>"Deleted curl type"], 200);
    }
}
