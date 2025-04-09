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
        $product = Product::all();
        return view('product.index', compact('product'));
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

        Product::create($request->all());

        return redirect()->route('product.index')
            ->with('success','Product created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::find($id);
        return view('product.show', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validateRequest($request);

        $product = Product::find($id);
        $product->update($request->all());
        return redirect()->route('product.index')
            ->with('success', 'Product updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('product.index')
            ->with('success', 'Product deleted successfully');
    }
}
