<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\BannerAdvertisement;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use PhpParser\Builder\Function_;

class FrontController extends Controller
{
    //
    public Function index(){
            $categories = Category::all();

            $posts = Post::with(['category'])
                ->where('is_featured', 'not_featured')
                ->latest()
                ->take(3)
                ->get();
            
            $featured_posts = Post::with(['Category'])
                ->where('is_featured', 'featured')
                ->inRandomOrder()
                ->take(3)
                ->get();

            $banner_advertisements =
            BannerAdvertisement::where('is_active', 'active')
                ->where('type', 'banner')
                ->inRandomOrder()
                ->first();

            $authors = Author::all();

            $entertainment_posts = Post::whereHas('category', function($query){
                $query->where('judul', 'Entertainment');
            })
            ->where('is_featured', 'not_featured')
            ->latest()
            ->take(3)
            ->get();

            $education_posts = Post::whereHas('category', function($query){
                $query->where('judul', 'Education');
            })
            ->where('is_featured', 'not_featured')
            ->latest()
            ->take(3)
            ->get();

            $archievement_posts = Post::whereHas('category', function($query){
                $query->where('judul', 'Archievement');
            })
            ->where('is_featured', 'not_featured')
            ->latest()
            ->take(3)
            ->get();


            return view('front.index',
            compact('categories', 'authors', 'entertainment_posts', 'posts', 'featured_posts', 'banner_advertisements', 'education_posts', 'archievement_posts'));
    }

    public Function category (Category $category) {
        $categories = Category::all();
        $banner_advertisements = BannerAdvertisement::where('is_active', 'active')
            ->where('type', 'banner')
            ->inRandomOrder()
            ->first();

        return view('front.category', compact('category', 'categories', 'banner_advertisements'));
    }

    public function author (Author $author) {
        $categories = Category::all();
        $authors = Author::find ($author);
        $banner_advertisements = BannerAdvertisement::where('is_active', 'active')
            ->where('type', 'banner')
            ->inRandomOrder()
            ->first();

        return view('front.author', compact('categories', 'banner_advertisements', 'authors'));
    }
}
