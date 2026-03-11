<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\Product;
use Illuminate\Http\Response;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

class SitemapController extends Controller
{
    public function index(): Response
    {
        $baseUrl  = config('app.url');
        $sitemap  = Sitemap::create();
        $locales  = ['en', 'ar'];

        // ── Static pages ─────────────────────────────────────────────────────
        $staticPages = ['', '/about', '/contact', '/distributors', '/warranty'];

        foreach ($locales as $locale) {
            foreach ($staticPages as $page) {
                $sitemap->add(
                    Url::create("{$baseUrl}/{$locale}{$page}")
                        ->setPriority($page === '' ? 1.0 : 0.8)
                        ->setChangeFrequency('weekly')
                );
            }
        }

        // ── Group (category) pages ────────────────────────────────────────────
        $groups = Group::select('id', 'slug', 'updated_at')->get();

        foreach ($groups as $group) {
            foreach ($locales as $locale) {
                $sitemap->add(
                    Url::create("{$baseUrl}/{$locale}/products/{$group->slug}")
                        ->setLastModificationDate($group->updated_at)
                        ->setPriority(0.8)
                        ->setChangeFrequency('weekly')
                );
            }
        }

        // ── Individual product pages ──────────────────────────────────────────
        $products = Product::select('id', 'slug', 'group_id', 'updated_at')
            ->with('group:id,slug')
            ->get();

        foreach ($products as $product) {
            if (! $product->group || ! $product->slug || ! $product->group->slug) {
                continue;
            }

            foreach ($locales as $locale) {
                $sitemap->add(
                    Url::create("{$baseUrl}/{$locale}/products/{$product->group->slug}/{$product->slug}")
                        ->setLastModificationDate($product->updated_at)
                        ->setPriority(0.7)
                        ->setChangeFrequency('monthly')
                );
            }
        }

        return $sitemap->toResponse(request());
    }
}