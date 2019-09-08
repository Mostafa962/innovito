<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Course;
use App\Observers\CategoryObserver;
use App\Observers\CourseObserver;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        // Category::observe(CategoryObserver::class);
        // Course::observe(CourseObserver::class);
    }
}
