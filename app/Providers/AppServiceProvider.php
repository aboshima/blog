<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::useBootstrap();

        $totalComments = 20;
        View::share('Comments', $totalComments);

        $categories = Category::where('is_active', 1)->select('id', 'name_ar as name')->get();
        View::share('categories', $categories);
        // ---------------------------
        $categories_cat = Category::where('is_active', 1)->get();
        View::share('categories_cat', $categories_cat);



        $latestPosts = Post::where('is_active', 1)->latest()->limit(4)->get();
        View::share('latestPosts', $latestPosts);


        $postsMore = Post::where('is_active', 1)->latest()->limit(5)->get();
        View::share('postsMore', $postsMore);
    }
}
