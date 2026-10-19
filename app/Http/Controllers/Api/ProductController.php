<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Http\Resources\ProductResource;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $query = Product::with('category');

        if ($request->filled('search')) {
            $search = $request->input('search');

            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                    ->orWhere('description', 'like', "%{$search}%");
            });
        }

        if ($request->filled('category_id')) {
            $query->where('category_id', $request->input('category_id'));
        }

        if ($request->filled('min_price')) {
            $query->where('price', '>=', $request->input('min_price'));
        }

        if ($request->filled('max_price')) {
            $query->where('price', '<=', $request->input('max_price'));
        }

        $products = $query->orderBy('product_id')->paginate(10);

        return ProductResource::collection($products);
    }

    public function store(StoreProductRequest $request)
    {
        $validated = $request->validated();

        $validated['slug'] = $validated['slug'] ?? Str::slug($validated['name']);

        if (empty($validated['slug'])) {
            $validated['slug'] = 'produk-' . uniqid();
        }

        if (Product::where('slug', $validated['slug'])->exists()) {
            return response()->json([
                'message' => 'Slug sudah digunakan. Masukkan slug yang berbeda.',
            ], 422);
        }

        if ($request->hasFile('img')) {
            $validated['img'] = $request->file('img')->store('products', 'public');
        }

        $product = Product::create($validated);

        return (new ProductResource($product->load('category')))
            ->response()
            ->setStatusCode(201);
    }

    public function show(string $product)
    {
        $product = Product::with('category')->findOrFail($product);

        return new ProductResource($product);
    }

    public function update(UpdateProductRequest $request, string $product)
    {
        $product = Product::findOrFail($product);

        $validated = $request->validated();

        if (isset($validated['name']) && !isset($validated['slug'])) {
            $validated['slug'] = Str::slug($validated['name']);
        }

        if (isset($validated['slug']) && $validated['slug'] === '') {
            $validated['slug'] = 'produk-' . uniqid();
        }

        if (
            isset($validated['slug']) &&
            Product::where('slug', $validated['slug'])
                ->where('product_id', '!=', $product->product_id)
                ->exists()
        ) {
            return response()->json([
                'message' => 'Slug sudah digunakan. Masukkan nama atau slug yang berbeda.',
            ], 422);
        }

        if ($request->hasFile('img')) {
            $newImage = $request->file('img')->store('products', 'public');

            if ($product->img && Storage::disk('public')->exists($product->img)) {
                Storage::disk('public')->delete($product->img);
            }

            $validated['img'] = $newImage;
        } elseif (array_key_exists('img', $validated) && $validated['img'] === null) {
            if ($product->img && Storage::disk('public')->exists($product->img)) {
                Storage::disk('public')->delete($product->img);
            }

            $validated['img'] = null;
        }

        $product->update($validated);

        return new ProductResource($product->load('category'));
    }

    public function destroy(string $product)
    {
        $product = Product::findOrFail($product);

        if ($product->img && Storage::disk('public')->exists($product->img)) {
            Storage::disk('public')->delete($product->img);
        }

        $product->delete();

        return response()->json([
            'message' => 'Produk berhasil dihapus.',
        ]);
    }
}
