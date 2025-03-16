<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

// ✅ Import all models
use App\Models\Order;
use App\Models\Product;
use App\Models\Category;
use App\Models\Customer;
use App\Models\Payment;
use App\Models\Cart;
use App\Models\Wishlist;
use App\Models\OrderProduct;
use App\Observers\ModelActivityObserver;




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
        // ✅ Register the observer for all models
        Order::observe(ModelActivityObserver::class);
        Product::observe(ModelActivityObserver::class);
        Category::observe(ModelActivityObserver::class);
        Customer::observe(ModelActivityObserver::class);
        Payment::observe(ModelActivityObserver::class);
        Cart::observe(ModelActivityObserver::class);
        Wishlist::observe(ModelActivityObserver::class);
        OrderProduct::observe(ModelActivityObserver::class);
    }
}
