<?php

namespace App\Http\Controllers;

use App\Models\Group;
use Inertia\Inertia;
use Inertia\Response;

class HomeController extends Controller
{
    public function index(): Response
    {
        $groups = Group::select('id', 'name', 'ar_name', 'image')
            ->withCount('products')
            ->get()
            ->map(fn (Group $group) => [
                'id'            => $group->id,
                'name'          => $group->name,
                'ar_name'       => $group->ar_name,
                'image'         => $group->image
                                    ? asset('storage/' . $group->image)
                                    : null,
                'product_count' => $group->products_count,
            ]);

        return Inertia::render('welcome', [
            'groups' => $groups,
        ]);
    }
}