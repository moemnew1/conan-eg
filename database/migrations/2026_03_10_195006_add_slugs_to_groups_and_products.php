<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;
use App\Models\Group;
use App\Models\Product;

return new class extends Migration
{
    public function up(): void
    {
        // ── Groups ────────────────────────────────────────────────────────────
        if (!Schema::hasColumn('groups', 'slug')) {
            Schema::table('groups', function (Blueprint $table) {
                $table->string('slug')->nullable()->after('name');
            });

            Group::all()->each(function (Group $group) {
                $base = Str::slug($group->name) ?: 'group-' . $group->id;
                $slug = $base;
                $i    = 1;
                while (Group::where('slug', $slug)->where('id', '!=', $group->id)->exists()) {
                    $slug = $base . '-' . $i++;
                }
                $group->timestamps = false;
                $group->slug = $slug;
                $group->save();
            });

            Schema::table('groups', function (Blueprint $table) {
                $table->unique('slug');
            });
        }

        // ── Products ──────────────────────────────────────────────────────────
        if (!Schema::hasColumn('products', 'slug')) {
            Schema::table('products', function (Blueprint $table) {
                $table->string('slug')->nullable()->after('name');
            });

            // Back-fill slugs, ensuring uniqueness per group
            $seenSlugs = []; // [group_id => [slug => true]]

            Product::orderBy('id')->each(function (Product $product) use (&$seenSlugs) {
                $groupId = $product->group_id;
                $base    = Str::slug($product->name) ?: 'product-' . $product->id;

                if (! isset($seenSlugs[$groupId])) {
                    $seenSlugs[$groupId] = [];
                }

                $slug = $base;
                $i    = 1;
                while (isset($seenSlugs[$groupId][$slug])) {
                    $slug = $base . '-' . $i++;
                }

                $seenSlugs[$groupId][$slug] = true;

                $product->timestamps = false;
                $product->slug = $slug;
                $product->save();
            });

            Schema::table('products', function (Blueprint $table) {
                $table->unique(['group_id', 'slug']);
            });
        }
    }

    public function down(): void
    {
        if (Schema::hasColumn('groups', 'slug')) {
            Schema::table('groups', function (Blueprint $table) {
                $table->dropUnique(['slug']);
                $table->dropColumn('slug');
            });
        }

        if (Schema::hasColumn('products', 'slug')) {
            Schema::table('products', function (Blueprint $table) {
                $table->dropUnique(['group_id', 'slug']);
                $table->dropColumn('slug');
            });
        }
    }
};