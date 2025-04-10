<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();

        return response()->json($products, 200);
    }

    private function validateRequest(Request $request) {
        $request->validate([
            'bleachingCode' => 'required',
            'defaultLanguage' => 'required',
            'dryCleaningCode' => 'required',
            'dryingCode' => 'required',
            'fasteningTypeCode' => 'required',
            'ironingCode' => 'required',
            'productID' => 'required',
            'pulloutTypeCode' => 'required',
            'sapPacket' => 'required',
            'updateImages' => 'required',
            'waistlineCode' => 'required',
            'washabilityCode' => 'required'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validateRequest($request);

        $product = Product::create($request->all());

        return response()->json([
            'query' => 'Successfully created product with ID '.$product->id.'.',
            'product' => $product
            ], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::find($id);

        return response()->json([
                'query' => 'Successfully found product with ID '.$product->id.'.',
                'product' => $product
            ], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validateRequest($request);

        $product = Product::find($id);
        $product->update($request->all());

        return response()->json([
                'query' => 'Successfully updated product with ID '.$product->id.'.',
                'product' => $product
            ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::find($id);
        $product->delete();

        return response()->json([
                'query' => 'Successfully deleted product with ID '.$product->id.'.'
            ], 200);
    }
}
