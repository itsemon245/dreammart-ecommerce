<?php

namespace App\Http\Middleware;

use App\Models\User;
use App\Models\Brand;
use Inertia\Middleware;
use App\Models\Category;
use Tightenco\Ziggy\Ziggy;
use Illuminate\Http\Request;

use function PHPSTORM_META\type;

class HandleInertiaRequests extends Middleware
{
    /**
     * The root template that is loaded on the first page visit.
     *
     * @var string
     */
    protected $rootView = 'app';

    /**
     * Determine the current asset version.
     */
    public function version(Request $request): string|null
    {
        return parent::version($request);
    }

    /**
     * Define the props that are shared by default.
     *
     * @return array<string, mixed>
     */
    public function share(Request $request): array
    {
        return array_merge(parent::share($request), [
            'auth' => [
                'user' => auth()->user(),
            ],
            'csrfToken' => csrf_token(),
            'success' => [
                'message' => session('success')
            ],
            'info' => [
                'message' => session('info')
            ],
            'warning' => [
                'message' => session('warning')
            ],
            'error' => [
                'message' => session('danger')
            ],
            'categories' => Category::get(),
            'brands' => Brand::get(),
            'ziggy' => function () use ($request) {
                return array_merge((new Ziggy)->toArray(), [
                    'location' => $request->url(),
                ]);
            },
        ]);
    }
}
