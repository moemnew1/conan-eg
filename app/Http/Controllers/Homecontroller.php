<?php
namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\Product;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class HomeController extends Controller
{
    /**
     * Home page — all groups.
     */
    public function index(): Response
    {
        $groups = Group::select('id', 'name', 'ar_name', 'image')
            ->withCount('products')
            ->get()
            ->map(fn (Group $group) => [
                'id'            => $group->id,
                'name'          => $group->name,
                'ar_name'       => $group->ar_name,
                'image'         => $group->image ? asset('storage/' . $group->image) : null,
                'product_count' => $group->products_count,
            ]);

        return Inertia::render('welcome', [
            'groups' => $groups,
            'locale' => app()->getLocale(), // ← added
        ]);
    }

    /**
     * Products page — all groups in sidebar + optional filtered products.
     *
     * Route: GET /products?group={id}
     */
    public function products(Request $request): Response
    {
        // ── All groups (for sidebar / category list) ──────────────────────────
        $groups = Group::select('id', 'name', 'ar_name', 'image')
            ->withCount('products')
            ->get()
            ->map(fn (Group $group) => [
                'id'            => $group->id,
                'name'          => $group->name,
                'ar_name'       => $group->ar_name,
                'image'         => $group->image ? asset('storage/' . $group->image) : null,
                'product_count' => $group->products_count,
            ]);

        // ── Active group + its products ───────────────────────────────────────
        $activeGroup = null;
        $products    = null;

        if ($request->filled('group')) {
            $group = Group::select('id', 'name', 'ar_name', 'image')
                ->withCount('products')
                ->findOrFail($request->integer('group'));

            $activeGroup = [
                'id'            => $group->id,
                'name'          => $group->name,
                'ar_name'       => $group->ar_name,
                'image'         => $group->image ? asset('storage/' . $group->image) : null,
                'product_count' => $group->products_count,
            ];

            // Eager-load images (sorted) and variants
            $products = Product::select('id', 'name', 'ar_name', 'description', 'ar_description', 'link')
                ->where('group_id', $group->id)
                ->with([
                    'images' => fn ($q) => $q->orderBy('sort_order')->orderBy('id'),
                    'variants:id,product_id,code,description,ar_description,link',
                ])
                ->orderBy('name')
                ->get()
                ->map(fn (Product $product) => [
                    'id'             => $product->id,
                    'name'           => $product->name,
                    'ar_name'        => $product->ar_name,
                    'description'    => $product->description,
                    'ar_description' => $product->ar_description,
                    'link'           => $product->link,
                    'image'          => $product->images->first()
                        ? asset('storage/' . $product->images->first()->image)
                        : null,
                    'images'         => $product->images
                        ->map(fn ($img) => asset('storage/' . $img->image))
                        ->values(),
                    'variants'       => $product->variants
                        ->map(fn ($v) => [
                            'id'             => $v->id,
                            'code'           => $v->code,
                            'description'    => $v->description,
                            'ar_description' => $v->ar_description,
                            'link'           => $v->link,
                        ])
                        ->values(),
                ]);
        }

        return Inertia::render('Products', [
            'groups'      => $groups,
            'products'    => $products,
            'activeGroup' => $activeGroup,
            'locale'      => app()->getLocale(), // ← added
        ]);
    }
}