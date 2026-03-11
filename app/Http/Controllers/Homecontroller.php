<?php
namespace App\Http\Controllers;

use App\Models\Distributor;
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
        $groups = Group::select('id', 'name', 'ar_name', 'image', 'slug')
            ->withCount('products')
            ->get()
            ->map(fn (Group $group) => [
                'id'            => $group->id,
                'name'          => $group->name,
                'ar_name'       => $group->ar_name,
                'slug'          => $group->slug,
                'image'         => $group->image ? asset('storage/' . $group->image) : null,
                'product_count' => $group->products_count,
            ]);

        return Inertia::render('welcome', [
            'groups' => $groups,
            'locale' => app()->getLocale(),
        ]);
    }

    /**
     * Products listing page — all groups + optional group filter.
     *
     * Route: GET /{locale}/products
     * Route: GET /{locale}/products/{groupSlug}
     */
    public function products(Request $request, ?string $groupSlug = null): Response
    {
        $groups = Group::select('id', 'name', 'ar_name', 'image', 'slug')
            ->withCount('products')
            ->get()
            ->map(fn (Group $group) => [
                'id'            => $group->id,
                'name'          => $group->name,
                'ar_name'       => $group->ar_name,
                'slug'          => $group->slug,
                'image'         => $group->image ? asset('storage/' . $group->image) : null,
                'product_count' => $group->products_count,
            ]);

        $activeGroup = null;
        $products    = null;

        if ($groupSlug) {
            $group = Group::select('id', 'name', 'ar_name', 'image', 'slug')
                ->withCount('products')
                ->where('slug', $groupSlug)
                ->firstOrFail();

            $activeGroup = [
                'id'            => $group->id,
                'name'          => $group->name,
                'ar_name'       => $group->ar_name,
                'slug'          => $group->slug,
                'image'         => $group->image ? asset('storage/' . $group->image) : null,
                'product_count' => $group->products_count,
            ];

            $products = Product::select('id', 'name', 'ar_name', 'description', 'ar_description', 'link', 'slug')
                ->where('group_id', $group->id)
                ->with([
                    'images'   => fn ($q) => $q->orderBy('sort_order')->orderBy('id'),
                    'variants:id,product_id,code,description,ar_description,link',
                ])
                ->orderBy('name')
                ->get()
                ->map(fn (Product $product) => [
                    'id'             => $product->id,
                    'name'           => $product->name,
                    'ar_name'        => $product->ar_name,
                    'slug'           => $product->slug,
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
            'locale'      => app()->getLocale(),
        ]);
    }

    /**
     * Single product page.
     *
     * Route: GET /{locale}/products/{groupSlug}/{productSlug}
     */
    public function product(string $groupSlug, string $productSlug): Response
    {
        $group = Group::select('id', 'name', 'ar_name', 'image', 'slug')
            ->withCount('products')
            ->where('slug', $groupSlug)
            ->firstOrFail();

        $product = Product::select('id', 'name', 'ar_name', 'description', 'ar_description', 'link', 'slug')
            ->where('group_id', $group->id)
            ->where('slug', $productSlug)
            ->with([
                'images'   => fn ($q) => $q->orderBy('sort_order')->orderBy('id'),
                'variants:id,product_id,code,description,ar_description,link',
            ])
            ->firstOrFail();

        $activeGroup = [
            'id'            => $group->id,
            'name'          => $group->name,
            'ar_name'       => $group->ar_name,
            'slug'          => $group->slug,
            'image'         => $group->image ? asset('storage/' . $group->image) : null,
            'product_count' => $group->products_count,
        ];

        $productData = [
            'id'             => $product->id,
            'name'           => $product->name,
            'ar_name'        => $product->ar_name,
            'slug'           => $product->slug,
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
        ];

        // Also pass all groups for the sidebar
        $groups = Group::select('id', 'name', 'ar_name', 'image', 'slug')
            ->withCount('products')
            ->get()
            ->map(fn (Group $g) => [
                'id'            => $g->id,
                'name'          => $g->name,
                'ar_name'       => $g->ar_name,
                'slug'          => $g->slug,
                'image'         => $g->image ? asset('storage/' . $g->image) : null,
                'product_count' => $g->products_count,
            ]);

        return Inertia::render('Products', [
            'groups'        => $groups,
            'products'      => null,   // listing products loaded lazily client-side or via group route
            'activeGroup'   => $activeGroup,
            'activeProduct' => $productData,
            'locale'        => app()->getLocale(),
        ]);
    }

    public function distributors(): Response
    {
        $distributors = Distributor::with(['phones' => fn ($q) => $q->orderBy('sort')])
            ->select('id', 'name', 'ar_name', 'logo', 'address', 'ar_address', 'latitude', 'longitude', 'google_maps_link')
            ->get()
            ->map(fn ($d) => [
                'id'               => $d->id,
                'name'             => $d->name,
                'ar_name'          => $d->ar_name,
                'logo'             => $d->logo ? asset('storage/' . $d->logo) : null,
                'address'          => $d->address,
                'ar_address'       => $d->ar_address,
                'latitude'         => $d->latitude,
                'longitude'        => $d->longitude,
                'google_maps_link' => $d->google_maps_link,
                'phones'           => $d->phones->map(fn ($p) => [
                    'id'    => $p->id,
                    'phone' => $p->phone,
                    'sort'  => $p->sort,
                ]),
            ]);

        return Inertia::render('Distributors', [
            'distributors' => $distributors,
            'locale'       => app()->getLocale(),
        ]);
    }
}